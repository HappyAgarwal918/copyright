@extends('layouts.master')
@section('content')

<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Website spy lookup</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="spy-lookup">
  <div class="container">
    <div class="row justify-content-center">
        <h4>How to use website spy?</h4>
        <p>Once you find a website that infringes on your intellectual property, you need to find ownership and contact information of the website owner and its hosting provider.Our website spy tool allows you to do just that! Simply enter the website URL in the text box below and it will automatically find all the relevant information you need to know about the infringing website and its hoster.	You may use these details to take necessary steps to take down the infringing content.</p>
      <div class="col-lg-6">
		<h3>Enter domain name you would like to lookup<span class="required">*</span></h3>
        <form action="{{ route('spy2') }}" method="post">
			@csrf
			<fieldset>
				<div class="control" id="control_edit_spy_lookup">
					<div class="field">					
						<input class="text " id="input_edit_spy_lookup_domain" placeholder="mywebsite.com" maxlength="255" type="text" name="domain" value="">
						@if(Session::has('error_message'))
						<div class="alert-danger" style="color: #bb0011; background-color: #fff;">
						{{ Session::get('error_message') }}
						</div>
						@endif
					</div>
				</div>
					<input class="button submit " type="submit" name="submit" value="Submit">
			</fieldset>
			<input type="hidden" name="do_submit" value="1">
		</form>
		<div class="mt-3">
			<a class="cancel h4" href="{{ route('spy') }}">Back</a>
		</div>
      </div>
    </div>
  </div>
</div>
@endsection
