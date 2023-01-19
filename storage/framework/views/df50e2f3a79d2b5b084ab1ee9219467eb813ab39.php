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
                            <!-- <div class="panel-heading">
                                <h4>Invoice</h4>
                            </div> -->
                            <div class="panel-body">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <h4 class="text-right"> CSL Traning</h4>

                                    </div>
                                    <div class="pull-right">
                                        <h4>Invoice # <br>
                                            <strong><?php echo e(date('d/m/y')); ?></strong>
                                        </h4>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="pull-left m-t-30">
                                            <address>
                                                <strong>Name: <?php echo e($customer->name); ?></strong><br>
                                                Shop Name: <?php echo e($customer->shopname); ?><br>
                                                Address: <?php echo e($customer->address); ?><br>
                                                City: <?php echo e($customer->city); ?><br>
                                                Phone: <?php echo e($customer->phone); ?>


                                            </address>
                                        </div>
                                        <div class="pull-right m-t-30">
                                            <p><strong>Order Date: </strong> <?php echo e(date("l jS \of F Y")); ?></p>
                                            <p class="m-t-10"><strong>Order Status: </strong> <span class="label label-pink">Pending</span></p>



                                            <p class="m-t-10"><strong>Order ID: </strong> 1</p>
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
                                                    <th>Item</th>
                                                    <th>Quantity</th>
                                                    <th>Unit Cost</th>
                                                    <th>Total</th>
                                                </tr></thead>
                                                <tbody>

                                                <?php
                                                    $sI=1;
                                                ?>


                                                <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cont): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <tr>
                                                    <td><?php echo e($sI++); ?></td>
                                                    <td><?php echo e($cont->name); ?></td>
                                                    <td><?php echo e($cont->qty); ?></td>
                                                    <td><?php echo e($cont->price); ?></td>
                                                    <td><?php echo e($cont->price*$cont->qty); ?></td>

                                                </tr>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="border-radius: 0px;">
                                    <div class="col-md-3 col-md-offset-9">
                                        <p class="text-right"><b>Sub-total:</b> <?php echo e(Cart::subtotal()); ?></p>

                                        <p class="text-right">VAT: <?php echo e(Cart::tax()); ?></p>
                                        <hr>
                                        <h3 class="text-right">Total: <?php echo e(Cart::total()); ?></h3>
                                    </div>
                                </div>
                                <hr>
                                <div class="hidden-print">
                                    <div class="pull-right">
                                        <a href="#" onclick="printDiv('printableArea')"  class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                                        <a href="#" class="btn btn-primary waves-effect waves-light" data-toggle="modal"
                                           data-target="#con-close-modal">Submit</a>
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


<!-- payable modal-->
    <!--customer add modal--->
    <form action="<?php echo e(url('/final-invoice')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header ">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title text-info" >Invoice of <?php echo e($customer->name); ?>

                            <span class="pull-right">total: <?php echo e(Cart::total()); ?></span>

                        </h4>

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

                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-4" class="control-label">Payment</label>

                                    <select class="form-control" name="payment_status" id="">
                                        <option value="Handcash">Handcash</option>
                                        <option value="Cheque">Cheque</option>
                                        <option value="Due">Due</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-5" class="control-label">Pay</label>
                                    <input type="text" class="form-control" id="field-5"  name="pay">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-6" class="control-label">Due</label>
                                    <input type="text" class="form-control" id="field-6" name="due">
                                </div>
                            </div>
                        </div>


                    </div>

                    <input type="hidden" name="customer_id" value="<?php echo e($customer->id); ?>">
                    <input type="hidden" name="order_date" value="<?php echo e(date('d/m/y')); ?>">
                    <input type="hidden" name="order_status" value="pending">
                    <input type="hidden" name="total_products" value="<?php echo e(Cart::count()); ?>">
                    <input type="hidden" name="sub_total" value="<?php echo e(Cart::subtotal()); ?>">
                    <input type="hidden" name="vat" value="<?php echo e(Cart::tax()); ?>">
                    <input type="hidden" name="total" value="<?php echo e(Cart::total()); ?>">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light" >Submit</button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->

    </form>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test-inventory\inventory\inventoryLearnHunter\inventory_hunter\resources\views/invoice.blade.php ENDPATH**/ ?>