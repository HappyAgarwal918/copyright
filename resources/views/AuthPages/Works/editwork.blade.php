@extends('layouts.master')
@section('content')

<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Edit work</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact-info" class="container-fluid">
	<div class="container pb-5">
    	<div class="panel-group">
      		<div class="panel panel-primary">
        		<form action="{{ route('work-edited',$id)}}" method="post">
          		@csrf            
            		<div class="panel-body">
            			<div class="form-group form_part">
	                		<label class="control-form-label col-sm-12 pb-2" for="category_id">Nature of work <span class="required">*</span></label>
	                		<div class="col-sm-6">
	                			<select class="form-control" name="category_id">
									<option value="Digital-Content">Digital content</option>
									<option value="Literary-Works">Literary works</option>
									<option value="Motion-Pictures">Motion pictures</option>
									<option value="Performing-Arts">Performing arts</option>
									<option value="Photographs">Photographs</option>
									<option value="Visual-Arts">Visual arts</option>
								</select>
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
	              		<div class="form-group form_part">
	                		<label class="control-form-label col-sm-12 pb-2" for="title">What is the title of the work you would like to register? <span class="required">*</span></label>
	                		<div class="col-sm-6">
	                			<input class="form-control form_font" maxlength="255" type="text" name="title" value="{{ $data->title }}">
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
	              		<div class="form-group form_part">
	                		<label class="control-form-label col-sm-12 pb-2" for="alt_titles">List any alternative titles if this work has them? <span class="required">*</span></label>
	                		<div class="col-sm-6">
	                			<input class="form-control form_font" maxlength="255" type="text" name="alt_titles" value="{{ $data->alt_titles }}">
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
	              		<div class="form-group form_part">
	                		<label class="control-form-label col-sm-12 pb-2" for="description">Provide a short description of your work? <span class="required">*</span></label>
	                		<div class="col-sm-6">
	                			<textarea class="textarea input-height-sm" name="description" cols="100" rows="10">{{ $data->description }}</textarea>
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
						<div class="control actions">
							<input class="ybtn ybtn-accent-color" type="submit" name="submit" value="Update">
							<a class="cancel" href="{{ route('overviewdetail',$id)}}">Back</a>
						</div>
	            	</div>
	          	</form>
	      	</div>
	  	</div>
	</div>
</div>
@endsection