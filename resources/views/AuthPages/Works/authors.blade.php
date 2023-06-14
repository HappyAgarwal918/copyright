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
	width: 225px;
}
</style>
@endsection
@section('content')

<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Work authors</div>
                </div>
            </div>
        </div>
    </div>
</div>

@php
	$id = Request::segment(4);
	$work_author = DB::table('work_author')->where('unique_id',$id)->get();
	$data = DB::table('works')->where('unique_id',$id)->first();
@endphp	

<div id="contact-info" class="container-fluid">
	<div class="container pb-5">
		<div class="progress" style="height: 25px;">
		  	<div class="progress-bar progress-bar-striped bg-primary progress-bar-animated" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
		</div>
	</div>
  	<div class="container">
    	<div class="panel-group">
      		<div class="panel panel-primary">
				@if (count($work_author) == 0)
				<form action="{{ route('owners',$id)}}" method="post">
				@csrf
					<div class="panel-body">
						<input type="hidden" name="id" value="{{ $id }}">
						<div class="form-group form_part">
                			<label class="control-form-label col-sm-12 pb-2" for="self_author">Are you the only author of this work? <span class="required">*</span></label>
                			<div class="col-sm-12">
                  				<div class="form-check">
                    				<input class="form-check-input" type="radio" name="self_author" id="self_author1" value="1">
                    				<label class="form-check-label form_font" for="self_author1">Yes, I am the only author of this work.</label>
                  				</div>
                  				<div class="form-check">
                    				<input class="form-check-input" type="radio" name="self_author" id="self_author2" value="0">
                    				<label class="form-check-label form_font" for="self_author2">No, I'm not the author or not the only author of this work.</label>
                  				</div>
                			</div>
              			</div>
						<div class="form-group form_part self_author2-1 hidden">
							<a class="button" href="{{ route('addauthor',$id)}}">Add author</a>
						</div>
						<div class="control actions">
							<input class="ybtn ybtn-accent-color" type="submit" name="submit" value="Next">
							@if($data->status == 'Incomplete')
							<a class="button" href="{{ route('limitation',$id)}}">Back</a>
							@else
							<a class="button" href="{{ route('overviewdetail',$id)}}">Back</a>
							@endif
						</div>
					</div>
				</form>
				@else
				<div class="row">
					<a href="{{ route('addauthor',$id)}}" class="ybtn ybtn-accent-color position">Add another author</a>
					<table id="restu_table" class="display">
					    <thead>
					        <tr>
					            <th>Name</th>
					            <th>Contribution</th>
					            <th>&nbsp;</th>
					        </tr>
					    </thead>
					    <tbody>
					    	@foreach ($work_author as $author)
					        <tr>
					            <td>
					            	@if ($author->creator_type == 'person')
										<span class="name">{{ $author->fname.' '.$author->lname }}</span>
									@elseif ($author->creator_type == 'company')
										<span class="name">{{ $author->company }}</span>
									@else
										<span class="name">Anonymous</span>
									@endif
					            </td>
					            <td><span class="status unverified">{{ $author->contribution }}</span></td>
					            <td><span><a class="icon-text icon-system-delete delete" href="{{ route('deleteauthor',$author->id)}}">Delete</a></span></td>
					        </tr>
					        @endforeach
					    </tbody>
					</table>
				</div>
				@if(Session::has('successful_message'))
				<div class="alert alert-success">
				{{ Session::get('successful_message') }}
				</div>
				@endif
				<div class="control actions">
					@if($data->status == 'Incomplete')
					<a class="button" href="{{ route('limitation',$id)}}">Back</a>
					<a class="ybtn ybtn-accent-color" href="{{ route('owners',$id)}}">Next</a>
					@else
					<a class="button" href="{{ route('overviewdetail',$id)}}">Back</a>
					<a class="ybtn ybtn-accent-color" href="{{ route('overviewdetail',$id)}}">Next</a>
					@endif
				</div>
				@endif
			</div>
		</div>
	</div>
</div>
@endsection