@extends('layouts.master')
@section('content')

<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Contact us</div>
                </div>
            </div>
        </div>
    </div>
</div>
@if(Session::has('successful_message'))
<div class="alert alert-success">
{{ Session::get('successful_message') }}
</div>
@endif
<!-- ======= Contact Us Section ======= -->
    <section id="contact" class="">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>1065 SW 8th Street, Miami, FL (33130) United State</p>
            </div>
          </div>

          <div class="col-lg-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>support@copyright.us.org</p>
            </div>
          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
          	<form action="{{ route('send_contact')}}" method="post" role="form" class="php-email-form">
          		@csrf
              <div class="row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" maxlength="255" >
                @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" maxlength="255" placeholder="Your Email" >
                @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" maxlength="255" placeholder="Subject" >
              	@error('subject')
	                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
	            @enderror
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" ></textarea>
              	@error('message')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button class="ybtn ybtn-accent-color" type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->
@endsection