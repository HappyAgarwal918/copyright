@extends('layouts.master')
@section('content')

<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Website Pages - {{ $url->Url }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact-info" class="container-fluid">
	<div class="container">
		<ul class="nav nav-tabs">
	        <li class="nav-item">
	            <a class="nav-link" href="{{ route('websites-view',$url->method)}}"><i class="fa fa-cog" aria-hidden="true"></i> Website overview</a>
	        </li>
	        <li class="nav-item">
	            <a class="nav-link" href="{{ route('websitebadge',$url->method)}}"><i class="fas fa-certificate"></i> Badge</a>
	        </li>
	        <li class="nav-item">
	            <a class="nav-link active" href="{{ route('websitepages',$url->method)}}"><i class='fas fa-file-invoice-dollar'></i> Pages</a>
	        </li>
	    </ul>
	</div>
	@if(Session::has('successful_message'))
	<div class="alert alert-success">
	{{ Session::get('successful_message') }}
	</div>
	@endif
	<div id="contact-info" class="container-fluid">
	  	<div class="container">
	    	<div class="panel-group">
	      		<div class="panel panel-primary">
	        		<form action="{{ route('pageadded',$url->method)}}" method="post">
	          		@csrf            
	            		<div class="panel-body">
	            			<div class="form-group form_part">
		                		<label class="control-form-label col-sm-12 pb-2" for="page_url">Enter the page URL you would like to register <span class="required">*</span></label>
		                		<div class="col-sm-6"> 
		                  			<input type="text" class="form-control form_font" name="page_url" maxlength="255" placeholder="{{ $url->Url}}/page">
		                		</div>
		                		<span class="help">e.g. {{ $url->Url}}/page</span>
		              		</div>
		              		<div class="control actions">
								<input class="ybtn ybtn-accent-color" type="submit" name="submit" value="Next">
								<a class="cancel" href="{{ route('websitepages',$url->method)}}">Back</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection