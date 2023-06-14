@extends('layouts.master')
@section('content')

<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Domain name details - {{ $domain }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ======= Contact Us Section ======= -->
<section id="contact" class="">
  	<div class="container" data-aos="fade-up">

    	<div class="section-title">
      		<h2>Whois Detail</h2>
		</div>

    	<div class="row">
      		<div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
      			<div class="php-email-form">
      				<h2>Abuse contact email</h2>
					<p>abuse@godaddy.com</p>
				</div>
			</div>
		</div>
		<div class="row">
      		<div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
      			<div class="php-email-form">
					<h2>Domain registry details</h2>
					<form action="{{ route('spy') }}" method="post">
						<fieldset>
							<div class="control">
								<div class="field">
									<pre class="scrollable no-break" id="style-2">
										<code>
{!! $info_domain !!}
										</code>
									</pre>
								</div>
							</div>
						</fieldset>
						<fieldset>
							<div class="control actions">
								<a class="ybtn ybtn-accent-color" href="{{ route('spylookup') }}">New search</a>
								<a class="cancel" href="{{ route('spylookup') }}">Back</a>
							</div>
						</fieldset>
					</form>
      			</div>
      		</div>
    	</div>
  	</div>
</section><!-- End Contact Us Section -->
@endsection