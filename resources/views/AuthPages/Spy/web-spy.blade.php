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
	width: 160px;
}
.urltext, .urltext:hover {
	color: black;
	font-size: 12px;
}
</style>
@endsection
@section('content')

<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Website spy</div>
                </div>
            </div>
        </div>
    </div>
</div>
@php $data = DB::table('spy')->where('user_id',Auth::user()->id)->get(); @endphp

<div id="contact-info" class="container-fluid">
	<div class="container">
		<div class="row">
			@if (count($data) == 0)
			<div class="plugin-copyrights app manage works-files-manage">
                <h2>No domain name lookups yet</h2>
                <div class="over_view_underline"></div>
                <div class="mt-3"><p>Looks like you didn't search for any domain names yet. Run <a href="{{ route('spylookup')}}">a new lookup</a> now to get started.</p></div>
            </div>
			@else
			<a href="{{ route('spylookup') }}" class="ybtn ybtn-accent-color position">New search</a>
			<table id="restu_table" class="display">
			    <thead>
			        <tr>
			            <th>Name</th>
			            <th>Date</th>
			        </tr>
			    </thead>
			    <tbody>
			    	@foreach ($data as $spy)
			        <tr>
			            <td>
			            	<span class="name">
								<a href="{{route('spy3',['url'=>$spy->domain])}}">{{ $spy->domain }}</a><br>
							</span>
							<span class="url">
								<a target="_blank" class="icon-text urltext icon-copyright-link-jump" href="http:\\{{ $spy->domain; }}">{{ $spy->domain; }}</a>
							</span>
			            </td>
			            <td><span>{{ Carbon\Carbon::parse($spy->created_at)->format('Y-m-d') }}</span></td>
			        </tr>
			        @endforeach
			    </tbody>
			</table>
			@endif
		</div>
	</div>
</div>

@endsection