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
                                <h3 class="panel-title">All Advanced Salary</h3>
                                <a  href="<?php echo e(route('add.advancedsalary')); ?>" class="btn btn-sm btn-info pull-right ">Add New</a>
                                <br>
                            </div>



                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Photo</th>
                                                <th>Salary</th>
                                                <th>Month</th>
                                                <th>Advanced</th>
                                                <th>Year</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            <?php $__currentLoopData = $salary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($row->name); ?></td>
                                                    <td><img src="<?php echo e($row->photo); ?>" style="height: 60px; width: 60px" alt=""></td>
                                                    <td><?php echo e($row->salary); ?></td>
                                                    <td><?php echo e($row->month); ?></td>
                                                    <td><?php echo e($row->advanced_salary); ?></td>
                                                    <td><?php echo e($row->year); ?></td>
                                                    <td>
                                                        <a href="<?php echo e(URL::to('/'.$row->id)); ?>" class="btn btn-sm btn-info">Edit</a>
                                                        <a href="<?php echo e(URL::to('/'.$row->id)); ?>" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                                        <a href="<?php echo e(URL::to('/'.$row->id)); ?>" class="btn btn-sm btn-primary">View</a>
                                                    </td>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventoryLearnHunter\inventory_hunter\resources\views/all_advanced_salary.blade.php ENDPATH**/ ?>