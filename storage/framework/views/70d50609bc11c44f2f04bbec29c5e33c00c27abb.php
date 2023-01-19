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
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">All Product</h3>
                                <a  href="<?php echo e(route('add.product')); ?>" class="btn btn-sm btn-info pull-right ">Add New</a>
                                <br>
                            </div>



                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Code</th>
                                                <th>Category Name</th>
                                                <th>Selling</th>
                                                <th>Image</th>
                                                <th>Quantity</th>
                                                <th>Garage</th>
                                                <th>Route</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($row->product_name); ?></td>
                                                    <td><?php echo e($row->product_code); ?></td>
                                                    <td><?php echo e($row->cat_name); ?></td>
                                                    <td><?php echo e($row->selling_price); ?></td>
                                                    <td><img src="<?php echo e($row->product_image); ?>" style=" height: 60px; width: 60px;" alt=""></td>
                                                    <td><?php echo e($row->quantity); ?></td>
                                                    <td><?php echo e($row->product_garage); ?></td>
                                                    <td><?php echo e($row->product_route); ?></td>

                                                    <td>
                                                        <a href="<?php echo e(URL::to('edit-product/'.$row->id)); ?>" class="btn btn-sm btn-info">Edit</a>
                                                        <a href="<?php echo e(URL::to('delete-product/'.$row->id)); ?>" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                                        <a href="<?php echo e(URL::to('view-product/'.$row->id)); ?>" class="btn btn-sm btn-primary">View</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div> <!-- container -->

        </div> <!-- content -->

    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test-inventory\inventory\inventoryLearnHunter\inventory_hunter\resources\views/all-product.blade.php ENDPATH**/ ?>