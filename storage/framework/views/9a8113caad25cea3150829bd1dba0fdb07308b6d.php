<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stock Report PDF</title>


    <link href="<?php echo e(asset('admin/css/bootstrap.min.css')); ?>" rel="stylesheet" />

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table width="100%">
                    <tbody>
                        <tr>
                            <td width="25%"></td>
                            <td>
                                <span style="font-size: 20px;background: #1781BF;padding: 3px 10px 3px 10px;color: #fff;">Shapla Shoping Mall</span><br>
                                 Uttara-Badda,Dhaka
                            </td>

                            <td>
                                <span>Showroom No:01735207899 <br/>
                                    Owner No: 0145278251
                                </span>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <hr style="margin-bottom: 0px;">
                <table>
                    <tbody>
                        <tr>
                            <td width="25%"></td>
                            <td>
                                <u><strong><span style="font-size: 15px">Stock Report</span></strong></u>


                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">

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

        <div class="row">
            <div class="col-md-12">
                <table border="0" width="100%">
                    <tbody>
                        <tr>
                            <td style="width: 40%;"></td>
                            <td tyle="width: 20%;"></td>
                            <td style="width: 40%; text-align: center;">
                                <p style="text-align: center; border-bottom: 1px solid #000;">Owner signature</p>
                            </td>
                        </tr>
                    </tbody>

                </table>

            </div>
        </div>

    </div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\inventoryLearnHunter\inventory_hunter\resources\views/stock_pdf.blade.php ENDPATH**/ ?>
