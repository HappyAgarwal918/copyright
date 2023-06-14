@extends('layouts.master')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1>Safeguarding your creatives and original works has never been easier</h1>
                <h2>Register your creatives and original works, prevent theft and plagiarism. Share your ideas safely while protecting your intellectual property including literary works, music, photographs, motion pictures and more.</h2>
                @auth
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="{{ route('registration') }}" class="ybtn ybtn-header-color">Register my work</a>
                </div>
                @endauth
                @guest
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="{{ route('register') }}" class="ybtn ybtn-header-color">Get Started</a>
                </div>
                @endguest
            </div>
            <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{asset('asset/images/works-security.png')}}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<!-- ======= Creative Works Section ======= -->
<section id="creativeworks" class="creativeworks">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Register and protect your creatives and works</h2>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
        <div class="icon"><img width="32" height="32" alt="Digital content" src="{{asset('asset/images/icons/digital.png')}}" /></div>
        <h4 class="title">Digital content</h4>
        <p class="description">Applications, databases, software, websites</p>
      </div>
      <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
        <div class="icon"><img width="32" height="32" alt="Literary works" src="{{asset('asset/images/icons/digital-content.png')}}" /></div>
        <h4 class="title">Literary works</h4>
        <p class="description">Articles, fiction, non-fiction, poetry</p>
      </div>
      <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
        <div class="icon"><img width="32" height="32" alt="Motion pictures" src="{{asset('asset/images/icons/motion.png')}}" /></div>
        <h4 class="title">Motion pictures</h4>
        <p class="description">Animation, movies, video games, videos</p>
      </div>
      <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
        <div class="icon"><img width="32" height="32" alt="Performing arts" src="{{asset('asset/images/icons/performing-arts.svg')}}" /></div>
        <h4 class="title">Performing arts</h4>
        <p class="description">Lyrics, music, sound recordings, scripts</p>
      </div>
      <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
        <div class="icon"><img width="32" height="32" alt="Photographs" src="{{asset('asset/images/icons/photograph.png')}}" /></div>
        <h4 class="title">Photographs</h4>
        <p class="description">Family, news, wedding photos, portraits, selfies</p>
      </div>
      <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
        <div class="icon"><img width="32" height="32" alt="Visual arts" src="{{asset('asset/images/icons/art.png')}}" /></div>
        <h4 class="title">Visual arts</h4>
        <p class="description">Architecture, artwork, illustrations, jewelry</p>
      </div>
    </div>

  </div>
</section><!-- End Creative Works Section -->
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
                    <div class="service-title"><a href="#">Instant protection of your works</a></div>
                    <div class="service-details">
                        <p>It takes less than 5 (five) minutes to register and protect your creatives and works, and then enjoy life-long protection and access to your copyrights and files. It&#39;s that easy!</p>
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
                        <p>You will receive an official certificate for each registered work so you could let people know your content is protected and you are verified by Copyright.us.org to deter potential thieves away.</p>
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
                    <div class="service-title"><a href="#">Keep content thieves away</a></div>
                    <div class="service-details">
                        <p>Our secure system helps you protect your valuable copyrighted content and files from theft and copyright infringement and keep digital content thieves away for your piece of mind.</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{asset('asset/images/icons/copyright-data.png')}}" alt="">
                    </div>
                    <div>
                    <div class="service-title"><a href="#">Secure data storage vault</a></div>
                    <div class="service-details">
                        <p>Store all your copyrighted works and files in our secure data storage vault for backup purposes which is accessible to you at any time and in the event you need to download your files.</p>
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
                        <p>Thousands of happy clients around the world use our services to register and protect their original works and ensure their intellectual property is not used without permission.</p>
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
                    <a class="ybtn ybtn-accent-color" href="{{ route('registration') }}">Register my work</a>
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