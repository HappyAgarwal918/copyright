@extends('layouts.master')
@section('content')

@php
	$id = Request::segment(4);
	$work_author = DB::table('work_author')->where('unique_id',$id)->get();
	$work_owner = DB::table('work_owner')->where('unique_id',$id)->get();
@endphp
<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Details - {{ $data->title }}</div>
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
                <a class="nav-link active" href="{{ route('overviewdetail',$id)}}"><i class="fas fa-info-circle"></i> Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('overviewfiles',$id)}}"><i class='fas fa-file-invoice-dollar'></i> Files</a>
            </li>
	    </ul>
	</div>
	<div class="container mt-5">
	    <div class="row">
	        <div class="col-12">
	            <h2>Work information</h2>
	            <div class="over_view_underline"></div>
	        </div>
	        <div class="col-4 mt-3">Title</div>
	        <div class="col-8 mt-3">{{ $data->title }}</div>
	        <div class="col-12"><hr></div>
	        <div class="col-4 mt-3">Alternative titles</div>
	        <div class="col-8 mt-3">{{ $data->alt_titles }}</div>
	        <div class="col-12"><hr></div>
	        <div class="col-4 mt-3">Description</div>
	        <div class="col-8 mt-3">{{ $data->description }}</div>
	        <div class="col-12"><hr></div>
	        <div class="col-12">
	        	<a class="ybtn ybtn-accent-color" href="{{route('editwork',$id)}}">Update</a>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-12">
	            <h2>Completion and publication</h2>
	            <div class="over_view_underline"></div>
	        </div>
	        <div class="col-4 mt-3">Completed in</div>
	        <div class="col-8 mt-3">{{ $data->title }}</div>
	        <div class="col-12"><hr></div>
	        @if ($data->first_publication == 1)
	        <div class="col-4 mt-3">First published in</div>
	        <div class="col-8 mt-3">{{ $data->publication_date }}</div>
	        <div class="col-12"><hr></div>
	        @endif
	        <div class="col-12">
	        	<a class="ybtn ybtn-accent-color" href="{{route('publication',$id)}}">Update</a>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-12">
	            <h2>Limitation of claim</h2>
	            <div class="over_view_underline"></div>
	        </div>
	        <div class="col-4 mt-3">Work is based on</div>
	        <div class="col-8 mt-3">
	        	@if ($data->derivative == 1)
				<span>{{ $data->derivative_old }}</span>
				@else
				<span>Original work</span>
				@endif
	        </div>
	        <div class="col-12"><hr></div>
	        @if ($data->derivative == 1)
	        <div class="col-4 mt-3">New materials</div>
	        <div class="col-8 mt-3">{{ $data->derivative_new }}</div>
	        <div class="col-12"><hr></div>
	        @endif
	        @if ($data->compilation == 1)
	        <div class="col-4 mt-3">Compiled materials</div>
	        <div class="col-8 mt-3">{{ $data->compilation_data }}</div>
	        <div class="col-12"><hr></div>
	        @endif
	        <div class="col-12">
	        	<a class="ybtn ybtn-accent-color" href="{{route('limitation',$id)}}">Update</a>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-12">
	            <h2>Authorship and rights</h2>
	            <div class="over_view_underline"></div>
	        </div>
	        <div class="col-4 mt-3">Author</div>
	        @if (count($work_author) == 0)
	        <div class="col-8 mt-3">{{ $data->first_name.' '.$data->last_name }}</div>
	        @else
	        	<div class="col-8 mt-3">
		        	@foreach ($work_author as $author)
		        		@if ($author->creator_type == 'person')
							<span class="name">{{ $author->fname.' '.$author->lname }}</span>
						@elseif ($author->creator_type == 'company')
							<span class="name">{{ $author->company }}</span>
						@else
							<span class="name">Anonymous</span>
						@endif
		        	@endforeach
		        </div>
	        @endif
	        <div class="col-12"><hr></div>
	        <div class="col-4 mt-3">Owner</div>
	        @if (count($work_owner) == 0)
	        <div class="col-8 mt-3">{{ $data->first_name.' '.$data->last_name }}</div>
	        @else
	        	<div class="col-8 mt-3">
		        	@foreach ($work_owner as $owner)
		        		@if ($owner->creator_type == 'person')
							<span class="name">{{ $owner->fname.' '.$owner->lname }}</span>
						@elseif ($owner->creator_type == 'company')
							<span class="name">{{ $owner->company }}</span>
						@else
							<span class="name">Anonymous</span>
						@endif
					@endforeach
				</div>
			@endif
	        <div class="col-12"><hr></div>
	        <div class="col-12">
	        	<a class="ybtn ybtn-accent-color" href="{{route('authors',$id)}}">Update authors</a>
				<a class="ybtn ybtn-accent-color" href="{{route('owners',$id)}}">Update owners</a>
	        </div>
	    </div>
	</div>
</div>

@endsection