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

                <?php

                /* $data= $today->date;  */

                  $date=date("d/m/y");
                  $expense=DB::table('expenses')->where('date',$date)->sum('amount');

                ?>

                <!-- Start Widget -->
                <div class="row">
                    <div class="col-md-12">
                        <h4 style="color: red; font-size: 30px;" align="center">Total: <?php echo e($expense); ?> Taka</h4>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Today expense</h3>
                                <a  href="<?php echo e(route('add.expense')); ?>" class="btn btn-sm btn-info pull-right ">Add New</a>
                                <br>
                            </div>



                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                            <tr>

                                                <th>Details</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            <?php $__currentLoopData = $today; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($row->details); ?></td>
                                                    <td><?php echo e($row->amount); ?></td>

                                                    <td>
                                                        <a href="<?php echo e(URL::to('edit-expense/'.$row->id)); ?>" class="btn btn-sm btn-info">Edit</a>
                                                        <a href="<?php echo e(URL::to('/delete-expense/'.$row->id)); ?>" class="btn btn-sm btn-danger" id="delete">Delete</a>

                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </tbody>

                                        </table>
                                        <h4 style=" margin-left: 24%;  font-size: 20px;" align="center">Total: <?php echo e($expense); ?> Taka </h4>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventoryLearnHunter\inventory_hunter\resources\views/today_expense.blade.php ENDPATH**/ ?>