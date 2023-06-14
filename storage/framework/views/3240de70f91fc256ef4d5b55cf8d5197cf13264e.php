<?php $__env->startSection('content'); ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1>Safeguarding your works, websites, and online businesses has never been easier</h1>
                <h2>Copyright your creative works, protect and monitor your websites, prevent theft and plagiarism. Share your ideas safely while protecting your intellectual property. Free registration and instant protection for your work and websites.</h2>
                <?php if(auth()->guard()->guest()): ?>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="<?php echo e(route('register')); ?>" class="ybtn ybtn-header-color">Get Started</a>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="<?php echo e(asset('asset/images/4446399.png')); ?>" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

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
                        <img src="<?php echo e(asset('asset/images/icons/globe-protection.png')); ?>" alt="">
                    </div>
                    <div>
                        <div class="service-title"><a href="#">Protect and monitor your websites</a></div>
                        <div class="service-details">
                            <p>Our secure system can automatically monitor your registered websites and protect your valuable content from theft and copyright infringement.</p>
                            <p><a class="" href="<?php echo e(route('protect-websites')); ?>">Learn more</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="<?php echo e(asset('asset/images/icons/copyright-work.png')); ?>" alt="">
                    </div>
                    <div>
                    <div class="service-title"><a href="#">Copyright and protect your works</a></div>
                    <div class="service-details">
                        <p>It takes less than 5 minutes to register and submit your creatives and works, and then enjoy life-long protection and access to your certificates and files.</p>
                        <p><a class="" href="<?php echo e(route('copyright-works')); ?>">Learn more</a></p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="<?php echo e(asset('asset/images/icons/law.png')); ?>" alt="">
                    </div>
                    <div>
                    <div class="service-title"><a href="#">Professional takedown services</a></div>
                    <div class="service-details">
                        <p>We offer fast and efficient stolen content removal services to help you fight infringement and protect your personal and commercial intellectual property.</p>
                        <p><a class="" href="<?php echo e(route('professional-takedowns')); ?>">Learn more</a></p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="<?php echo e(asset('asset/images/icons/global.png')); ?>" alt="">
                    </div>
                    <div>
                    <div class="service-title"><a href="#">Trusted by thousands worldwide</a></div>
                    <div class="service-details">
                        <p>Thousands of happy clients around the world use our services to copyright their works, protect and monitor their websites, and ensure their intellectual property is not used without permission.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if(auth()->guard()->guest()): ?>

<div id="message2" class="container-fluid message-area normal-bg boxed">
    <div class="container">
        <div class="row message_align">
            <div class="col-sm-12 col-lg-8">
                <div class="text-other-color1">Ready to Get Started?</div>
                <div class="text-other-color2">It takes only a few minutes to create an account.</div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="buttons-holder">
                    <a href="<?php echo e(route('register')); ?>" class="ybtn ybtn-accent-color">GET STARTED</a>
                    <a href="<?php echo e(route('contact')); ?>" class="ybtn ybtn-white ybtn-shadow">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\copyright\resources\views/frontend/index.blade.php ENDPATH**/ ?>