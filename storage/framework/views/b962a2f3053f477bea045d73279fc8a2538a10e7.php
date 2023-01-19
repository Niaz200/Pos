<?php $__env->startSection('content'); ?>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12 bg-info">
                        <h4 class="pull-left page-title text-white">POS (Point of Sale) </h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#" class="text-white">Echovel</a></li>
                            <li class="text-white"><?php echo e(date('d/m/y')); ?></li>
                        </ol>
                    </div>
                </div>
                <br><br>
                <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 ">
                            <div class="portfolioFilter">

                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="#" data-filter="*" class="current"><?php echo e($row->cat_name); ?></a>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row"><br>
                        <div class="col-lg-6">
















                            <div class="price_card text-center">

                                <ul class="price-features" style="border: 1px solid grey;">
                                    <table class="table">
                                        <thead class="bg-info">
                                            <tr>
                                                <th class="text-white">Name</th>
                                                <th class="text-white">Qty</th>
                                                <th class="text-white">Single Price</th>
                                                <th class="text-white">Sub Total</th>
                                                <th class="text-white">Action</th>
                                            </tr>
                                        </thead>

                                        <?php
                                            $cart_prod=Cart::content()
                                        ?>

                                        <tbody>

                                        <?php $__currentLoopData = $cart_prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <th><?php echo e($prod->name); ?></th>
                                                <th>
                                                    <form action="<?php echo e(url('/cart-update/'.$prod->rowId)); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="number" name="qty" value="<?php echo e($prod->qty); ?>" style="width: 40px;">
                                                        <button type="submit" class="btn btn-sm btn-success" style="margin-top: -2px;"><i class="fas fa-check"></i></button>
                                                    </form>
                                                </th>
                                                <th><?php echo e($prod->price); ?></th>
                                                <th><?php echo e($prod->price*$prod->qty); ?></th>

                                                <th><a href="<?php echo e(URL::to('/cart-remove/'.$prod->rowId)); ?>"><i class="fas fa-trash-alt text-danger"></i></a></th>
                                            </tr>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>

                                    </table>

                                </ul>
                                 <div class="pricing-header bg-primary">
                                    <p style="font-size: 18px"> Quantity: <?php echo e(Cart::count()); ?></p>
                                    <p style="font-size: 18px"> Sub Total: <?php echo e(Cart::subtotal()); ?></p>
                                    <p style="font-size: 18px"> Product: 00.00</p>
                                    <p style="font-size: 18px"> VAT: <?php echo e(Cart::tax()); ?></p>
                                     <hr>
                                    <p><h2 class="text-white">Total:</h2> <h1 class="text-white"><?php echo e(Cart::total()); ?></h1></p>





                                <form action="<?php echo e(url('/create-invoice')); ?>" method="post">
                                    <?php echo csrf_field(); ?>

                                    <div class="panel"><br><br>

                                        <?php if($errors->any()): ?>
                                            <div class="alert alert-danger">
                                                <ul>
                                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li><?php echo e($error); ?></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>
                                        <?php endif; ?>

                                        <h4 class="text-info">Select Customer
                                            <a href="#" class="btn btn-sm btn-primary waves-effect waves-light pull-right" data-toggle="modal"
                                               data-target="#con-close-modal">Add New</a>
                                        </h4>

                                        <select class="form-control" name="cus_id">
                                            <option disabled="" selected="">select customer</option>
                                            <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($cus->id); ?>"><?php echo e($cus->name); ?></option>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>

                                    </div>


                             </div>


                                <button type="submit" class="btn btn-success">Create Invoice</button>


                            </div>
                        </div>

                         </form>



                    <div class="col-lg-6">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Product Code</th>


                            </tr>
                            </thead>


                            <tbody>
                            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <form action="<?php echo e(url('/add-cart')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="id" value="<?php echo e($row->id); ?>">
                                        <input type="hidden" name="name" value="<?php echo e($row->product_name); ?>">
                                        <input type="hidden" name="qty" value="1">
                                        <input type="hidden" name="price" value="<?php echo e($row->selling_price); ?>">
                                        <input type="hidden" name="weight" value="0">
                                    <td>
                                        <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-plus-square"></i></button>

                                        <img src="<?php echo e(URL::to($row->product_image)); ?>" width="60px"; height="60px;" alt=""></td>
                                    <td><?php echo e($row->product_name); ?></td>
                                    <td><?php echo e($row->cat_name); ?></td>
                                    <td><?php echo e($row->product_code); ?></td>



                                    </form>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                    </div>

                </div>


            </div> <!-- container -->
        </div> <!-- content -->
    </div><!-- content-page -->


    <!--customer add modal--->
    <form action="<?php echo e(url('/insert-customer')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" >Add a New Customer</h4>
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
                                <label for="field-4" class="control-label">Name</label>
                                <input type="text" class="form-control" id="field-4" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-5" class="control-label">Email</label>
                                <input type="email" class="form-control" id="field-5"  name="email" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Phone</label>
                                <input type="text" class="form-control" id="field-6" name="phone" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-4" class="control-label">Address</label>
                                <input type="text" class="form-control" id="field-4" name="address" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-5" class="control-label">Shopname</label>
                                <input type="text" class="form-control" id="field-5" name="shopname" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-6" class="control-label">City</label>
                                <input type="text" class="form-control" id="field-6" name="city" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-4" class="control-label">Account Number</label>
                                <input type="text" class="form-control" id="field-4" name="account_number" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-5" class="control-label">Account Holder</label>
                                <input type="text" class="form-control" id="field-5" name="account_holder">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Bank Name</label>
                                <input type="text" class="form-control" id="field-6" name="bank_name" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-4" class="control-label">Bank Brach</label>
                                <input type="text" class="form-control" id="field-4" name="bank_branch" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <img id="image" src="#" alt="">
                                <label for="exampleInputPassword1">Show Photo</label>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Photo</label>
                                <input type="file" class="form-control" name="photo" accept="image/*" class="upload" required onchange="readURL(this);">
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
                </div>
            </div>
        </div>
    </div><!-- /.modal -->

    </form>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventoryLearnHunter\inventory_hunter\resources\views/pos.blade.php ENDPATH**/ ?>