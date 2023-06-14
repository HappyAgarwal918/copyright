@extends('layouts.master')
@section('content')
@php $id = Request::segment(5); @endphp
<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">File details - {{ $data->file_name }}</div>
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
	    <div class="row">
	        <div class="col-12">
	            <h2>File information</h2>
	            <div class="over_view_underline"></div>
	        </div>
	        <div class="col-4 mt-3">File name</div>
	        <div class="col-8 mt-3">{{ $data->file_name }}</div>
	        <div class="col-12"><hr></div>
	        <div class="col-4 mt-3">Signature</div>
	        <div class="col-8 mt-3">{{ $data->unique_id }} - <a href="{{ $data->file_path }}" download="{{ $data->file_name }}">Download file</a></div>
	        <div class="col-12"><hr></div>
	        <div class="col-4 mt-3">Upload date</div>
	        <div class="col-8 mt-3">{{ Carbon\Carbon::parse($data->created_at)->format('Y-m-d') }}</div>
	        <div class="col-12"><hr></div>
	        <div class="col-4 mt-3">File size</div>
	        <div class="col-8 mt-3">
	        	@if($data->file_size < 1024)
				<span>{{ round($data->file_size, 2) }} bytes</span>
				@elseif($data->file_size >= 1024 && $data->file_size < 1048576)
				<span>{{ round($data->file_size/1024, 2) }} KB</span>
				@elseif($data->file_size >= 1048576)
				<span>{{ round($data->file_size/1048576, 2) }} MB</span>
				@endif
	        </div>
	        <div class="col-12"><hr></div>
	        <div class="col-4 mt-3">Status</div>
	        <div class="col-8 mt-3 text-success">Registered</div>
	        <div class="col-12"><hr></div>
	        <div class="col-12">
	        <a class="ybtn ybtn-accent-color" href="{{ route('editfilename',[$data->id,$id])}}">Edit</a>
	           	<a class="" href="{{ route('deleteworkfiles',[$data->id,$id])}}">Delete</a>
	        </div>
	    </div>
	</div>
</div>

@endsection