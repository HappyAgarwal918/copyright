@extends('layouts.master')
@section('content')

<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Website Pages - {{ $url->Url }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact-info" class="container-fluid">
	<div class="container">
		<ul class="nav nav-tabs">
	        <li class="nav-item">
	            <a class="nav-link" href="{{ route('websites-view',$url->method)}}"><i class="fa fa-cog" aria-hidden="true"></i> Website overview</a>
	        </li>
	        <li class="nav-item">
	            <a class="nav-link active" href="{{ route('websitebadge',$url->method)}}"><i class="fas fa-certificate"></i> Badge</a>
	        </li>
	        <li class="nav-item">
	            <a class="nav-link" href="{{ route('websitepages',$url->method)}}"><i class='fas fa-file-invoice-dollar'></i> Pages</a>
	        </li>
	    </ul>
	</div>
	<div class="container mt-5">
	    <div class="row">
	        <div class="col-12">
	            <h2>Page information</h2>
	            <div class="over_view_underline"></div>
	        </div>
	        <div class="col-4 mt-3">Page URL</div>
	        <div class="col-8 mt-3"><a href="{{ $url->page_url }}" target="_blank">{{ $url->page_url }}</a></div>
	        <div class="col-12"><hr></div>
	        <div class="col-4 mt-3">Submission date</div>
	        <div class="col-8 mt-3">{{ Carbon\Carbon::parse($url->created_at)->format('j M Y , g:ia') }}</div>
	        <div class="col-12"><hr></div>
	        <div class="col-4 mt-3">Error</div>
	        <div class="col-8 mt-3">Badge not found</span> - 
						<a href="{{ route('websitebadge',$url->method)}}">Badge instructions</a></div>
	        <div class="col-12"><hr></div>
	        <div class="col-12">
	        	<a class="btn btn-sm btn-danger" href="{{ route('destroypage',[$url->method,$url->unique_id])}}">Delete</a>
	        </div>
	    </div>
	</div>
</div>

@endsection