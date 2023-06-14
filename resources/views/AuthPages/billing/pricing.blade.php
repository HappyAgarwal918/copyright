@extends('layouts.master')
@section('css')
<link href="{{ asset('asset/css/pricing.css')}}" rel="stylesheet">
@endsection
@section('content')
<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Pricing</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- start Pricing Plan 2 -->
	<section id="pricing-plan2" class="pricing-plan-2 pricing">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="toggle-price-starter2-year" style="text-align: center;">
						<button class="ybtn ybtn-accent-color" onclick="changePlanStarter2('month')">Choose Monthly</button>
					</div>
					<div class="toggle-price-starter2-month" style="text-align: center;">
						<button class="ybtn ybtn-accent-color" onclick="changePlanStarter2('year')">Choose Annually</button>
					</div>
				</div>
				<div class="col-sm-12 pricing-table">
					<div class="pricing-plan">
						<div class="pricing-plan-title-style2 pricing-plan-style2-bg priceplan-title-style2-before clearfix">
							<h3>Business</h3>
						</div>
						<div class="pricing-plan-wrap starter">
							<div class="price-holder">
								<div class="toggle-price-starter2-year">
									<p class="dolar"><strike><sup>{{ $pricing[3]->currency }}</sup>{{ $pricing[3]->regular_price }} / year</strike><br><br>
										<sup>{{ $pricing[3]->currency }}</sup> {{ $pricing[3]->price }} <sub>/year</sub></p>
								</div>
								<div class="toggle-price-starter2-month">
									<p class="dolar"><sup>{{ $pricing[0]->currency }}</sup> {{ $pricing[0]->price }} <sub>/month<strong>*</strong></sub></p>
								</div>
							</div>
							<ul class="list-unstyled">
								<li>Registered works: {{ $pricing[0]->registered_works }} / month</li>
								<li>Files per work: {{ $pricing[0]->file_per_work }} / work</li>
								<li>Protected websites: {{ $pricing[0]->protected_websites }} websites</li>
								<li>Protected pages: {{ $pricing[0]->protected_pages }} / website</li>
								<li>Backup storage: {{ $pricing[0]->backup_storage }} Gb</li>
								<li><a href="{{route('professional-takedowns')}}" style="color: black;">Takedowns</a> discount: {{ $pricing[0]->takedown_discount }}%</li>
								<li>HTTPS delivery: {{ $pricing[0]->https_delievery }}</li>
								<li>Website spy: {{ $pricing[0]->website_spy }}</li>
								<li>Verified status: {{ $pricing[0]->verified_status }}</li>
							</ul>
							<div class="toggle-price-starter2-year">
								@if ($user->package_id == '4' && $user->package_expiry > now())
								<a class="btn-get-started" href="#">Your current plan</a>
								@else
								<a class="btn-get-started" href="{{route('billing',['4',uniqid()])}}">Contact Us</a>
								@endif
							</div><!-- choose-price-plan-yearly -->
							<div class="toggle-price-starter2-month">
								@if ($user->package_id == '1' && $user->package_expiry > now() || $user->package_id == '4' && $user->package_expiry > now())
								<a class="btn-get-started" href="#">Your current plan</a>
								@else
								<a class="btn-get-started" href="{{route('billing',['1',uniqid()])}}">Contact Us</a>
								@endif
							</div><!-- choose-price-plan-monthly -->
						</div><!-- end pricing-plan-wrap -->
					</div><!-- end pricing-plan -->
					<div class="pricing-plan active">
						<div class="pricing-plan-title-style2 pricing-plan-style2-bg priceplan-title-style2-before clearfix">
							<h3>Professional</h3>
						</div>
						<div class="pricing-plan-wrap standard">
							<div class="price-holder">
								<div class="toggle-price-starter2-year">
									<p class="dolar"><strike>{{ $pricing[4]->currency }} {{ $pricing[4]->regular_price }} / year</strike><br><br>
										<sup>{{ $pricing[4]->currency }}</sup> {{ $pricing[4]->price }} <sub>/year</sub></p>
								</div>
								<div class="toggle-price-starter2-month">
									<p class="dolar"><sup>{{ $pricing[1]->currency }}</sup> {{ $pricing[1]->price }} <sub>/month<strong>*</strong></sub></p>
								</div>
							</div>
							<ul class="list-unstyled">
								<li>Registered works: {{ $pricing[1]->registered_works }} / month</li>
								<li>Files per work: {{ $pricing[1]->file_per_work }} / work</li>
								<li>Protected websites: {{ $pricing[1]->protected_websites }} websites</li>
								<li>Protected pages: {{ $pricing[1]->protected_pages }} / website</li>
								<li>Backup storage: {{ $pricing[1]->backup_storage }} Gb</li>
								<li><a href="{{route('professional-takedowns')}}" style="color: black;">Takedowns</a> discount: {{ $pricing[1]->takedown_discount }}%</li>
								<li>HTTPS delivery: {{ $pricing[1]->https_delievery }}</li>
								<li>Website spy: {{ $pricing[1]->website_spy }}</li>
								<li>Verified status: {{ $pricing[1]->verified_status }}</li>
							</ul>
							<div class="toggle-price-starter2-year">
								@if ($user->package_id == '5' && $user->package_expiry > now())
								<a class="btn-get-started" href="#">Your current plan</a>
								@else
									<a class="btn-get-started" href="{{route('billing',['5',uniqid()])}}">Contact Us</a>
								@endif
							</div><!-- choose-price-plan-yearly -->
							<div class="toggle-price-starter2-month">
								@if ($user->package_id == '2' && $user->package_expiry > now() || $user->package_id == '5' && $user->package_expiry > now())
								<a class="btn-get-started" href="#">Your current plan</a>
								@else
								<a class="btn-get-started" href="{{route('billing',['2',uniqid()])}}">Contact Us</a>
								@endif
							</div><!-- choose-price-plan-monthly -->
						</div><!-- end pricing-plan-wrap -->
					</div><!-- end pricing-plan -->
					<div class="pricing-plan">
						<div class="pricing-plan-title-style2 pricing-plan-style2-bg priceplan-title-style2-before clearfix">
							<h3>Basic</h3>
						</div>
						<div class="pricing-plan-wrap premium">
							<div class="price-holder">
								<div class="toggle-price-starter2-year">
									<p class="dolar"><strike><sup>{{ $pricing[5]->currency }}</sup>{{ $pricing[5]->regular_price }} / year</strike><br><br>
										<sup>{{ $pricing[5]->currency }}</sup> {{ $pricing[5]->price }} <sub>/year</sub></p>
								</div>
								<div class="toggle-price-starter2-month">
									<p class="dolar"><sup>{{ $pricing[2]->currency }}</sup> {{ $pricing[2]->price }} <sub>/month<strong>*</strong></sub></p>
								</div>
							</div>
							<ul class="list-unstyled">
								<li>Registered works: {{ $pricing[2]->registered_works }} / month</li>
								<li>Files per work: {{ $pricing[2]->file_per_work }} / work</li>
								<li>Protected websites: {{ $pricing[2]->protected_websites }} websites</li>
								<li>Protected pages: {{ $pricing[2]->protected_pages }} / website</li>
								<li>Backup storage: {{ $pricing[2]->backup_storage }} Gb</li>
								<li><a href="{{route('professional-takedowns')}}" style="color: black;">Takedowns</a> discount: {{ $pricing[2]->takedown_discount }}%</li>
								<li>HTTPS delivery: {{ $pricing[2]->https_delievery }}</li>
								<li>Website spy: {{ $pricing[2]->website_spy }}</li>
								<li>Verified status: {{ $pricing[2]->verified_status }}</li>
							</ul>
							<div class="toggle-price-starter2-year">
								@if ($user->package_id == '6' && $user->package_expiry > now() )
								<a class="btn-get-started" href="#">Your current plan</a>
								@else
								<a class="btn-get-started" href="{{route('billing',['6',uniqid()])}}">Contact Us</a>
								@endif
							</div><!-- choose-price-plan-yearly -->
							<div class="toggle-price-starter2-month">
								@if ($user->package_id == '3' && $user->package_expiry > now() || $user->package_id == '6' && $user->package_expiry > now())
								<a class="btn-get-started" href="{{route('register')}}">Your current plan</a>
								@else
								<a class="btn-get-started" href="{{route('billing',['3',uniqid()])}}">Contact Us</a>
								@endif
							</div><!-- choose-price-plan-monthly -->
						</div><!-- end pricing-plan-wrap -->
					</div><!-- end pricing-plan -->
				</div><!-- end pricing-table -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
<!-- end Pricing Plan 2 -->

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Frequently Asked Questions</h2>
    </div>
    <div class="row  d-flex align-items-stretch">
      <div class="col-lg-6 faq-item" data-aos="fade-up">
        <h4>Will I get a Verified status?</h4>
        <p>Yes, when you subscribe to one of our paid plans you will have a <strong>verified</strong> status displayed on your public certificates authenticating account ownership.</p>
      </div>
      <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
        <h4>Can I change my plan any time?</h4>
        <p>Yes, you may upgrade from the Professional to Business plan at any time, as well as switch from a monthly to yearly term at any time.</p>
      </div>
      <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
        <h4>Do you offer a free trial?</h4>
        <p>Yes, our basic plan is absolutely free of charge and without any time limitations or obligations. No credit card is required to sign up and start using our services.</p>
      </div>
      <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="300">
        <h4>Can I cancel my subscription any time?</h4>
        <p>Yes, you can cancel your paid subscriptions at any time, your account will automatically convert to the basic plan at the end of the subscription term.</p>
      </div>
      <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="400">
        <h4>Are there any hidden fees or obligations?</h4>
        <p>No, there are no hidden charges or fees and we do not enforce any contracts for long-term commitments or other contract obligations whatsoever.</p>
      </div>
      <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="500">
        <h4>Do you offer discounts?</h4>
        <p>Yes, select yearly subscription term to get a 50% discount and lock-in the low price to protect yourself from possible price increases in the future.</p>
      </div>
      <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="600">
        <h4>Do you offer refunds?</h4>
        <p>Yes, in addition to our completely free basic plan we offer a risk-free 7-day "no questions asked" <a data-role="modal" data-src="" href="{{route('refund')}}">money-back guarantee</a>.</p>
      </div>
      <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="700">
        <h4>Have any other questions?</h4>
        <p><a href="{{route('contact')}}">Get in touch</a> with us if you have any questions or would like to provide some feedback and we will be happy to assist you.</p>
      </div>
    </div>
  </div>
</section><!-- End Frequently Asked Questions Section -->
@endsection
