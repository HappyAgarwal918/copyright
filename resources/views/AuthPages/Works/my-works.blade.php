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
	width: 200px;
}
</style>
@endsection
@section('content')

<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">My works</div>
                </div>
            </div>
        </div>
    </div>
</div>
@php $data = DB::table('works')->where('user_id',Auth::user()->id)->get(); @endphp
<div id="contact-info" class="container-fluid">
	<div class="container">
		@if(count($data) == 0)
		<div class="row">
		<div class="plugin-copyrights app manage works-files-manage">	
			<h2>No registered works yet</h2>
			<div class="over_view_underline"></div>
			<div class="mt-3"><p>Looks like you didn't add any works yet.<a href="{{ route('registration') }}">Register your work</a> now to get started.</p></div>
		</div>
		</div>
		@else
		<div class="row">
			<a href="{{ route('registration') }}" class="ybtn ybtn-accent-color position">New registration</a>
			<table id="restu_table" class="display">
			    <thead>
			        <tr>
			            <th>Name</th>
			            <th>Category</th>
			            <th>Date</th>
			        </tr>
			    </thead>
			    <tbody>
			    	@foreach ($data as $work)
			        <tr>
			            <td>
			            	<span class="name">
								@if ($work->status == 'Completed')
						            <a href="{{route('work-overview',$work->unique_id)}}">{{ $work->title; }}</a><br>       
						        @elseif ($work->status == 'Incomplete')
						            <a href="{{route('overview-incomplete',$work->unique_id)}}">{{ $work->title; }}</a><br>
						        @endif
							</span>
			            </td>
			            <td><span class="status unverified">{{ $work->status; }}</span></td>
			            <td><span>{{ Carbon\Carbon::parse($work->created_at)->format('Y-m-d') }}</span></td>
			        </tr>
			        @endforeach
			    </tbody>
			</table>
		</div>
		@endif
	</div>
</div>

@endsection