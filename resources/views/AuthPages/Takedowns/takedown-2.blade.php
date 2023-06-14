@extends('layouts.master')
@section('content')

<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Additional details</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact-info" class="container-fluid">
  	<div class="container">
    	<div class="panel-group">
      		<div class="panel panel-primary">
				<form action="{{ route('takedownreview',$id) }}" method="post">
					@csrf
					<div class="panel-body">              
              			<div class="form-group form_part">
                			<label class="control-form-label col-sm-12 pb-2" for="source_comments">Describe and tell us about your original content <span class="required">*</span></label>
                			<div class="col-sm-12">
                    			<textarea class="textarea input-height-md" id="source_comments" name="source_comments" cols="100" rows="10"></textarea>
                			</div>
                			<label id="" class="error" for="source_comments"></label>
              			</div>
              			<div class="form-group form_part">
                			<label class="control-form-label col-sm-12 pb-2" for="target_comments">Tell us how your original work was infringed <span class="required">*</span></label>
                			<div class="col-sm-12">
                    			<textarea class="textarea input-height-md" id="target_comments" name="target_comments" cols="100" rows="10"></textarea>
                			</div>
                			<label id="" class="error" for="target_comments"></label>
              			</div>
              			<div class="form-group form_part">
                			<label class="control-form-label col-sm-12 pb-2" for="extra_comments">Provide any additional details you may deem necessary</label>
                			<div class="col-sm-12">
                    			<textarea class="textarea input-height-md" id="extra_comments" name="extra_comments" cols="100" rows="10"></textarea>
                			</div>
                			<label id="" class="error" for="extra_comments"></label>
              			</div>
              			<div class="control actions">
							<input class="ybtn ybtn-accent-color" type="submit" name="submit" value="Next">
							<a class="button" href="{{ route('takedownindex',$id) }}">Back</a>
						</div>
              		</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection