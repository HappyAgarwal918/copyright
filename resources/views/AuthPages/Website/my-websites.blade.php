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
                    <div class="page-title">My websites</div>
                </div>
            </div>
        </div>
    </div>
</div>
@if(Session::has('successful_message'))
<div class="alert alert-success">
{{ Session::get('successful_message') }}
</div>
@endif
@php $data = DB::table('website')->where('user_id',Auth::user()->id)->get(); @endphp
<div id="contact-info" class="container-fluid">
	<div class="container">
		<div class="row">
			@if(count($data) == 0)
			<div class="plugin-copyrights app manage works-files-manage">
				<h2>No registered websites yet</h2>
				<div class="over_view_underline"></div>
				<div class="mt-3"><p>Looks like you didn't add any websites yet.<a href="{{ route('protectwebsites1') }}">Register your website</a> now to get started or <a href="{{ route('protect-websites')}}">learn more</a> about how it works.</p></div>
			</div>
			@else
            <a href="{{ route('protectwebsites1') }}" class="ybtn ybtn-accent-color position">New website</a>
			<table id="restu_table" class="display">
			    <thead>
			        <tr>
			            <th>Name</th>
			            <th>Status</th>
			            <th>Date</th>
			        </tr>
			    </thead>
			    <tbody>
			    	@foreach ($data as $website)
			        <tr>
			            <td>
			            	<span class="name">
								<a href="{{route('websites-view',$website->method)}}">{{ $website->Url }}</a><br>
							</span>
							<span class="url">
								<a target="_blank" class="icon-text urltext icon-copyright-link-jump" href="http:\\{{ $website->Url }}">{{ $website->Url }}</a>
							</span>
			            </td>
			            <td><span class="status">{{ $website->status }}</span></td>
			            <td><span>{{ Carbon\Carbon::parse($website->created_at)->format('Y-m-d') }}</span></td>
			        </tr>
			        @endforeach
			    </tbody>
			</table>
			@endif
		</div>
	</div>
</div>

@endsection
	