@extends('layouts.master')
@section('css')
<link href="{{ asset('asset/css/pricing.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('asset/css/accordian.css')}}">
    <style type="text/css">
    @media(max-width: 767px) {

        /* Force table to not be like tables anymore */
        table, thead, tbody, th, td, tr {
            display: revert !important;
            overflow: auto;
        }
    }

    @media screen and (max-width: 540px){
        .fluid{
            height: 70px;
        }    
    }
    .list-unstyled li a{
    	color: black;
    }
    .pricing-plan-2 .pricing-plan-wrap:hover .list-unstyled li a{
    	color: #fff;
    }
    .active .list-unstyled li a{
    	color: #fff;
    }
    </style>
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
						<button class="ybtn ybtn-accent-color" onclick="changePlanStarter2('year')">Choose Annually (GET 50% OFF!)</button>
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
								<li><a href="{{route('professional-takedowns')}}">Takedowns</a> discount: {{ $pricing[0]->takedown_discount }}%</li>
								<li>HTTPS delivery: {{ $pricing[0]->https_delievery }}</li>
								<li>Website spy: {{ $pricing[0]->website_spy }}</li>
								<li>Verified status: {{ $pricing[0]->verified_status }}</li>
							</ul>
							<div class="">
								<a class="btn btn-get-started" href="{{route('register')}}">Sign up for FREE</a>
							</div>
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
								<li><a href="{{route('professional-takedowns')}}">Takedowns</a> discount: {{ $pricing[1]->takedown_discount }}%</li>
								<li>HTTPS delivery: {{ $pricing[1]->https_delievery }}</li>
								<li>Website spy: {{ $pricing[1]->website_spy }}</li>
								<li>Verified status: {{ $pricing[1]->verified_status }}</li>
							</ul>
							<div class="">
								<a class="btn btn-get-started" href="{{route('register')}}">Sign up for FREE</a>
							</div>
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
								<li><a href="{{route('professional-takedowns')}}">Takedowns</a> discount: {{ $pricing[2]->takedown_discount }}%</li>
								<li>HTTPS delivery: {{ $pricing[2]->https_delievery }}</li>
								<li>Website spy: {{ $pricing[2]->website_spy }}</li>
								<li>Verified status: {{ $pricing[2]->verified_status }}</li>
							</ul>
							<div class="">
								<a class="btn btn-get-started" href="{{route('register')}}">Sign up for FREE</a>
							</div>
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
<div class="aks-accordion" itemscope itemtype="https://schema.org/FAQPage" data-accordion="">
    <div class="aks-accordion-row row">
        <div class="col-md-6">
            <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" data-accordion-item="" data-ripple="#00000026">
                <div class="aks-accordion-item-row">
                    <div class="aks-accordion-item-icon">
                        <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
<path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" />        </svg>
                        <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
<path d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" />
                        </svg>
                    </div>
                <div class="aks-accordion-item-title"><h6 class="acc-title" itemprop="name">Will I get a Verified status?</h6></div>
                </div>
                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                    <p itemprop="text">Yes, when you subscribe to one of our paid plans you will have a verified status displayed on your public certificates authenticating account ownership.</p>
                </div>
            </div>
            <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" data-accordion-item="" data-ripple="#00000026">
                <div class="aks-accordion-item-row">
                    <div class="aks-accordion-item-icon">
                        <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
<path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" />        </svg>
                        <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
<path d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" />
                        </svg>
                    </div>
                <div class="aks-accordion-item-title"><h5 class="acc-title" itemprop="name">Do you offer a free trial?</h5></div>
                </div>
                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                    <p itemprop="text">Yes, our basic plan is absolutely free of charge and without any time limitations or obligations. No credit card is required to sign up and start using our services.</p>
                </div>
            </div>
            <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" data-accordion-item="" data-ripple="#00000026">
                <div class="aks-accordion-item-row">
                    <div class="aks-accordion-item-icon">
                        <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
<path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" />        </svg>
                        <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
<path d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" />
                        </svg>
                    </div>
                <div class="aks-accordion-item-title"><h5 class="acc-title" itemprop="name">Are there any hidden fees or obligations?</h5></div>
                </div>
                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                    <p itemprop="text">No, there are no hidden charges or fees and we do not enforce any contracts for long-term commitments or other contract obligations whatsoever.</p>
                </div>
            </div>

            <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" data-accordion-item="" data-ripple="#00000026">
                <div class="aks-accordion-item-row">
                    <div class="aks-accordion-item-icon">
                        <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
<path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                        v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" /></svg>
                        <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
<path d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" />
                        </svg>
                    </div>
                <div class="aks-accordion-item-title"><h5 class="acc-title" itemprop="name">Do you offer refunds?</h5></div>
                </div>
                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                    <p itemprop="text">Yes, in addition to our completely free basic plan we offer a risk-free 7-day "no questions asked" <a data-role="modal" data-src="" href="{{route('refund')}}">money-back guarantee</a>.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" data-accordion-item="" data-ripple="#00000026">
                <div class="aks-accordion-item-row">
                    <div class="aks-accordion-item-icon">
                        <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
<path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" />        </svg>
                        <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
<path d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" />
                        </svg>
                    </div>
                <div class="aks-accordion-item-title"><h6 class="acc-title" itemprop="name">Can I change my plan any time?</h6></div>
                </div>
                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                    <p itemprop="text">Yes, you may upgrade from the Professional to Business plan at any time, as well as switch from a monthly to yearly term at any time.</p>
                </div>
            </div>
            <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" data-accordion-item="" data-ripple="#00000026">
                <div class="aks-accordion-item-row">
                    <div class="aks-accordion-item-icon">
                        <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
<path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" />        </svg>
                        <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
<path d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" />
                        </svg>
                    </div>
                <div class="aks-accordion-item-title"><h5 class="acc-title" itemprop="name">Do you offer discounts?</h5></div>
                </div>
                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                    <p itemprop="text">Yes, select yearly subscription term to get a 50% discount and lock-in the low price to protect yourself from possible price increases in the future.</p>
                </div>
            </div>
            <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" data-accordion-item="" data-ripple="#00000026">
                <div class="aks-accordion-item-row">
                    <div class="aks-accordion-item-icon">
                        <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
<path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" />        </svg>
                        <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
<path d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" />
                        </svg>
                    </div>
                <div class="aks-accordion-item-title"><h5 class="acc-title" itemprop="name">Can I cancel my subscription any time?</h5></div>
                </div>
                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                    <p itemprop="text">Yes, you can cancel your paid subscriptions at any time, your account will automatically convert to the basic plan at the end of the subscription term.</p>
                </div>
            </div>

            <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" data-accordion-item="" data-ripple="#00000026">
                <div class="aks-accordion-item-row">
                    <div class="aks-accordion-item-icon">
                        <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
<path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                        v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" /></svg>
                        <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
<path d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" />
                        </svg>
                    </div>
                <div class="aks-accordion-item-title"><h5 class="acc-title" itemprop="name">Have any other questions?</h5></div>
                </div>
                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                    <p itemprop="text"><a href="{{route('contact')}}">Get in touch</a> with us if you have any questions or would like to provide some feedback and we will be happy to assist you.</p>
                </div>
            </div>
        </div>
    </div>
</div>
  	</div>
</section><!-- End Frequently Asked Questions Section -->
@endsection
@section('js')
<script src="{{asset('asset/js/accordian.js')}}"></script>
@endsection