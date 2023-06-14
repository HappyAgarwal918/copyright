@extends('layouts.master')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1>Join our affiliate program today and earn 20% in recurring commissions</h1>
                <h2>Our affiliate program allows anyone to earn revenue by linking to our products and services. It&#039;s an easy way to share the service you love with your followers or customers and get paid for each referral.</h2>
                @auth
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="{{ route('register') }}" class="ybtn ybtn-header-color">Activate account</a>
                </div>
                @endauth
                @guest
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="{{ route('register') }}" class="ybtn ybtn-header-color">Get Started</a>
                </div>
                @endguest
            </div>
            <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{asset('asset/images/affiliates.png')}}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<!-- Service Start -->
<div id="services" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>What We do</p>
                    <h2>Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{asset('asset/images/icons/growth.png')}}" alt="">
                    </div>
                    <div>
                        <div class="service-title"><a href="#">Lifetime earnings</a></div>
                        <div class="service-details">
                            <p>Continue profiting forever thanks to our recurring commissions model.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{asset('asset/images/icons/conversion.png')}}" alt="">
                    </div>
                    <div>
                        <div class="service-title"><a href="#">Great conversions</a></div>
                        <div class="service-details">
                            <p>Take advantage of our high conversion rates and easy to sell products.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{asset('asset/images/icons/commission.png')}}" alt="">
                    </div>
                    <div>
                        <div class="service-title"><a href="#">High commissions</a></div>
                        <div class="service-details">
                            <p>Earn a whooping 20% commission for each and every purchase.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{asset('asset/images/icons/approval.png')}}" alt="">
                    </div>
                    <div>
                        <div class="service-title"><a href="#">Instant approval</a></div>
                        <div class="service-details">
                            <p>Start earning right after you sign in to your account with our automatic approval process.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg" style="margin-bottom: 30px">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Frequently Asked Questions</h2>
    </div>

    <div class="row  d-flex align-items-stretch">

      <div class="col-lg-6 faq-item" data-aos="fade-up">
        <h4>Does it cost anything to participate?</h4>
        <p>No! Our affiliate program is completely free to join and participate in so you have absolutely nothing to lose.</p>
      </div>

    <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
        <h4>When do I get paid?</h4>
        <p>We send out payments to our affiliates each month via PayPal when the commission balance is $25 or more.</p>
    </div>

    <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
        <h4>How are sales tracked from my site?</h4>
        <p>You will be given a unique affiliate ID as well as custom-formatted links that will ensure that traffic coming from your site is properly tracked.</p>
    </div>

      <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="300">
        <h4>How long does the tracking cookie last?</h4>
        <p>We maintain a 90-day cookie. If a visitor clicks on a link from your site, you are credited with the sale as long as the visitor purchases within 90 days.</p>
      </div>

      <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="400">
        <h4>Do you show live statistics?</h4>
        <p>Yes, you may view live statistics of your referrals and conversions.</p>
      </div>

      <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="500">
        <h4>Have more questions?</h4>
        <p>See our complete <a href="{{route('faq')}}">affiliate program FAQ</a>.</p>
      </div>
    </div>
  </div>
</section>
<!-- End Frequently Asked Questions Section -->
<div id="message2" class="container-fluid message-area normal-bg boxed">
    <div class="container">
        <div class="row message_align">
            <div class="col-sm-12 col-lg-8">
                <div class="text-other-color1">Ready to Get Started?</div>
                <div class="text-other-color2">It takes only a few minutes to create an account.</div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="buttons-holder">
                    @auth
                    <a class="ybtn ybtn-accent-color" href="{{ route('protectwebsites1') }}">Register my website</a>
                    @endauth
                    @guest
                    <a href="{{route('register')}}" class="ybtn ybtn-accent-color">GET STARTED</a>
                    <a href="{{route('contact')}}" class="ybtn ybtn-white ybtn-shadow">Contact Us</a>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>

@endsection