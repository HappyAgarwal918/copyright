
<?php $__env->startSection('title'); ?> Legal Policies <?php $__env->stopSection(); ?>

<?php $__env->startSection('admincontent'); ?>
<?php if(Session::has('successful_message')): ?>
<div class="alert alert-success">
<?php echo e(Session::get('successful_message')); ?>

</div>
<?php endif; ?>
<div class="row m-2">
  <div class="col-md-12 text">
    <h3>Dashboard</h3>
  </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <form action="<?php echo e(route('logoupload')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>                   
                    <div>
                        <label for="featured_image"><b>Change Logo</b></label>
                        <input type="file" id="featured_image" name="featured_image" class="form-control" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="ybtn ybtn-accent-color">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <h5><b>Address</b></h5>
                <table id="restu_table" class="table table-striped restu_table" style="width:100%">
                    <thead>
                        <tr>
                            <th class="" scope="col">ID</th>
                            <th class="" scope="col">Company Name</th>
                            <th class="" scope="col">Address</th>
                            <th class="" scope="col">Zip</th>
                            <th class="" scope="col">Country</th>
                            <th class="" scope="col">Button</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $address = DB::table('address')
                            ->where('id', 1)->first();
                        ?>
                        <tr>
                            <td><?php echo e($address->id); ?></td>
                            <td><?php echo e($address->seller_company_name); ?></td>
                            <td><?php echo e($address->seller_address); ?></td>
                            <td><?php echo e($address->seller_zip); ?></td>
                            <td><?php echo e($address->seller_country); ?></td>
                            <td><a href="<?php echo e(route('comp_address')); ?>" class="btn btn-primary btn-sm">Edit</a></td>
                        </tr>                 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\copyright\resources\views/admin/Dashboard/logo.blade.php ENDPATH**/ ?>