
<?php $__env->startSection('css'); ?>
<style type="text/css">
@media(min-width: 540px){
	.position{
		position: absolute !important;
	}	
}
.position{
	z-index: 99;
	width: 200px;
}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">My works</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $data = DB::table('works')->where('user_id',Auth::user()->id)->get(); ?>
<div id="contact-info" class="container-fluid">
	<div class="container">
		<?php if(count($data) == 0): ?>
		<div class="row">
		<div class="plugin-copyrights app manage works-files-manage">	
			<h2>No registered works yet</h2>
			<div class="over_view_underline"></div>
			<div class="mt-3"><p>Looks like you didn't add any works yet.<a href="<?php echo e(route('registration')); ?>">Register your work</a> now to get started.</p></div>
		</div>
		</div>
		<?php else: ?>
		<div class="row">
			<a href="<?php echo e(route('registration')); ?>" class="ybtn ybtn-accent-color position">New registration</a>
			<table id="restu_table" class="display">
			    <thead>
			        <tr>
			            <th>Name</th>
			            <th>Category</th>
			            <th>Date</th>
			        </tr>
			    </thead>
			    <tbody>
			    	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			        <tr>
			            <td>
			            	<span class="name">
								<?php if($work->status == 'Completed'): ?>
						            <a href="<?php echo e(route('work-overview',$work->unique_id)); ?>"><?php echo e($work->title); ?></a><br>       
						        <?php elseif($work->status == 'Incomplete'): ?>
						            <a href="<?php echo e(route('overview-incomplete',$work->unique_id)); ?>"><?php echo e($work->title); ?></a><br>
						        <?php endif; ?>
							</span>
			            </td>
			            <td><span class="status unverified"><?php echo e($work->status); ?></span></td>
			            <td><span><?php echo e(Carbon\Carbon::parse($work->created_at)->format('Y-m-d')); ?></span></td>
			        </tr>
			        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			    </tbody>
			</table>
		</div>
		<?php endif; ?>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\copyright\resources\views/AuthPages/Works/my-works.blade.php ENDPATH**/ ?>