<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supplier Wise Stock Report PDF</title>

    
    

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

    <div class="row"  >
        <div class="col-md-12">
            <hr style="margin-bottom: 0px;">
            <table style="margin: 0px auto;">
                <tbody>
                <tr >
                    <td ></td>
                    <td >
                        <u><strong><span style="font-size: 15px; ">Product Wise Stock Report</span></strong></u>

                    </td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>

    <div class="row">
        <div class="col-md-12">

            <table border="1px solid black" cellspacing = "0" width="100%">
                <thead>
                <tr>
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


                    <tr>


                        <td><?php echo e($product->shop); ?></td>
                        <td><?php echo e($product->cat_name); ?></td>
                        <td><?php echo e($product->product_name); ?></td>
                        <td><?php echo e($product->product_code); ?></td>
                        <td><?php echo e($product->selling_price); ?></td>
                        <td><img src="<?php echo e($product->product_image); ?>" style=" height: 60px; width: 60px;" alt=""></td>
                        <td><?php echo e($product->quantity); ?></td>
                        <td><?php echo e($product->product_garage); ?></td>
                        <td><?php echo e($product->product_route); ?></td>

                        
                        
                        
                        
                        
                    </tr>

                </tbody>
            </table>

            <?php
                $date = new DateTime('now', new DateTimeZone('Asia/Dhaka'));
            ?>
            <i>Printing time : <?php echo e($date->format('F j,Y,g:ia')); ?></i>

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
                        <p style="text-align: center; margin-top: 60px; border-bottom: 1px solid #000;">Owner signature</p>
                    </td>
                </tr>
                </tbody>

            </table>

        </div>
    </div>

</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\inventoryLearnHunter\inventory_hunter\resources\views/product_wise_stock_report_pdf.blade.php ENDPATH**/ ?>