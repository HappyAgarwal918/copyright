@extends('layouts.master')
@section('content')
<style type="text/css">
	.form_part {
	    margin-bottom: 15px;
	    border-bottom: 1px solid #eee;
	    padding-bottom: 10px;
	}
	.form_font {
	    font-size: 16px;
	}
</style>

<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">New takedown</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact-info" class="container-fluid">
  	<div class="container">
    	<div class="panel-group">
      		<div class="panel panel-primary">
        		<form action="{{ route('takedowndetails',$id) }}" method="post">
          		@csrf            
            		<div class="panel-body">
              			<div class="form-group form_part">
                			<label class="control-form-label col-sm-12 pb-2" for="source_online">Where is your original content located? <span class="required">*</span></label>
                			<div class="col-sm-12">
                  				<div class="form-check">
                    				<input class="form-check-input" type="radio" name="source_online" id="source_online1" value="Yes">
                    				<label class="form-check-label form_font" for="source_online1">Online, e.g. blog, website, etc.</label>
                  				</div>
                  				<div class="form-check">
                    				<input class="form-check-input" type="radio" name="source_online" id="source_online2" value="No">
                    				<label class="form-check-label form_font" for="source_online2">Elsewhere, e.g. camera, laptop, smartphone, etc.</label>
                  				</div>
                			</div>
                			<label id="" class="error" for="source_online"></label>
              			</div>
	              		<div class="form-group form_part source_online1-1 hidden">
	                		<label class="control-form-label col-sm-12 pb-2" for="website_url">What is the website URL where your original content is located?</label>
	                		<div class="col-sm-6"> 
	                  			<input type="text" class="form-control form_font" name="website_url" maxlength="128">
	                		</div>
	                		<span class="help">e.g. https://www.website.com/my-article.html</span>
	                		<label id="" class="error" for="website_url"></label>
	              		</div>
	              		<div class="form-group form_part source_online2-1 hidden">
	                		<label class="control-form-label col-sm-12 pb-2" for="website_name">What is the URL of your website?</label>
	                		<div class="col-sm-6"> 
	                  			<input type="text" class="form-control form_font" id="website_url" name="website_name" maxlength="128">
	                		</div>
	                		<span class="help">e.g. digital camera, computer, laptop, etc.</span>
	                		<label id="" class="error" for="website_name"></label>
	              		</div>
	              		<div class="form_part">
		              		<div class="form-group" id="control_edit_takedown_target">
		                		<label class="control-form-label col-sm-12 pb-2" for="input_edit_takedown_target">What is the website URL where the infringing content you want taken down is located? <span class="required">*</span></label>
		                		<div class="col-sm-6"> 
		                    		<input class="form-control form_font" placeholder="e.g. https://www.thief.com/stolen-article.html" maxlength="255" type="text" name="target[]" id="input_edit_takedown_target[]" value="">
		                		</div>
		                		<label id="" class="error" for="target"></label>
		              		</div>
		              		<div class="form-group">
		              			<div class="control" id="control_edit_takedown_add_target_location">
									<div class="field">
										<a onclick="addTargetLocation();return false;" href="">Add another location</a>
									</div>
								</div>
							</div>
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
