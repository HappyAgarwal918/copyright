@extends('layouts.master')
@section('content')

<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Affiliate program FAQ</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact-info" class="container-fluid">
	<div class="container">
		<div class="row">
			<article>
				<h3>Does it cost me anything to become an affiliate?</h3>
				<p>The program is free to join, there are no monthly charges and no minimum sales requirements.</p>
				<h3>I operate multiple websites, can I still participate in the affiliate program?</h3>
				<p>Yes. You're welcome to promote Copyrighted.com across all of your websites. The more links and banners you place on your websites, the more qualified leads you're likely to send us and this should translate into a higher conversion.</p>
				<h3>Where can I use the affiliate banners and link?</h3>
				<p>You're welcome to place the affiliate link on your websites or blogs. In addition, you can share your affiliate link to your contacts via email, on social networks, etc.</p>
				<h3>How much can I expect to earn?</h3>
				<p>Our standard commission rate is 20%. For each sale one of your referrals makes you will earn 20% of the total amount.</p>
				<h3>How long does the tracking cookie last?</h3>
				<p>We keep the referral cookie active for 90 days. If the user decides to purchase anything from our website at any time within this period, you will be credited for the sale.</p>
				<h3>How do I track my earnings?</h3>
				<p>You can simply login to your affiliate account at any time for access to real-time reports and get up-to-the-second information about any commissions you have earned.</p>
				<h3>When will I receive my affiliate commissions?</h3>
				<p>Affiliate payments are processed and sent directly to your PayPal account on the 1st day of each month. We hold payments for 45 days after the affiliate sale occurred to allow for processing, chargebacks, refunds, etc. For example, you would receive an affiliate payment for a sale occurred on June 15th, on August 1st.</p>
				<h3>Can I use my affiliate link for referring myself?</h3>
				<p>No, you may not refer yourself and you will not get any commission for it.</p>
				<h3>Ready to get started?</h3>
				<p><a href="{{ route('register') }}" class="ybtn ybtn-accent-color ms-0">Join now</a></p>
			</article>			
		</div>
	</div>
</div>
@endsection