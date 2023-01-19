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
                            <div class="panel-heading"><h3 class="panel-title">View Employee</h3></div>
                            <div class="panel-body">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <p><?php echo e($single->name); ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email</label>
                                        <p><?php echo e($single->email); ?></p>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Phone</label>
                                        <p><?php echo e($single->phone); ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Address</label>
                                        <p><?php echo e($single->address); ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Experience</label>
                                        <p><?php echo e($single->experience); ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">NID NO.</label>
                                        <p><?php echo e($single->nid_no); ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Salary</label>
                                        <p><?php echo e($single->salary); ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Vacation</label>
                                        <p><?php echo e($single->vacation); ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">City</label>
                                        <p><?php echo e($single->city); ?></p>
                                    </div>
                                    <div class="form-group">
                                        <img style="height: 80px; width: 80px;" src="<?php echo e(URL::to($single->photo)); ?>" alt="">
                                        <label for="exampleInputPassword1">Photo</label>

                                    </div>


                            </div><!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- col-->

                </div>

            </div> <!-- container -->

        </div> <!-- content -->

    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventoryLearnHunter\inventory_hunter\resources\views/view_employee.blade.php ENDPATH**/ ?>