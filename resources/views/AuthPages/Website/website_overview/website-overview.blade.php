@extends('layouts.master')
@section('content')

@php
	$url = DB::table('website')->where('method', $uniqid)->first();
	$badge = DB::table('badges')->get();
	$pages = DB::table('website_registered_pages')->where('user_id',Auth::user()->id)->get();
@endphp

<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Website overview - {{ $url->Url }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact-info" class="container-fluid">
	@if($url->status == 'Not verified')
	<div class="container mt-5">
	    <div class="row">
	        <div class="col-12">
	            <h2>Website information</h2>
	            <div class="over_view_underline"></div>
	        </div>
	        <div class="col-4 mt-3">Website URL</div>
	        <div class="col-8 mt-3"><a target="_blank" href="http:\\{{ $url->Url }}">{{ $url->Url }}</a></div>
	        <div class="col-12"><hr></div>
	        <div class="col-4 mt-3">Status</div>
	        <div class="col-8 mt-3">Not verified - <a href="{{route('protectwebsites2',$url->method)}}">Verify</a></div>
	        <div class="col-12"><hr></div>
	        <div class="col-12">
	        	<a href="{{route('protectwebsites2',$url->method)}}"class="ybtn ybtn-accent-color">Verify</a>
				<a class=""  href="{{ route('destroywebsite',$url->method)}}">Delete</a>
	        </div>
	    </div>
	</div>
	@else
	<div class="container">
		<ul class="nav nav-tabs">
	        <li class="nav-item">
	            <a class="nav-link active" href="{{ route('websites-view',$url->method)}}"><i class="fa fa-cog" aria-hidden="true"></i> Website overview</a>
	        </li>
	        <li class="nav-item">
	            <a class="nav-link" href="{{ route('websitebadge',$url->method)}}"><i class="fas fa-certificate"></i> Badge</a>
	        </li>
	        <li class="nav-item">
	            <a class="nav-link" href="{{ route('websitepages',$url->method)}}"><i class='fas fa-file-invoice-dollar'></i> Pages</a>
	        </li>
	    </ul>
	</div>

	<div class="container mt-5">
	    <div class="row">
	        <div class="col-12">
	            <h2>Website information</h2>
	            <div class="over_view_underline"></div>
	        </div>
	        <div class="col-4 mt-3">Website title</div>
	        <div class="col-8 mt-3">{{ $url->title }}</div>
	        <div class="col-12"><hr></div>
	        <div class="col-4 mt-3">Website URL</div>
	        <div class="col-8 mt-3"><a target="_blank" href="http:\\{{ $url->Url }}">{{ $url->Url }}</a></div>
	        <div class="col-12"><hr></div>
	        <div class="col-4 mt-3">Registration number</div>
	        <div class="col-8 mt-3">{{ $url->method }} - <a target="_blank" href="{{route('websitecertificate',$url->method)}}">View certificate</a></div>
	        <div class="col-12"><hr></div>
	        <div class="col-4 mt-3">Registration date</div>
	        <div class="col-8 mt-3">
	        	{{ Carbon\Carbon::parse($url->created_at)->format('Y-m-d') }}
	        </div>
	        <div class="col-12"><hr></div>
	        <div class="col-4 mt-3">Page registration</div>
	        <div class="col-8 mt-3">Automatic</div>
	        <div class="col-12"><hr></div>
	        <div class="col-4 mt-3">Status</div>
	        <div class="col-8 mt-3">Registered</div>
	        <div class="col-12"><hr></div>
	        <div class="col-4 mt-3">Get started</div>
	        <div class="col-8 mt-3"><a href="{{ route('websitebadge',$url->method)}}">Add a badge</a> to your site to get started</div>
	        <div class="col-12"><hr></div>
	        <div class="col-12">
	            <a class="btn btn-sm btn-danger" type="button" href="{{ route('destroywebsite',$url->method)}}">Delete</a>
	        </div>
	    </div>
	</div>
	@endif
</div>
@endsection