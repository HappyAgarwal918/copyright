@extends('layouts.master')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1>Remove your stolen content with our professional takedown services</h1>
                <h2>We offer fast and efficient stolen content removal services to help you fight infringement and protect your personal and commercial intellectual property for only {{$data->currency}}{{$data->regular_price}}. We can get it taken down or your money back - simple as that!</h2>
                @auth
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="{{ route('takedownindex',uniqid()) }}" class="ybtn ybtn-header-color">Launch takedown</a>
                </div>
                @endauth
                @guest
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="{{ route('register') }}" class="ybtn ybtn-header-color">Get Started</a>
                </div>
                @endguest
            </div>
            <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{asset('asset/images/takedown-content.png')}}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<!-- Start Overlay Caption -->
<div id="fableoverlay" class="fables-testimonial fables-after-overlay bg-rules py-4 py-md-5" style="background-image: url(asset/images/index2-overlay.jpg);">
   <div class="container">
       <div class="row">
           <div class="col-12 text-center position-relative z-index wow zoomIn" data-wow-duration="1.5s">
                <h3 class="white-color mb-3 font-25 font-weight-bold">
                    Only {{$data->currency}}{{$data->regular_price}}. One-time payment. No recurring fees. Money-back guarantee.
                </h3>
           </div> 
       </div>
   </div>
</div>
<!-- Start Overlay Caption -->

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
                        <img src="{{asset('asset/images/icons/save-time-money.png')}}" alt="">
                    </div>
                    <div>
                        <div class="service-title"><a href="#">Save time and money</a></div>
                        <div class="service-details">
                            <p>We offer professional full-service takedown for only {{$data->currency}}{{$data->regular_price}}. Most of the time we can have your content removed from the infringing website before your lawyer could even get started.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{asset('asset/images/icons/copyright-target.png')}}" alt="">
                    </div>
                    <div>
                        <div class="service-title"><a href="#">Submit multiple targets</a></div>
                        <div class="service-details">
                            <p>Has your content been copied multiple times and appears in many different places without your permission? Let us know and we&#39;ll get illegal copies removed from all those places.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{asset('asset/images/icons/track-takedown-progress.png')}}" alt="">
                    </div>
                    <div>
                        <div class="service-title"><a href="#">Case progress tracking</a></div>
                        <div class="service-details">
                            <p>Our team of professionals has the tools and experience to perform a takedown. You will be able to monitor and track the progress of your case as your case manager works on it.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{asset('asset/images/icons/copyright-guidelines.png')}}" alt="">
                    </div>
                    <div>
                        <div class="service-title"><a href="#">Satisfaction guaranteed</a></div>
                        <div class="service-details">
                            <p>We&#39;re so confident in our services that we&#39;re willing to offer a 100% money-back guarantee. If we cannot remove your stolen content you get your money back, what lawyer does that?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{asset('asset/images/icons/protection.png')}}" alt="">
                    </div>
                    <div>
                        <div class="service-title"><a href="#">Secure and confidential</a></div>
                        <div class="service-details">
                            <p>Our system uses the 256-bit SSL encryption to protect the data flow between you and our servers, and meets all high-authority rules over privacy and security measures on the internet.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{asset('asset/images/icons/global.png')}}" alt="">
                    </div>
                    <div>
                        <div class="service-title"><a href="#">Trusted by thousands</a></div>
                        <div class="service-details">
                            <p>Thousands of happy clients around the world use our services to protect their personal and intellectual property and make sure it is not used without permission.</p>
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
            <h4>What information will you need from me?</h4>
            <p>We will a few basic details about your original content or work that was stolen or used without your permission. We&#39;ll also need your authorization for us to act on your behalf to proceed with the takedown. It will take you less than 5 minutes to fill in the takedown request form.</p>
          </div>

        <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
            <h4>What kind of content can you remove?</h4>
            <p>We can remove anything that you created or own that is being used or displayed online without your permission. This includes photos, videos, music, apps, ebooks, articles, product images and descriptions, and even entire websites.</p>
        </div>

        <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
            <h4>Can you remove my private pictures or videos posted by my ex-boyfriend or ex-girlfriend?</h4>
            <p>Yes, we have received many requests to remove private personal pictures and videos posted online without permission and were successful in removing them every single time. If this happened to you, let us know and we&#39;ll be happy to assist you with it.</p>
        </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="300">
            <h4>How soon will the infringing content be removed?</h4>
            <p>Usually we can get your stolen or infringing content removed within 48 hours. Of course, keep in mind that it may take longer for the other parties to respond which is beyond our control. We will advice you of any such cases and keep you updated along the way through our internal case management system.</p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="400">
            <h4>Why should I use you and not a lawyer?</h4>
            <p>Quite simply - we&#39;re much cheaper and faster than a laywer and offer a full <a data-role="modal" data-src="" href="{{ route('refund') }}">money-back guarantee</a>, what lawyer does that!? We specialize in this field and process hundreds of takedown requests on a regular basis. We are experts at what we do and considering our high success rate and our pricing you have nothing to lose giving us a try.</p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="500">
            <h4>Have more questions?</h4>
            <p><a href="{{ route('contact') }}">Get in touch</a> with us and we&#39;ll be happy to assist you.</p>
          </div>
        </div>
      </div>
    </section><!-- End Frequently Asked Questions Section -->

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
                    <a class="ybtn ybtn-accent-color" href="{{ route('takedownindex',uniqid()) }}">Launch takedown</a>
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

</section>
@endsection