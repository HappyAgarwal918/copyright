@extends('layouts.master')
@section('content')

<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Refund policy</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact-info" class="container-fluid">
	<div class="container">
		<div class="row">
			<article>
				<h2>Refund policy for paid subscriptions</h2>
				<p>We're so convinced you'll absolutely love our easy to use service, that we're willing to offer a risk-free 7-day money back guarantee. If at any time within 7 days of purchasing a paid subscription you are unhappy, then simply let us know and we'll refund your purchase in full. To request a refund, simply <a href="{{ route('contact')}}">contact us</a> with your purchase details within seven days of the payment. If possible, tell us why you're requesting a refund - we take customer feedback very seriously and use it to constantly improve our products and services. We do encourage everyone to sign up for our completely free basic plan first to test out the service and ensure it fits your needs.</p>
				<h2>Refund policy for takedown services</h2>
				<p>Most of the time our experienced team of professionals can have your content removed from the infringing website before your lawyer could even get started. You will be able to provide multiple infringing URLs for your work or any intellectual property that you own when you submit a takedown request. If we're unable to get the infringing content down from at least half of the provided URLs, we will issue you a full refund. You will be able to monitor and track the progress of your case from the moment you submit it, as well as communicate with us along the way through our secure internal messaging system.</p>
				<h2>Questions?</h2>
				<p>If you have any questions at all about the refund policy or our services, feel free to <a href="{{ route('contact')}}">get in touch</a> with us and we will be happy to assist you.</p>
			</article>			
		</div>
	</div>
</div>
@endsection