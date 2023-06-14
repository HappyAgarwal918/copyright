
<?php $__env->startSection('css'); ?>
<style type="text/css">
@media(min-width: 540px){
	.position{
		position: absolute !important;
	}	
}
.position{
	z-index: 99;
	width: 160px;
}
.urltext, .urltext:hover {
	color: black;
	font-size: 12px;
}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">My websites</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if(Session::has('successful_message')): ?>
<div class="alert alert-success">
<?php echo e(Session::get('successful_message')); ?>

</div>
<?php endif; ?>
<?php $data = DB::table('website')->where('user_id',Auth::user()->id)->get(); ?>
<div id="contact-info" class="container-fluid">
	<div class="container">
		<div class="row">
			<?php if(count($data) == 0): ?>
			<div class="plugin-copyrights app manage works-files-manage">
				<h2>No registered websites yet</h2>
				<div class="over_view_underline"></div>
				<div class="mt-3"><p>Looks like you didn't add any websites yet.<a href="<?php echo e(route('protectwebsites1')); ?>">Register your website</a> now to get started or <a href="<?php echo e(route('protect-websites')); ?>">learn more</a> about how it works.</p></div>
			</div>
			<?php else: ?>
            <a href="<?php echo e(route('protectwebsites1')); ?>" class="ybtn ybtn-accent-color position">New website</a>
			<table id="restu_table" class="display">
			    <thead>
			        <tr>
			            <th>Name</th>
			            <th>Status</th>
			            <th>Date</th>
			        </tr>
			    </thead>
			    <tbody>
			    	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $website): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			        <tr>
			            <td>
			            	<span class="name">
								<a href="<?php echo e(route('websites-view',$website->method)); ?>"><?php echo e($website->Url); ?></a><br>
							</span>
							<span class="url">
								<a target="_blank" class="icon-text urltext icon-copyright-link-jump" href="http:\\<?php echo e($website->Url); ?>"><?php echo e($website->Url); ?></a>
							</span>
			            </td>
			            <td><span class="status"><?php echo e($website->status); ?></span></td>
			            <td><span><?php echo e(Carbon\Carbon::parse($website->created_at)->format('Y-m-d')); ?></span></td>
			        </tr>
			        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			    </tbody>
			</table>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\copyright\resources\views/AuthPages/Website/my-websites.blade.php ENDPATH**/ ?>