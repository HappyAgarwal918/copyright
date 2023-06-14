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
    width: 178px;
}
.url{
	color: black;
	font-size: 14px;
}
</style>
@endsection
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
@php $pages = DB::table('website_registered_pages')->where('user_id',Auth::user()->id)->get(); @endphp

<div id="contact-info" class="container-fluid">
	<div class="container">
		<ul class="nav nav-tabs">
	        <li class="nav-item">
	            <a class="nav-link" href="{{ route('websites-view',$url->method)}}"><i class="fa fa-cog" aria-hidden="true"></i> Website overview</a>
	        </li>
	        <li class="nav-item">
	            <a class="nav-link" href="{{ route('websitebadge',$url->method)}}"><i class="fas fa-certificate"></i> Badge</a>
	        </li>
	        <li class="nav-item">
	            <a class="nav-link active" href="{{ route('websitepages',$url->method)}}"><i class='fas fa-file-invoice-dollar'></i> Pages</a>
	        </li>
	    </ul>
	</div>
	<div class="container mt-5">
		@if(Session::has('successful_message'))
		<div class="alert alert-success">
		{{ Session::get('successful_message') }}
		</div>
		@endif
		@if(count($pages) == 0)
		<div class="plugin-copyrights app manage works-files-manage">	
			<h2>No registered pages yet</h2>
			<div class="over_view_underline"></div>
			<div class="mt-3"><p>There are no protected pages registered for this website yet. They will be discovered automatically or you may	<a href="{{ route('submitpages',$url->method)}}">add some manually</a> now.</p></div>
		</div>
		@else
		<div class="row">
            <a href="{{ route('submitpages',$url->method)}}" class="ybtn ybtn-accent-color position">Register Page</a>
            <table id="restu_table" class="display">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pages as $page)
                    <tr>
                        <td>
                            <span class="name"><a href="{{ route('viewpage',[$page->website_method,$page->unique_id] )}}">{{ $page->name }}</a><br></span>
							<span class="">
							<a href="{{ $page->page_url }}" target="_blank" class="url">{{ $page->name }}</a>
							</span>
                        </td>
                        <td><span class="">Badge not found</span></td>
                        <td><span>{{ Carbon\Carbon::parse($page->created_at)->format('Y-m-d') }}</span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
	</div>
</div>
@endsection