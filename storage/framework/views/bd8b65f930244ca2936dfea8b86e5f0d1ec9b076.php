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
                        <div class="panel panel-info">
                            <div class="panel-heading"><h3 class="panel-title text-white">Products Import
                                    <a  href="<?php echo e(route('export')); ?>" class="btn btn-sm btn-danger pull-right ">Download Xlsx</a>
                                </h3>


                            </div>






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
                                <form role="form" action="<?php echo e(url('/import')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Xlsx File Import</label>
                                        <input type="file"  name="import_file" required>
                                    </div>


                                    <button type="submit" class="btn btn-success waves-effect waves-light">Upload</button>
                                </form>
                            </div><!-- panel-body -->

                            <div class="container">
                                <strong class="text-danger">Please download the xlsx file and clear it | Now you write your all products by listing and import it again | Thank you.</strong>

                            </div>

                        </div> <!-- panel -->



                    </div> <!-- col-->

                </div>

            </div> <!-- container -->

        </div> <!-- content -->

    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventoryLearnHunter\inventory_hunter\resources\views/import_product.blade.php ENDPATH**/ ?>