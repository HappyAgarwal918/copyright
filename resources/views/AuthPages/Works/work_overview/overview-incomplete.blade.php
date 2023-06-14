@extends('layouts.master')
@section('content')
@php $id = Request::segment(4); @endphp
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
	        <div class="col-4 mt-3">Status</div>
	        <div class="col-8 mt-3">Incomplete - <a href="{{ $data->link }}">Resume</a></div>
	        <div class="col-12"><hr></div>
	        <div class="col-12">
	        	<a href="{{ $data->link }}"class="ybtn ybtn-accent-color">Resume</a>
	            <a class="" type="button" href="{{ route('deletework',$data->unique_id)}}">Delete</a>
	        </div>
	    </div>
	</div>
</div>
@endsection