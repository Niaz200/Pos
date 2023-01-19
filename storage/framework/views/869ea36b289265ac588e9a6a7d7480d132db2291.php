<?php $__env->startSection('content'); ?>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Welcome !</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Echobvel</a></li>
                            <li class="active">IT</li>
                        </ol>
                    </div>
                </div>

                <!-- Start Widget -->
                <div class="row">
                    <!-- Basic example -->
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Update Company Information</h3></div>

                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>

                            <div class="panel-body">
                                <form role="form" action="<?php echo e(url('/update-website/'.$setting->id)); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Company Name</label>
                                        <input type="text" class="form-control" name="company_name" value="<?php echo e($setting->company_name); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email</label>
                                        <input type="email" class="form-control" name="company_email" value="<?php echo e($setting->company_email); ?>"  required>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Company Phone</label>
                                        <input type="text" class="form-control" name="company_phone" value="<?php echo e($setting->company_phone); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Company Mobile</label>
                                        <input type="text" class="form-control" name="company_mobile" value="<?php echo e($setting->company_mobile); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Company Address</label>
                                        <input type="text" class="form-control" name="company_address" value="<?php echo e($setting->company_address); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">City</label>
                                        <input type="text" class="form-control" name="company_city" value="<?php echo e($setting->company_country); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Country</label>
                                        <input type="text" class="form-control" name="company_country" value="<?php echo e($setting->company_country); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Zip Code</label>
                                        <input type="text" class="form-control" name="company_zipcode" value="<?php echo e($setting->company_zipcode); ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <img id="image" src="#" />
                                        <label for="exampleInputPassword1">New Photo</label>
                                        <input type="file" class="form-control" name="company_logo" accept="image/*"  onchange="readURL(this);">
                                    </div>

                                    <div class="form-group">
                                        <img src="<?php echo e(URL::to($setting->company_logo)); ?>"  style="height: 80px; width: 80px;" >
                                        <input type="hidden" name="old_photo" value="<?php echo e($setting->company_logo); ?>">

                                    </div>

                                    <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
                                </form>
                            </div><!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- col-->

                </div>

            </div> <!-- container -->

        </div> <!-- content -->

    </div>

    <script type="text/javascript">
        function readURL(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function (e){
                    $('#image')
                        .attr('src', e.target.result)
                        .width(80)
                        .height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventoryLearnHunter\inventory_hunter\resources\views/setting.blade.php ENDPATH**/ ?>