@extends('layouts.master')
@section('content')

<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Register and protect your website</div>
                </div>
            </div>
        </div>
    </div>
</div>
@php $uniqid = uniqid() @endphp

<div id="contact-info" class="container-fluid">
  	<div class="container">
    	<div class="panel-group">
      		<div class="panel panel-primary">
        		<form action="{{ route('protectwebsites2', $uniqid) }}" method="post">
          		@csrf            
            		<div class="panel-body">              
              			<div class="form-group form_part">
                			<label class="control-form-label col-sm-12 pb-2" for="Url">What is your website URL? <span class="required">*</span></label>
                			<div class="col-sm-6">
                				<input class="form-control form_font" type="text" maxlength="255" name="Url" id="Url" value="">
                				<span class="help">e.g. https://www.website.com</span>
                			</div>
                			<label id="" class="error" for="Url"></label>
              			</div>
              			<div class="form-group form_part d-none">
                			<label class="control-form-label col-sm-12 pb-2" for="method">Method</label>
                			<div class="col-sm-6">
                				<input class="form-control form_font" type="text" maxlength="255" name="method" id="method" value="{{ $uniqid }}">
                			</div>
              			</div>
              			<div class="control actions">
							<input class="ybtn ybtn-accent-color" type="submit" name="submit" value="Next">
						</div>
					</div>
				</form>
				@if(Session::has('error_message'))
				<div class="alert alert-danger">
				{{ Session::get('error_message') }}
				</div>
				@endif
			</div>
		</div>
	</div>
</div>

@endsection