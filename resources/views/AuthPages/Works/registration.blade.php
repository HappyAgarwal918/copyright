@extends('layouts.master')
@section('content')

@php $id = uniqid(); @endphp
<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Register and protect my work</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact-info" class="container-fluid">
	<div class="container">
	    <section id="work" class="work">
	      	<div class="container" data-aos="fade-up">
	      		<div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
	            	<p>What We do</p>
	            	<h2>Works we provide</h2>
	        	</div>
		        <div class="row">
			        <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up">
			            <div class="member">
			              <div class="pic"><img src="{{asset('asset/images/register/digital-content.jpg')}}" class="img-fluid" alt=""></div>
			              <div class="member-info">
			                <h4>Digital content</h4>
			                <span>
			                	<li>Computer programs</li>
								<li>Blogs</li>
								<li>Databases</li>
								<li>Scripts</li>
								<li>Websites</li>
			                </span>
			                <div class="social">
			                  	<form action="{{route('digital-content',$id)}}" method="post">
									@csrf
									<input type="hidden" name="unique_id" value="{{ $id }}">
									<input class="ybtn ybtn-accent-color" type="submit" name="submit" value="Register digital content">
								</form>
			                </div>
			              </div>
			            </div>
			        </div>

			        <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
			            <div class="member">
			              <div class="pic"><img src="{{asset('asset/images/register/literary-works.jpg')}}" class="img-fluid" alt=""></div>
			              <div class="member-info">
			                <h4>Literary works</h4>
			                <span>
			                	<li>Articles</li>
								<li>Fiction</li>
								<li>Non-Fiction</li>
								<li>Periodicals</li>
								<li>Poetry</li>
			                </span>
			                <div class="social">
			                  	<form action="{{route('literary-works',$id)}}" method="post">
									@csrf
									<input type="hidden" name="unique_id" value="{{ $id }}">
									<input class="ybtn ybtn-accent-color" type="submit" name="submit" value="Register literary works">
								</form>
			                </div>
			              </div>
			            </div>
			        </div>

			        <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
			            <div class="member">
			              <div class="pic"><img src="{{asset('asset/images/register/motion-pictures.jpg')}}" class="img-fluid" alt=""></div>
			              <div class="member-info">
			                <h4>Motion pictures</h4>
			                <span>
			                	<li>Animation</li>
								<li>Movies</li>
								<li>TV shows</li>
								<li>Video games</li>
								<li>Videos</li>
			                </span>
			                <div class="social">
			                  	<form action="{{route('motion-pictures',$id)}}" method="post">
									@csrf
									<input type="hidden" name="unique_id" value="{{ $id }}">
									<input class="ybtn ybtn-accent-color" type="submit" name="submit" value="Register motion picture">
								</form>
			                </div>
			              </div>
			            </div>
			        </div>

			        <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
			            <div class="member">
			              <div class="pic"><img src="{{asset('asset/images/register/performing-arts.jpg')}}" class="img-fluid" alt=""></div>
			              <div class="member-info">
			                <h4>Performing arts</h4>
			                <span>
			                	<li>Lyrics</li>
								<li>Music</li>
								<li>Sound recordings</li>
								<li>Scripts</li>
								<li>Stage plays</li>
			                </span>
			                <div class="social">
			                  	<form action="{{route('performing-arts',$id)}}" method="post">
									@csrf
									<input type="hidden" name="unique_id" value="{{ $id }}">
									<input class="ybtn ybtn-accent-color" type="submit" name="submit" value="Register performing arts">
								</form>
			                </div>
			              </div>
			            </div>
			        </div>

			        <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
			            <div class="member">
			              <div class="pic"><img src="{{asset('asset/images/register/photographs.jpg')}}" class="img-fluid" alt=""></div>
			              <div class="member-info">
			                <h4>Photographs</h4>
			                <span>
			                	<li>Family photos</li>
								<li>News photos</li>
								<li>Portraits</li>
								<li>Selfies</li>
								<li>Wedding photos</li>
			                </span>
			                <div class="social">
			                  	<form action="{{route('photographs',$id)}}" method="post">
									@csrf
									<input type="hidden" name="unique_id" value="{{ $id }}">
									<input class="ybtn ybtn-accent-color" type="submit" name="submit" value="Register photographs">
								</form>
			                </div>
			              </div>
			            </div>
			        </div>

			        <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
			            <div class="member">
			              <div class="pic"><img src="{{asset('asset/images/register/visual-arts.jpg')}}" class="img-fluid" alt=""></div>
			              <div class="member-info">
			                <h4>Visual arts</h4>
			                <span>
			                	<li>Architecture</li>
								<li>Artwork</li>
								<li>Fabric</li>
								<li>Illustrations</li>
								<li>Jewelry</li>
			                </span>
			                <div class="social">
			                  	<form action="{{route('visual-arts',$id)}}" method="post">
									@csrf
									<input type="hidden" name="unique_id" value="{{ $id }}">
									<input class="ybtn ybtn-accent-color" type="submit" name="submit" value="Register visual arts">
								</form>
			                </div>
			              </div>
			            </div>
			        </div>
		        </div>
      		</div>
    	</section>
	</div>
</div>
@endsection