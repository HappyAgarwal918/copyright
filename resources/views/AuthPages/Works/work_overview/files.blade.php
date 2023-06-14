@extends('layouts.master')
@section('css')
<style type="text/css">
@media(min-width: 540px){
    .position{
        position: absolute !important;
    }   
}
.position{
    z-index: 99;
    width: 212px;
}
.url{
	color: black;
	font-size: 14px;
}
</style>
@endsection
@section('content')

@php
    $id = Request::segment(4);
    $file = DB::table('work_files')->where('unique_id', $id)->get();
@endphp
<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Files - {{ $data->title }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact-info" class="container-fluid">
	<div class="container">
		<ul class="nav nav-tabs">
	        <li class="nav-item">
                <a class="nav-link" href="{{ route('work-overview',$id)}}"><i class="fa fa-cog" aria-hidden="true"></i> Work overview</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('overviewbadge',$id)}}"><i class="fas fa-certificate"></i> Badge</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('overviewdetail',$id)}}"><i class="fas fa-info-circle"></i> Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('overviewfiles',$id)}}"><i class='fas fa-file-invoice-dollar'></i> Files</a>
            </li>
	    </ul>
	</div>
	<div class="container mt-5">
		@if(count($file) == 0)
		<div class="plugin-copyrights app manage works-files-manage">	
			<h2>No files yet</h2>
			<div class="over_view_underline"></div>
			<div class="mt-3"><p>This work does not have any related files yet.<a href="{{ route('upload',$id)}}">Upload your work files</a> now.</p></div>
		</div>
		@else
		<div class="row">
            <a href="{{ route('upload',$id)}}" class="ybtn ybtn-accent-color position">Upload more files</a>
            <table id="restu_table" class="display">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Size</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($file as $files)
                    <tr>
                        <td>
                            <span class="name"><a href="{{ route('fileview',[$files->id,$files->unique_id]) }}">{{ $files->file_name }}</a></span>
                        </td>
                        <td>
                        	@if($files->file_size < 1024)
							<span>{{ round($files->file_size, 2) }} bytes</span>
							@elseif($files->file_size >= 1024 && $files->file_size < 1048576)
							<span>{{ round($files->file_size/1024, 2) }} KB</span>
							@elseif($files->file_size >= 1048576)
							<span>{{ round($files->file_size/1048576, 2) }} MB</span>
							@endif
                        </td>
                        <td><span>{{ Carbon\Carbon::parse($files->created_at)->format('Y-m-d') }}</span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <p class="notes">Total storage available: 1 Gb - <a target="_blank" href="{{ route('pricing')}}">Get more storage</a><br>Total storage left: 1,023.97 Mb<br>Storage used in this work: 29 Kb</p>
        @endif
	</div>
</div>

@endsection