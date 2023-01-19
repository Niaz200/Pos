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
                            <div class="panel-heading"><h3 class="panel-title">Add Product
                                    <a href="<?php echo e(route('import.product')); ?>" class="btn btn-sm btn-danger pull-right">Import Product</a>
                                </h3></div>

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
                                <form role="form" action="<?php echo e(url('/insert-product')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Name</label>
                                        <input type="text" class="form-control" name="product_name" placeholder="Product Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Category</label>

                                        <?php
                                         $cat=DB::table('categories')->get();
                                        ?>

                                        <select name="cat_id" class="form-control">
                                            <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($row->id); ?>"><?php echo e($row->cat_name); ?></option>
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
                                                <option value="<?php echo e($row->id); ?>"><?php echo e($row->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Code</label>
                                        <input type="text" class="form-control" name="product_code" placeholder="Product Code" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Garage</label>
                                        <input type="text" class="form-control" name="product_garage" placeholder="Product Garage" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Route</label>
                                        <input type="text" class="form-control" name="product_route" placeholder="Product Router" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Description</label>

                                        <textarea class="form-control" rows="4" name="product_des"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Buying Date</label>
                                        <input type="date" class="form-control" name="buy_date" placeholder="Buying Date" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Expire Date</label>
                                        <input type="date" class="form-control" name="expire_date" placeholder="Expire Date" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Buying Price</label>
                                        <input type="text" class="form-control" name="buying_price" placeholder="Buying Price" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Selling Price</label>
                                        <input type="text" class="form-control" name="selling_price" placeholder="Selling Price" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Quantity</label>
                                        <input type="text" class="form-control" name="quantity" placeholder="Selling Price" required>
                                    </div>
                                    <div class="form-group">
                                        <img id="image" src="#" alt=""/>
                                        <label for="exampleInputPassword1">Photo</label>
                                        <input type="file"  name="product_image" accept="image/*"  required onchange="readURL(this);">
                                    </div>

                                    <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventoryLearnHunter\inventory_hunter\resources\views/add_product.blade.php ENDPATH**/ ?>