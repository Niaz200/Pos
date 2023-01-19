<?php $__env->startSection('content'); ?>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Welcome ! <?php echo e(date("Y")); ?></h4>
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
                                <h3 class="panel-title text-danger"><?php echo e(date("F")); ?> All Expense</h3>

                                <br>
                            </div>



                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                            <tr>

                                                <th>Details</th>
                                                <th>Date</th>
                                                <th>Amount</th>

                                            </tr>
                                            </thead>


                                            <tbody>
                                            <?php $__currentLoopData = $expense; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($row->details); ?></td>
                                                    <td><?php echo e($row->date); ?></td>
                                                    <td><?php echo e($row->amount); ?></td>

                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </tbody>

                                        </table>

                                        <?php
                                           $month=date("F");

                                            $total=DB::table('expenses')->where('month',$month)->sum('amount');
                                        ?>


                                        <h4 style="color: red; margin-left: 24%;  font-size: 20px;" align="center">Total Expense: <?php echo e($total); ?> Taka </h4>


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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventoryLearnHunter\inventory_hunter\resources\views/monthly_expense.blade.php ENDPATH**/ ?>