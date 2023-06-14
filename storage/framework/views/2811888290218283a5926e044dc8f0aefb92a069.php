<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('asset/css/stylenew.css')); ?>">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Datatable CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('asset/css/data_table.css')); ?>">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <style type="text/css">
        .card-body{
            padding: 2% 3%;
            text-align: justify;
        }
        .ybtn-accent-color {
    color: #ffffff;
    background-color: #383ebf;
}

.ybtn {
    border: 0;
    font-size: 15px;
    font-weight: 600;
    text-transform: uppercase;
    padding: 9px 26px;
    margin: 5px 10px;
    display: inline-block;
    white-space: nowrap;
    outline: none;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}

.ybtn:hover, .ybtn:focus {
    text-decoration: none;
    -webkit-transform: scale(0.95);
    -moz-transform: scale(0.95);
    -ms-transform: scale(0.95);
    transform: scale(0.95);
}
    </style>
</head>
<?php $data = DB::table('logo')->where('id','1')->first(); ?>
<body>
    <div class="sidebar">
        <div class="logo-details">
          <span class="logo_name"><a href="<?php echo e(route('index')); ?>"><img src="<?php echo e(asset($data->featured_image)); ?>" style="width: 100%; padding: 20px; background-color: #fff;"></a></span>
        </div>
        <ul class="nav-links">
            <li>
              <a href="<?php echo e(route('dashboard')); ?>" class="<?php echo e((request()->is('admin/dashboard*')) ? 'active' : ''); ?>">
                <i class='fas fa-users' ></i><span class="links_name">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="<?php echo e(route('users')); ?>" class="<?php echo e((request()->is('admin/user*')) ? 'active' : ''); ?>">
                <i class="fas fa-users"></i><span class="links_name">Users</span>
              </a>
            </li>
            <li>
              <a href="<?php echo e(route('subscription')); ?>" class="<?php echo e((request()->is('admin/subscription*')) ? 'active' : ''); ?>">
                <i class="fas fa-users"></i><span class="links_name">Subscription</span>
              </a>
            </li>
            <li>
              <a href="<?php echo e(route('takedownpackages')); ?>" class="<?php echo e((request()->is('admin/takedown*')) ? 'active' : ''); ?>">
                <i class="fas fa-users"></i><span class="links_name">Takedown</span>
              </a>
            </li>
            <li>
              <a href="<?php echo e(route('adminpayment')); ?>" class="<?php echo e((request()->is('admin/price*')) ? 'active' : ''); ?>"><i class="fas fa-user-nurse"></i><span class="links_name">Price</span>                
              </a>
            </li>
            
            <li>                
                <form method="POST" action="<?php echo e(route('logout')); ?>" style="height: 50px;">
                    <?php echo csrf_field(); ?>
                    <a type="button" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" style="cursor: pointer;">
                        <i class="fas fa-sign-out-alt"></i>
                    <span class="links_name"><?php echo e(__('Logout')); ?></span>
                    </a>
                </form>
            </li>
        </ul>
    </div>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
        </div>
        <div class="profile-details">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-user profile-details " style="color: white;"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <div class="dropdown-footer text-center">
                  <div class="row">                    
                    <div class="col-6">
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <a type="button" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" style="cursor: pointer;">
                            <?php echo e(__('Logout')); ?>

                            </a>
                        </form>          
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="home-content">
        <?php echo $__env->yieldContent('admincontent'); ?>
    </div>
    <footer class="main-footer sdse">
    <!-- * Note: Only licensed users are allowed to change the copyright statement. * -->
    <div class="ew-footer-text">©2022 Copyright | All rights reserved.</div>
    <div class="float-right d-none d-sm-inline-block"></div>
    </footer>
</section>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/e4141e8eaa.js" crossorigin="anonymous"></script>
<script>
    let sidebar = document.querySelector(".sidebar");

    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if(sidebar.classList.contains("active")){
      sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
    }else
      sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
</script>
<!-- Data Table -->
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
<!-- data Table -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.restu_table').DataTable();
    });
</script>
<?php echo $__env->yieldContent('js'); ?>
</body>
</html><?php /**PATH D:\xampp\htdocs\copyright\resources\views/admin/layout.blade.php ENDPATH**/ ?>