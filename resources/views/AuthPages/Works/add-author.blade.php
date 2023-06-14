@extends('layouts.master')
@section('content')
@php $id = Request::segment(4); @endphp
<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Add author</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact-info" class="container-fluid">
	<div class="container pb-5">
		<div class="progress" style="height: 25px;">
		  	<div class="progress-bar progress-bar-striped bg-primary progress-bar-animated" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
		</div>
	</div>
  	<div class="container">
    	<div class="panel-group">
      		<div class="panel panel-primary">
      			<form action="{{ route('saveworkauthor')}}" method="post">
				@csrf
					<div class="panel-body">
						<input type="hidden" name="unique_id" value="{{ $id }}">
						<div class="form-group form_part">
                			<label class="control-form-label col-sm-12 pb-2" for="known">Is the name of the author of this work known and identified? <span class="required">*</span></label>
                			<div class="col-sm-12">
                  				<div class="form-check">
                    				<input class="form-check-input" type="radio" name="known" id="known1" value="1">
                    				<label class="form-check-label form_font" for="known1">Yes, the author is known and identified.</label>
                  				</div>
                  				<div class="form-check">
                    				<input class="form-check-input" type="radio" name="known" id="known2" value="0">
                    				<label class="form-check-label form_font" for="known2">No, the work was created anonymously or the author is not known.</label>
                  				</div>
                			</div>
              			</div>
              			<div class="form-group form_part known1-1 hidden">
                			<label class="control-form-label col-sm-12 pb-2" for="creator_type">Who was the author of this work? <span class="required">*</span></label>
                			<div class="col-sm-12">
                  				<div class="form-check">
                    				<input class="form-check-input creator_type" type="radio" name="creator_type" id="creator_type1" value="person">
                    				<label class="form-check-label form_font" for="creator_type1">This work was created by an individual.</label>
                  				</div>
                  				<div class="form-check">
                    				<input class="form-check-input creator_type" type="radio" name="creator_type" id="creator_type2" value="company">
                    				<label class="form-check-label form_font" for="creator_type2">This work was created by a company.</label>
                  				</div>
                			</div>
              			</div>
              			<div class="form-group form_part creator_type1-1 hidden">
	                		<label class="control-form-label col-sm-12 pb-2" for="fname">First name <span class="required">*</span></label>
	                		<div class="col-sm-6"> 
	                  			<input type="text" class="form-control form_font" name="fname" maxlength="100">
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
	              		<div class="form-group form_part creator_type1-1 hidden">
	                		<label class="control-form-label col-sm-12 pb-2" for="mname">Middle name <span class="required">*</span></label>
	                		<div class="col-sm-6"> 
	                  			<input type="text" class="form-control form_font" name="mname" maxlength="100">
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
	              		<div class="form-group form_part creator_type1-1 hidden">
	                		<label class="control-form-label col-sm-12 pb-2" for="lname">Last name <span class="required">*</span></label>
	                		<div class="col-sm-6"> 
	                  			<input type="text" class="form-control form_font" name="lname" maxlength="100">
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
	              		<div class="form-group form_part creator_type2-1 hidden">
	                		<label class="control-form-label col-sm-12 pb-2" for="company">Company name <span class="required">*</span></label>
	                		<div class="col-sm-6"> 
	                  			<input type="text" class="form-control form_font" name="company" maxlength="100">
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
	              		<div class="form-group form_part creator_type-1 hidden">
	                		<label class="control-form-label col-sm-12 pb-2" for="country">Country <span class="required">*</span></label>
	                		<div class="col-sm-6">
	                			<select class="form-control form_font" id="" name="country">
									<option value="" selected="selected">Select</option>
									@php $countries = DB::table('countries')->get() @endphp
									@foreach ($countries as $country)
									<option value="{{ $country->sortname }}">{{ $country->name }}</option>
									@endforeach
								</select>
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
	              		<div class="form-group form_part creator_type-1 hidden">
	                		<label class="control-form-label col-sm-12 pb-2" for="state">State / Province <span class="required">*</span></label>
	                		<div class="col-sm-6"> 
	                  			<input type="text" class="form-control form_font" name="state" maxlength="100">
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
	              		<div class="form-group form_part creator_type-1 hidden">
	                		<label class="control-form-label col-sm-12 pb-2" for="city">City <span class="required">*</span></label>
	                		<div class="col-sm-6"> 
	                  			<input type="text" class="form-control form_font" name="city" maxlength="100">
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
	              		<div class="form-group form_part creator_type-1 hidden">
	                		<label class="control-form-label col-sm-12 pb-2" for="address">Address <span class="required">*</span></label>
	                		<div class="col-sm-6">
	                			<textarea class="textarea input-height-sm" id="" name="address" cols="100" rows="5"></textarea>
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
	              		<div class="form-group form_part creator_type-1 hidden">
	                		<label class="control-form-label col-sm-12 pb-2" for="zip">Zip / Postal code <span class="required">*</span></label>
	                		<div class="col-sm-6"> 
	                  			<input type="text" class="form-control form_font" name="zip" maxlength="100">
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
	              		<div class="form-group form_part creator_type1-1 hidden">
                			<label class="control-form-label col-sm-12 pb-2" for="nickname">Did the author use a pseudonym or a fictitious name? <span class="required">*</span></label>
                			<div class="col-sm-12">
                  				<div class="form-check">
                    				<input class="form-check-input" type="radio" name="nickname" id="nickname1" value="1">
                    				<label class="form-check-label form_font" for="nickname1">Yes, the author used a pseudonym or a fictitious name.</label>
                  				</div>
                  				<div class="form-check">
                    				<input class="form-check-input" type="radio" name="nickname" id="nickname2" value="0">
                    				<label class="form-check-label form_font" for="nickname2">No, the author used their real name.</label>
                  				</div>
                			</div>
              			</div>
              			<div class="form-group form_part nickname1-1 hidden">
	                		<label class="control-form-label col-sm-12 pb-2" for="pseudonym">Pseudonym <span class="required">*</span></label>
	                		<div class="col-sm-6"> 
	                  			<input type="text" class="form-control form_font" name="pseudonym" maxlength="100">
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
	              		<div class="form-group form_part creator_type-1 hidden">
                			<label class="control-form-label col-sm-12 pb-2" for="hired">Was the author hired to create the work? <span class="required">*</span></label>
                			<div class="col-sm-12">
                  				<div class="form-check">
                    				<input class="form-check-input" type="radio" name="hired" id="hired1" value="1">
                    				<label class="form-check-label form_font" for="hired1">Yes, the author was hired to create the work.</label>
                  				</div>
                  				<div class="form-check">
                    				<input class="form-check-input" type="radio" name="hired" id="hired2" value="0">
                    				<label class="form-check-label form_font" for="hired2">No, this wasn't a work for hire.</label>
                  				</div>
                			</div>
              			</div>
              			<div class="form-group form_part">
	                		<label class="control-form-label col-sm-12 pb-2" for="contribution">Briefly describe author's contribution. <span class="required">*</span></label>
	                		<div class="col-sm-6"> 
	                  			<input type="text" class="form-control form_font" name="contribution" maxlength="255">
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
	              		<div class="control actions">
							<input class="ybtn ybtn-accent-color" type="submit" name="submit" value="Save">
							<a class="cancel" href="{{ route('authors',$id)}}">Back</a>
						</div>
					</div>
				</form>
      		</div>
      	</div>
    </div>
</div>
@endsection