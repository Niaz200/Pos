<?php $__env->startSection('content'); ?>

    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Invoice</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Echovel</a></li>
                            <li><a href="#">Pages</a></li>
                            <li class="active">Invoice</li>
                        </ol>
                    </div>
                </div>

                <div class="row" >
                    <div class="col-md-12" id="printableArea">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="clearfix">
                                    <div class="pull-right">
                                        <h4>Order Date <br>
                                            <strong><?php echo e($order->order_date); ?></strong>
                                        </h4>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="pull-left m-t-30">
                                            <address>
                                                <strong>Name: <?php echo e($order->name); ?></strong><br>
                                                Shop Name: <?php echo e($order->shopname); ?><br>
                                                Address: <?php echo e($order->address); ?><br>
                                                City: <?php echo e($order->city); ?><br>
                                                Phone: <?php echo e($order->phone); ?>


                                            </address>
                                        </div>
                                        <div class="pull-right m-t-30">
                                            <p><strong>Today: </strong> <?php echo e(date("l jS \of F Y")); ?></p>
                                            <p class="m-t-10"><strong>Order Status: </strong>
                                                <?php if($order->order_status == 'pending'): ?>
                                                    <span class="label label-pink">Pending</span>
                                                <?php else: ?>
                                                    <span class="label label-success">Success</span>
                                                <?php endif; ?>
                                            </p>

                                            <p class="m-t-10"><strong>Order ID: </strong><?php echo e($order->id); ?> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-h-50"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table m-t-30">
                                                <thead>
                                                <tr><th>#</th>
                                                    <th>Product Name</th>
                                                    <th>Product Code</th>
                                                    <th>Quantity</th>
                                                    <th>Unit Cost</th>
                                                    <th>Total</th>
                                                </tr></thead>
                                                <tbody>

                                                <?php
                                                    $sI=1;
                                                ?>


                                                <?php $__currentLoopData = $order_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cont): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <tr>
                                                        <td><?php echo e($sI++); ?></td>
                                                        <td><?php echo e($cont->product_name); ?></td>
                                                        <td><?php echo e($cont->product_code); ?></td>
                                                        <td><?php echo e($cont->quantity); ?></td>
                                                        <td><?php echo e($cont->unitcost); ?></td>
                                                        <td><?php echo e($cont->unitcost*$cont->quantity); ?></td>

                                                    </tr>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="border-radius: 0px;"><br>

                                    <div class="col-md-9">
                                        <h3 >Payment By: <?php echo e($order->payment_status); ?></h3>
                                        <h4 >Pay: <?php echo e($order->pay); ?></h4>
                                        <h4 >Due: <?php echo e($order->due); ?></h4>

                                    </div>

                                    <div class="col-md-3 ">
                                        <p class="text-right"><b>Sub-total:</b> <?php echo e($order->sub_total); ?></p>
                                        
                                        <p class="text-right">VAT: <?php echo e($order->vat); ?></p>
                                        <hr>
                                        <h3 class="text-right">Total: <?php echo e($order->total); ?></h3>
                                    </div>
                                </div>
                                <hr>
                                <div class="hidden-print">
                                    <div class="pull-right">
                                        <a href="#" onclick="printDiv('printableArea')"  class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                                        <?php if($order->order_status == 'success'): ?>

                                        <?php else: ?>
                                        <a href="<?php echo e(URL::to('/pos-done/'.$order->id)); ?>" class="btn btn-primary waves-effect waves-light">Done</a>

                                        <?php endif; ?>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>



            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer text-right">
            2022 © CSL Traning.
        </footer>

    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

    <!-- For Print-->
    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>




<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventoryLearnHunter\inventory_hunter\resources\views/order_confirmation.blade.php ENDPATH**/ ?>