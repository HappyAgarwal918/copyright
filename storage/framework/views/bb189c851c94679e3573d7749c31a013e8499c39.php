<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Copyright Registration, Protection, and Takedown Services</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" type="text/css" />
		<link rel="alternate" type="application/rss+xml" title="Feed" href="feed" />
		<!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="<?php echo e(asset('asset/css/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">

    <!-- Datatable CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('asset/css/data_table.css')); ?>">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">

    <link href="<?php echo e(asset('asset/css/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  	<link href="<?php echo e(asset('asset/css/style2.css')); ?>" rel="stylesheet">
  	<?php echo $__env->yieldContent('css'); ?>

    <style>
    	ol, ul {
    		padding-left: 0rem;
    	}
		.row{
			--bs-gutter-x: 1rem ;
		}
		.control-form-label{
			font-size: 22px;
		}
		.over_view_underline {
        height: 5px;
        width: 100%;
        background-color: #383ebf;
    }
    .form_part {
	    margin-bottom: 15px;
	    border-bottom: 1px solid #eee;
	    padding-bottom: 10px;
		}
		.form_font {
		    font-size: 16px;
		}
		.hidden {
		    display: none;
		}
		.bar-color-info{
			background-color: #51b4b9;
		}
		.message_align {
		  align-items: center;
		}
		</style>
  
</head>

<body>
	<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
	<div style="min-height: 57vh;">
	  <?php echo $__env->yieldContent('content'); ?>
	</div>

	<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript">
	$(function(){$('.toggle-price-starter2-year').hide();$('.toggle-price-standard2-year').hide();$('.toggle-price-premium2-year').hide();});function changePlanStarter2(plan){$('[class^="toggle-price-starter2"]').hide();$('.toggle-price-starter2-'+plan).show();}
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="<?php echo e(asset('asset/js/bootstrap.bundle.min.js')); ?>"></script>

<script src="<?php echo e(asset('asset/js/analytics.js')); ?>"></script>

<!-- Form javascript -->
<script src="<?php echo e(asset ('asset/js/formjquery.js')); ?>"></script>
<script src="<?php echo e(asset ('asset/js/forms.js')); ?>"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Template Main JS File -->
  <script src="<?php echo e(asset('asset/js/main.js')); ?>"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>

<script type="text/javascript">
	$(document).ready( function () {
    $('#restu_table').DataTable();
} );
</script>
  <?php echo $__env->yieldContent('js'); ?><?php /**PATH D:\xampp\htdocs\copyright\resources\views/layouts/master.blade.php ENDPATH**/ ?>