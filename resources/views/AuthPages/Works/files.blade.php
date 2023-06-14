@extends('layouts.master')
@section('content')
@php $id = Request::segment(4); @endphp
<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Work files</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact-info" class="container-fluid">
	<div class="container pb-5">
		<div class="progress" style="height: 25px;">
		  	<div class="progress-bar progress-bar-striped bg-primary progress-bar-animated" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
		</div>
	</div>
  	<div class="container">
    	<div class="panel-group">
      		<div class="panel panel-primary">
				<form action="{{ route('work-overview',$id)}}" method="post">
				@csrf
					<div class="panel-body">
						<input type="hidden" name="id" value="{{ $id }}">
						<div class="form-group form_part">
                			<label class="control-form-label col-sm-12 pb-2" for="upload_files_now">Would you like to upload your work files now? <span class="required">*</span></label>
                			<div class="col-sm-12">
                  				<div class="form-check">
                    				<input class="form-check-input" type="radio" name="upload_files_now" id="upload_files_now1" value="1">
                    				<label class="form-check-label form_font" for="upload_files_now1">Yes, I would like to upload my work files now.</label>
                  				</div>
                  				<div class="form-check">
                    				<input class="form-check-input" type="radio" name="upload_files_now" id="upload_files_now2" value="0">
                    				<label class="form-check-label form_font" for="upload_files_now2">No, I will upload them later.</label>
                  				</div>
                			</div>
              			</div>
						<div class="form-group form_part upload_files_now2-1 hidden">
							<a class="button" href="{{ route('upload',$id)}}">Upload files</a>
						</div>
						<div class="control actions">
							<input class="ybtn ybtn-accent-color" type="submit" name="submit" value="Next">
							<a class="button" href="{{ route('owners',$id)}}">Back</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection