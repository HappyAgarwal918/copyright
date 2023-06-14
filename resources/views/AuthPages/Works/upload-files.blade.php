@extends('layouts.master')
@section('content')
<head>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <style type="text/css">
        input[type="file"] {
            display: none;
        }
        .hidden {
            display: none;
        }
        .ybtn-outline{
            border: 2px solid #383ebf;
        }
        @media(min-width: 540px){
            .position{
                position: absolute !important;
            }   
        }
        .position{
            z-index: 99;
        }
        .url{
            color: black;
            font-size: 14px;
        }
    </style>
</head>

@php
    $workfile = DB::table('works')->where('works.unique_id', $id)
            ->leftjoin('users','works.user_id','users.id')
            ->leftjoin('package','users.package_id','package.id')
            ->first();
    $file = DB::table('work_files')->where('unique_id', $id)->get();

@endphp
<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Upload files</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact-info" class="container-fluid">
    <div class="container pb-5">
        <div class="progress" style="height: 25px;">
            <div class="progress-bar progress-bar-striped bg-primary progress-bar-animated" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
        </div>
    </div>
    <div class="container">
        <form action="{{route('saveworkfiles')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($message = Session::get('successful_message'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
            @endif

            <input type="hidden" name="unique_id" value="{{ $id }}">
            <div class="custom-file position">
                <label class="button browse-button ybtn ybtn-outline"> Select files
                <input type="file" name="file" class="custom-file-input img_input" id="image_uploads">
                </label>
                <button id="submit" type="submit" name="submit" class="ybtn ybtn-accent-color hidden">
                Upload Files
                </button>
            </div>
        </form>

        <table id="restu_table" class="display">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Size</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="filename"></td>
                    <td class="size"></td>
                </tr>
            </tbody>
        </table>
        @if(count($file) != 0)
        <form action="{{ route('work-overview',$id)}}" method="post">
            @csrf
            <input type="hidden" name="upload_files_now" value="1">
            <button id="uploader-work-continue" type="submit" name="submit" class="ybtn ybtn-accent-color">Continue</button>
        @endif
        <a id="uploader-work-cancel" class="skip-button back" href="{{ $workfile->link }}">Cancel</a>
        </form>

        <p class="notes mt-4">Max file size: 40 Mb<br />Total storage: {{ $workfile->backup_storage }} Gb - <a target="_blank" href="{{ route('pricing')}}">Get more storage</a><br /><!-- Storage left: 1,023.94 Mb --></p>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('input[type="file"]').change(function(e) {
            var filename = e.target.files[0].name;
            var size = e.target.files["0"].size;
            if(size > 41943040){
                Swal.fire(
                  'Max File Upload Size is 40 MB',
                )
            }else {
            $('#submit').removeClass('hidden')
            $(".filename").text(filename);

            if(size < 1024) {
                $(".size").html(size + ' bytes');
              } else if(size >= 1024 && size < 1048576) {
                $(".size").html(size/1024 + ' KB');
              } else if(size >= 1048576) {
                $(".size").html(size/1048576 + ' MB');
              }
          }
          });
    });
</script>
@endsection