@extends('layouts.master')
@section('content')

@php $id = Request::segment(4); @endphp
<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Add owner</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact-info" class="container-fluid">
	<div class="container pb-5">
		<div class="progress" style="height: 25px;">
		  	<div class="progress-bar progress-bar-striped bg-primary progress-bar-animated" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
		</div>
	</div>
  	<div class="container">
    	<div class="panel-group">
      		<div class="panel panel-primary">
      			<form action="{{ route('saveworkowner')}}" method="post">
				@csrf
					<div class="panel-body">
						<input type="hidden" name="unique_id" value="{{ $id }}">
						<div class="form-group form_part">
                			<label class="control-form-label col-sm-12 pb-2" for="creator_type">Who owns this work? <span class="required">*</span></label>
                			<div class="col-sm-12">
                  				<div class="form-check">
                    				<input class="form-check-input creator_type" type="radio" name="creator_type" id="creator_type1" value="person">
                    				<label class="form-check-label form_font" for="creator_type1">This work is owned by an individual.</label>
                  				</div>
                  				<div class="form-check">
                    				<input class="form-check-input creator_type" type="radio" name="creator_type" id="creator_type2" value="company">
                    				<label class="form-check-label form_font" for="creator_type2">This work is owned by a company.</label>
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
	              		<div class="form-group form_part">
                			<label class="control-form-label col-sm-12 pb-2" for="statement">How was the copyright obtained? <span class="required">*</span></label>
                			<div class="col-sm-12">
                  				<div class="form-check">
                    				<input class="form-check-input" type="radio" name="statement" id="statement1" value="1">
                    				<label class="form-check-label form_font" for="statement1">By inheritance</label>
                  				</div>
                  				<div class="form-check">
                    				<input class="form-check-input" type="radio" name="statement" id="statement2" value="2">
                    				<label class="form-check-label form_font" for="statement2">By contract</label>
                  				</div>
                  				<div class="form-check">
                    				<input class="form-check-input" type="radio" name="statement" id="statement3" value="0">
                    				<label class="form-check-label form_font" for="statement3">Other</label>
                  				</div>
                			</div>
              			</div>
              			<div class="form-group form_part statement3-1 hidden">
	                		<label class="control-form-label col-sm-12 pb-2" for="statement_data">Please specify how the copyright was obtained. <span class="required">*</span></label>
	                		<div class="col-sm-6"> 
	                  			<input type="text" class="form-control form_font" name="statement_data" maxlength="255">
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
	              		<div class="control actions">
							<input class="ybtn ybtn-accent-color" type="submit" name="submit" value="Save">
							<a class="cancel" href="{{ route('owners',$id)}}">Back</a>
						</div>
					</div>
				</form>
      		</div>
      	</div>
    </div>
</div>
@endsection