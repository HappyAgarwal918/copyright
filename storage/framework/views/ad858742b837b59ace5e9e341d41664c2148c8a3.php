<?php $data = DB::table('logo')->where('id','1')->first(); ?>

<!-- ======= Header ======= -->
  <header id="header" class="sticky-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="/" class="logo me-auto"><img src="<?php echo e(asset($data->featured_image)); ?>" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <?php if(Auth::guest()): ?>
          <li><a class="nav-link" href="<?php echo e(route('protect-websites')); ?>">Protect websites</a></li>
          <li><a class="nav-link" href="<?php echo e(route('copyright-works')); ?>">Copyright works</a></li>
          <li><a class="nav-link" href="<?php echo e(route('professional-takedowns')); ?>">Takedowns</a></li>
          <li><a class="nav-link" href="<?php echo e(route('login')); ?>">Log in</a></li>
          <li><a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a></li>
          <?php else: ?>
          <li><a class="nav-link" href="<?php echo e(route('websites')); ?>">Websites</a></li>
          <li><a class="nav-link" href="<?php echo e(route('work')); ?>">Work</a></li>
          <li><a class="nav-link" href="<?php echo e(route('takedown')); ?>">Takedowns</a></li>
          <li class="dropdown"><a href="#"><span>Tools</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo e(route('spy')); ?>">Website spy</a></li>
            </ul>
          </li>
          <li><a class="nav-link" href="<?php echo e(route('pricing')); ?>">Upgrade</a></li>
          <li class="dropdown"><a href="#"><span>My Account</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo e(route('settings')); ?>">Settings</a></li>
              <li><a href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <?php echo e(__('Logout')); ?>

                </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none"> <?php echo csrf_field(); ?> </form>
              </li>
            </ul>
          </li>
          <?php if(isset(auth()->user()->admin) && auth()->user()->admin == 1): ?>
          <li><a class="getstarted" href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
          <?php endif; ?>
          <?php endif; ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header --><?php /**PATH D:\xampp\htdocs\copyright\resources\views/layouts/header.blade.php ENDPATH**/ ?>