@extends('layouts.master')
@section('content')

<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Review and submit</div>
                </div>
            </div>
        </div>
    </div>
</div>

@php
	$price = DB::table('package')->where('id','7')->first();
	$user_data = DB::table('users')->where('users.id',Auth::user()->id)
 	->leftjoin('package','users.package_id','package.id')
 	->first();
 	if(isset($user_data->package_id) && $user_data->package_id >= '1' && $user_data->package_expiry > now())
 	{
 		$sell_price = $price->regular_price - ($price->regular_price * ($user_data->takedown_discount/100));
 	}
@endphp

<!-- ======= Contact Us Section ======= -->
<section id="contact" class="">
  	<div class="container" data-aos="fade-up">
      		<h2>Content location</h2>
    	<div class="row">
      		<div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
      			<div class="php-email-form">
      				<h4>Original content</h4>
					<p>{{ $data->website_name }}</p>
				</div>
			</div>
			<div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
				<div class="php-email-form">
      				<h4>Infringing content</h4>
					<p><?php echo implode(', ', (json_decode($data->target)));?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="container mt-5" data-aos="fade-up">
      		<h2>Additional information</h2>
    	<div class="row">
      		<div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
      			<div class="php-email-form">
      				<h4>Original content</h4>
					<p>{{ $data->source_comments}}</p>
				</div>
				<div class="php-email-form">
      				<h4>Infringing content</h4>
					<p>{{ $data->target_comments}}</p>
				</div>
				<div class="php-email-form">
      				<h4>Additional comments</h4>
					<p>{{ $data->extra_comments}}</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container mt-5" data-aos="fade-up">
		<div class="alert alert-warning" role="alert">
		  You will be able to provide additional information if necessary even after you submit this takedown.
		</div>
	</div>
	<div class="container mt-5" data-aos="fade-up">
		<p><b>Full-service professional takedown</b><br>
		@if(empty($sell_price))
		    {{$price->currency}}{{ $price->regular_price }}
		@else
		<strike>{{$price->currency}}{{ $price->regular_price }}</strike> {{$price->currency}}{{ $sell_price }}</p>	
		@endif
		</p>
		<form action="{{ route('billing',['7',$id])}}" method="post">
			@csrf
			<fieldset>
				<div class="control" id="control_edit_takedown_legal">
					<div class="field">
						I swear under penalty of perjury that I have a reasonable good faith belief that use of the material in the manner specified above is not authorized by me, the company I represent, its agents, or the law.
						The information provided herein is accurate to the best of my knowledge.
						I have read and agree with the <a target="_blank" href="{{ route('terms') }}">terms and conditions</a> and hereby authorize @php echo url('') @endphp to act as my non-exclusive agent for this copyright infringement takedown process.
					</div>
				</div>
				<div class="control" id="control_edit_takedown_agreement">
					<div class="field">
						<div class="checkbox inline ">
							<input class="checkbox" id="input_edit_takedown_agreement" type="checkbox" name="agreement" value="1">
							<label for="input_edit_takedown_agreement">I agree</label>
						</div>
					</div>
				</div>
				<div class="control actions">
					<input id="id_of_your_button" class="" disabled type="submit" name="submit" value="Submit">
					<a class="button" href="{{ route('takedowndetails',$id)}}">Back</a>
				</div>
			</fieldset>
		</form>	
	</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
	$(function() {
    $('#input_edit_takedown_agreement').click(function() {
        if ($(this).is(':checked')) {
            $('#id_of_your_button').removeAttr('disabled');
            $('#id_of_your_button').addClass('ybtn ybtn-accent-color');
        } else {
            $('#id_of_your_button').attr('disabled', 'disabled');
            $('#id_of_your_button').removeClass('ybtn ybtn-accent-color');
        }
    });
});
</script>
@endsection