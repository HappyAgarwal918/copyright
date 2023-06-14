@extends('layouts.master')
@section('content')
<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Takedown case #{{ $data->takedown_id }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact-info" class="container-fluid">
	<div class="container">
	    <div class="row">
	        <div class="col-12">
	            <h2>Takedown overview</h2>
	            <div class="over_view_underline"></div>
	        </div>
	        <div class="col-4 mt-3">Source location</div>
	        <div class="col-8 mt-3">
	        	@if($data->source_online == 'Yes')
	            <span class="url">{{ $data->website_url }}</span>
	            @elseif($data->source_online == 'No')
	            <span class="url">{{ $data->website_name }}</span>
	            @endif
	        </div>
	        <div class="col-12"><hr></div>
	        <div class="col-4 mt-3">Case number</div>
	        <div class="col-8 mt-3">#{{ $data->takedown_id }}</div>
	        <div class="col-12"><hr></div>
	        <div class="col-4 mt-3">Status</div>
	        <div class="col-8 mt-3">
	        	<span style="color: red;">{{ $data->status }} </span> -
	        	<a href="{{ $data->link }}">Resume</a></div>
	        <div class="col-12"><hr></div>
	        <div class="col-12">
	            <h2>Infringing location</h2>
	        </div>
	        <div class="over_view_underline"></div>
	        <div class="col-12 pt-3">
	            <a target="_blank" href=""><?php echo implode(', ', (json_decode($data->target)));?></a>
	        </div>
	        <div class="col-12"><hr></div>
	        <div class="col-12">
	            <a class="btn btn-sm btn-success" type="button" href="{{ $data->link }}">Resume</a>
	            <a class="btn btn-sm btn-danger" type="button" href="{{ route('destroytakedown',$data->takedown_id)}}">Delete</a>
	        </div>
	    </div>
	</div>
</div>
@endsection