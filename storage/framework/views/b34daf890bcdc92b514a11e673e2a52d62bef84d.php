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
                                <a  href="<?php echo e(route('stock.report.pdf')); ?>" class="btn btn-sm btn-info pull-right" target="_blank"><i class="fa fa-download"></i> Download PDF</a>
                                <br>
                            </div>

                           

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Sl.</th>
                                                <th>Supplier Name</th>
                                                <th>Category Name</th>
                                                <th>Product Name</th>
                                                <th>Code</th>
                                                <th>Selling Price</th>
                                                <th>Image</th>
                                                <th>Quantity</th>
                                                <th>Garage</th>
                                                <th>Route</th>

                                            </tr>
                                            </thead>


                                            <tbody>

                                            <?php $__currentLoopData = $allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                                                <tr>
                                                    <td><?php echo e($key+1); ?></td>
                                                    <td><?php echo e($row->shop); ?></td>
                                                    <td><?php echo e($row->cat_name); ?></td>
                                                    <td><?php echo e($row->product_name); ?></td>
                                                    <td><?php echo e($row->product_code); ?></td>
                                                    <td><?php echo e($row->selling_price); ?></td>
                                                    <td><img src="<?php echo e($row->product_image); ?>" style=" height: 60px; width: 60px;" alt=""></td>
                                                    <td><?php echo e($row->quantity); ?></td>
                                                    <td><?php echo e($row->product_garage); ?></td>
                                                    <td><?php echo e($row->product_route); ?></td>






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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventoryLearnHunter\inventory_hunter\resources\views/stock_report.blade.php ENDPATH**/ ?>