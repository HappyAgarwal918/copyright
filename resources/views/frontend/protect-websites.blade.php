@extends('layouts.master')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1>Safeguarding your online content and websites has never been easier</h1>
                <h2>Register and protect your online content and websites, prevent theft and plagiarism. Automatic monitoring of your pages allows you to share your ideas and work safely while protecting your intellectual property.</h2>
                @auth
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="{{ route('protectwebsites1') }}" class="ybtn ybtn-header-color">Register my website</a>
                </div>
                @endauth
                @guest
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="{{ route('register') }}" class="ybtn ybtn-header-color">Get Started</a>
                </div>
                @endguest
            </div>
            <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{asset('asset/images/protect-websites.png')}}" class="img-fluid animated" alt="">
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
                        <img src="{{asset('asset/images/icons/copyright-protection.png')}}" alt="">
                    </div>
                    <div>
                    <div class="service-title"><a href="#">Instant protection of your website</a></div>
                    <div class="service-details">
                        <p>It takes less than 5 (five) minutes to register and protect your website. Simply verify your website ownership and add our badge to the pages you would like to protect. It&#39;s that easy!</p>
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
                    <div class="service-title"><a href="#">Official protection certificate</a></div>
                    <div class="service-details">
                        <p>You will receive an official certificate for each protected page so you could let people know your content is protected and you are verified by Copyright.us.org to deter potential thieves away.</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{asset('asset/images/icons/copyright-expiry.png')}}" alt="">
                    </div>
                    <div>
                    <div class="service-title"><a href="#">Keep digital content thieves away</a></div>
                    <div class="service-details">
                        <p>Protect your website content for free with our protection badges. Our secure system constantly monitors and protects your valuable content from theft and copyright infringement.</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{asset('asset/images/icons/search.png')}}" alt="">
                    </div>
                    <div>
                    <div class="service-title"><a href="#">Website ownership detection</a></div>
                    <div class="service-details">
                        <p>Find out the important information about the domain name, when it was registered, and who owns and hosts it in the event your content gets stolen with our easy to use tools it.</p>
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
                        <p>Thousands of happy clients around the world use our services to monitor their websites to ensure their intellectual property is protected and not used without permission.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
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