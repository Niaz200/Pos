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
                            <div class="panel-heading"><h3 class="panel-title">Edit Product</h3></div>

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
                                <form role="form" action="<?php echo e(url('/update-product/'.$prod->id)); ?>"  method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Name</label>
                                        <input type="text" class="form-control" name="product_name" value="<?php echo e($prod->product_name); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Category</label>

                                        <?php
                                            $cat=DB::table('categories')->get();
                                        ?>

                                        <select name="cat_id" class="form-control">
                                            <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <option value="<?php echo e($row->id); ?>" <?php if($prod->cat_id == $row->id) { echo "selected";} ?>>
                                                    <?php echo e($row->cat_name); ?></option>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Supplier</label>
                                        <?php
                                            $sup=DB::table('suppliers')->get();
                                        ?>

                                        <select name="sup_id" class="form-control">
                                            <?php $__currentLoopData = $sup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <option value="<?php echo e($row->id); ?>" <?php if($prod->sup_id == $row->id) { echo "selected";} ?>>
                                                    <?php echo e($row->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Code</label>
                                        <input type="text" class="form-control" name="product_code" value="<?php echo e($prod->product_code); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Garage</label>
                                        <input type="text" class="form-control" name="product_garage" value="<?php echo e($prod->product_garage); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Route</label>
                                        <input type="text" class="form-control" name="product_route" value="<?php echo e($prod->product_route); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Description</label>

                                        <textarea class="form-control" rows="4" name="product_des" ><?php echo e($prod->product_des); ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Buying Date</label>
                                        <input type="date" class="form-control" name="buy_date" value="<?php echo e($prod->buy_date); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Expire Date</label>
                                        <input type="date" class="form-control" name="expire_date" value="<?php echo e($prod->expire_date); ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Buying Price</label>
                                        <input type="text" class="form-control" name="buying_price" value="<?php echo e($prod->buying_price); ?>"  required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Selling Price</label>
                                        <input type="text" class="form-control" name="selling_price" value="<?php echo e($prod->selling_price); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Quantity</label>
                                        <input type="text" class="form-control" name="quantity" value="<?php echo e($prod->quantity); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <img id="image" src="#" alt=""/>
                                        <label for="exampleInputPassword1">Photo</label>
                                        <input type="file"  name="product_image" accept="image/*"   onchange="readURL(this);">

                                    </div>


                                    <input type="hidden" name="old_photo" value="<?php echo e($prod->product_image); ?>">

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Old Photo</label>
                                        <img src="<?php echo e(URL::to($prod->product_image)); ?>" style="height: 80px; width: 80px;" alt="">

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventoryLearnHunter\inventory_hunter\resources\views/edit_product.blade.php ENDPATH**/ ?>