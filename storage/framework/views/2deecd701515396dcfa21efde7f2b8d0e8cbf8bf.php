
<?php $__env->startSection('content'); ?>
<style type="text/css">
	ol{
		padding-left: 2rem;
	}
</style>
<?php $data = DB::table('website')->where('method', $uniqid)->first(); ?>

<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Verify website ownership - <?php echo e($data->Url); ?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact-info" class="container-fluid">
  	<div class="container">
    	<div class="panel-group">
      		<div class="panel panel-primary">
      			<?php if(Session::has('error')): ?>
			    <div class="alert alert-danger">
			    <?php echo e(Session::get('error')); ?>

			    </div>
			    <?php endif; ?>
        		<form action="<?php echo e(route('websites-view',$data->method)); ?>" method="post">
          		<?php echo csrf_field(); ?>            
            		<div class="panel-body">              
              			<div class="form-group form_part">
                			<label class="control-form-label col-sm-12 pb-2" for="method">Select verification method <span class="required">*</span></label>
                			<div class="col-sm-12">
                  				<div class="form-check">
                    				<input class="form-check-input" type="radio" name="method" id="method1" value="tag" selected="selected">
                    				<label class="form-check-label form_font" for="method1">HTML tag</label>
                  				</div>
                  				<div class="form-check d-none">
                    				<input class="form-check-input" type="radio" name="method" id="method2" value="file">
                    				<label class="form-check-label form_font" for="method2">HTML file upload</label>
                  				</div>
                			</div>
                			<label id="" class="error" for="method"></label>
              			</div>
	              		<div class="form-group form_part d-none">
	                		<label class="control-form-label col-sm-12 pb-2" for="">Upload a HTML file to your site</label>
	                		<div class="col-lg-12">
	                			<ol>
									<li>Download this <a href="http://<?php echo $data->Url;?>/websites/protect/verify/upKbHLk6W5hSky0i/file">HTML verification file</a>.</li>
									<li>Upload the file to https://innomicktechnologies.com</li>
									<li>Confirm successful upload by <a target="_blank" href="http://<?php echo $data->Url;?>/copyrighted-af0a7670d5a6050f.html">viewing the file</a> in your browser.</li>
									<li>Click <b>Verify</b> below.</li>
								</ol>
								<p>To stay verified, don't remove the HTML file, even after verification succeeds.</p>
	                		</div>
	              		</div>
	              		<div class="form-group form_part method1-1 hidden">
	                		<label class="control-form-label col-sm-12 pb-2" for="">Add a meta tag to your site's home page</label>
	                		<div class="col-lg-12">
	                			<ol>
									<li>Copy the meta tag below, and paste it into your site's home page. It should go in the &lt;head&gt; section, before the first &lt;body&gt; section.<br>
									<input class="form-control form_font" type="" name="" readonly="readonly" value='<meta name="copyright-site-verification" content="<?php echo $data->method;?>" />'></li>
									<li>Click <b>Verify</b> below.</li>
								</ol>
								<p>To stay verified, don't remove the meta tag, even after verification succeeds.</p>
	                		</div>
	              		</div>
						<div class="control actions">
							<input class="ybtn ybtn-accent-color" type="submit" name="submit" value="Verify">
						</div>
	            	</div>
	          	</form>
	      	</div>
	  	</div>
	</div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\copyright\resources\views/AuthPages/Website/websites-2.blade.php ENDPATH**/ ?>