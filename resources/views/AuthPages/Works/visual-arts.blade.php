@extends('layouts.master')
@section('content')
@php $id = Request::segment(4); @endphp
<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Register and protect visual art</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact-info" class="container-fluid">
	<div class="container pb-5">
		<div class="progress" style="height: 25px;">
		  	<div class="progress-bar progress-bar-striped bg-primary progress-bar-animated" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">0%</div>
		</div>
	</div>
  	<div class="container">
    	<div class="panel-group">
      		<div class="panel panel-primary">
        		<form action="{{ route('publication',$id)}}" method="post">
          		@csrf            
            		<div class="panel-body">
            			<input type="hidden" name="id" value="{{ $id }}">
            			<div class="form-group form_part">
	                		<label class="control-form-label col-sm-12 pb-2" for="title">What is the title of the work you would like to register? <span class="required">*</span></label>
	                		<div class="col-sm-6"> 
	                  			<input type="text" class="form-control form_font" name="title" maxlength="255">
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
	              		<div class="form-group form_part">
	                		<label class="control-form-label col-sm-12 pb-2" for="alt_titles">List any alternative titles if this work has them <span class="required">*</span></label>
	                		<div class="col-sm-6"> 
	                  			<input type="text" class="form-control form_font" name="alt_titles" maxlength="255">
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
	              		<div class="form-group form_part">
	                		<label class="control-form-label col-sm-12 pb-2" for="description">Provide a short description of your work <span class="required">*</span></label>
	                		<div class="col-sm-6">
	                			<textarea class="textarea input-height-sm" id="" name="description" cols="100" rows="10"></textarea>
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
						<div class="control actions">
							<input class="ybtn ybtn-accent-color" type="submit" name="submit" value="Next">
						</div>
	            	</div>
	          	</form>
	      	</div>
	  	</div>
	</div>
</div>
@endsection