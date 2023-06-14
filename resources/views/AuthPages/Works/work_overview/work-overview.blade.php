@extends('layouts.master')
@section('content')

@php
	$id = Request::segment(3);
	$data = DB::table('works')->where('unique_id',$id)->first();
@endphp

<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Work overview - {{ $data->title }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact-info" class="container-fluid">
	<div class="container">
		<ul class="nav nav-tabs">
	        <li class="nav-item">
	            <a class="nav-link active" href="{{ route('work-overview',$id)}}"><i class="fa fa-cog" aria-hidden="true"></i> Work overview</a>
	        </li>
	        <li class="nav-item">
	            <a class="nav-link" href="{{ route('overviewbadge',$id)}}"><i class="fas fa-certificate"></i> Badge</a>
	        </li>
	        <li class="nav-item">
	            <a class="nav-link" href="{{ route('overviewdetail',$id)}}"><i class="fas fa-info-circle"></i> Details</a>
	        </li>
	        <li class="nav-item">
	            <a class="nav-link" href="{{ route('overviewfiles',$id)}}"><i class='fas fa-file-invoice-dollar'></i> Files</a>
	        </li>
	    </ul>
	</div>

	<div class="container mt-5">
	    <div class="row">
	        <div class="col-12">
	            <h2>Registration information</h2>
	            <div class="over_view_underline"></div>
	        </div>
	        <div class="col-4 mt-3">Work title</div>
	        <div class="col-8 mt-3">{{ $data->title }}</div>
	        <div class="col-12"><hr></div>
	        <div class="col-4 mt-3">Work type</div>
	        <div class="col-8 mt-3">{{ $data->type }}</div>
	        <div class="col-12"><hr></div>
	        <div class="col-4 mt-3">Registration number</div>
	        <div class="col-8 mt-3">{{ $id }} - <a target="_blank" href="{{route('certificate',$id)}}">View certificate</a></div>
	        <div class="col-12"><hr></div>
	        <div class="col-4 mt-3">Registration date</div>
	        <div class="col-8 mt-3">
	        	{{ Carbon\Carbon::parse($data->created_at)->format('Y-m-d') }}
	        </div>
	        <div class="col-12"><hr></div>
	        <div class="col-4 mt-3">Status</div>
	        <div class="col-8 mt-3">{{ $data->status }}</div>
	        <div class="col-12"><hr></div>
	        <div class="col-12">
	           <a class="btn btn-sm btn-danger" href="{{ route('deletework',$data->unique_id)}}">Delete</a>
	        </div>
	    </div>
	</div>
</div>

@endsection