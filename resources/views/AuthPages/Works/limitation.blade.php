@extends('layouts.master')
@section('content')

@php $id = Request::segment(4);
$data = DB::table('works')->where('unique_id',$id)->first(); @endphp
<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Limitation of claim</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact-info" class="container-fluid">
	<div class="container pb-5">
		<div class="progress" style="height: 25px;">
		  	<div class="progress-bar progress-bar-striped bg-primary progress-bar-animated" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
		</div>
	</div>
  	<div class="container">
    	<div class="panel-group">
      		<div class="panel panel-primary">
				<form action="{{ route('authors',$id)}}" method="post">
				@csrf
					<div class="panel-body">
						<input type="hidden" name="id" value="{{ $id }}">
						<div class="form-group form_part">
                			<label class="control-form-label col-sm-12 pb-2" for="derivative">Is this work a changed or derivative work? <span class="required">*</span></label>
                			<div class="col-sm-12">
                  				<div class="form-check">
                    				<input class="form-check-input" type="radio" name="derivative" id="derivative1" value="1">
                    				<label class="form-check-label form_font" for="derivative1">Yes, this is a changed or derivative work.</label>
                  				</div>
                  				<div class="form-check">
                    				<input class="form-check-input" type="radio" name="derivative" id="derivative2" value="0">
                    				<label class="form-check-label form_font" for="derivative2">No, this is not a changed or derivative work.</label>
                  				</div>
                			</div>
              			</div>
              			<div class="form-group form_part derivative1-1 hidden">
	                		<label class="control-form-label col-sm-12 pb-2" for="derivative_old">Briefly describe the pre-existing material(s) that your work is based on or incorporates. <span class="required">*</span></label>
	                		<div class="col-sm-6"> 
	                  			<input type="text" class="form-control form_font" name="derivative_old" maxlength="255">
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
	              		<div class="form-group form_part derivative1-1 hidden">
	                		<label class="control-form-label col-sm-12 pb-2" for="derivative_new">Briefly describe the new material(s) that has been added to the pre-existing work. <span class="required">*</span></label>
	                		<div class="col-sm-6"> 
	                  			<input type="text" class="form-control form_font" name="derivative_new" maxlength="255">
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
	              		<div class="form-group form_part">
                			<label class="control-form-label col-sm-12 pb-2" for="compilation">Is this work a compilation of material that is not your own? <span class="required">*</span></label>
                			<div class="col-sm-12">
                  				<div class="form-check">
                    				<input class="form-check-input" type="radio" name="compilation" id="compilation1" value="1">
                    				<label class="form-check-label form_font" for="compilation1">Yes, this work is a compilation of different materials that I do not own.</label>
                  				</div>
                  				<div class="form-check">
                    				<input class="form-check-input" type="radio" name="compilation" id="compilation2" value="0">
                    				<label class="form-check-label form_font" for="compilation2">No, this work is owned by me.</label>
                  				</div>
                			</div>
              			</div>
              			<div class="form-group form_part compilation1-1 hidden">
	                		<label class="control-form-label col-sm-12 pb-2" for="compilation_data">Briefly describe both the material that has been compiled and the compilation. <span class="required">*</span></label>
	                		<div class="col-sm-6"> 
	                  			<input type="text" class="form-control form_font" name="compilation_data" maxlength="255">
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
	              		<div class="control actions">
							<input class="ybtn ybtn-accent-color" type="submit" name="submit" value="Next">
							@if($data->status == 'Incomplete')
							<a class="button" href="{{ route('publication',$id)}}">Back</a>
							@else
							<a class="button" href="{{ route('overviewdetail',$id)}}">Back</a>
							@endif
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection