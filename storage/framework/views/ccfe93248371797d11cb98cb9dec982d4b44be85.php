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
                                <h3 class="panel-title">Take Attendance
                                    <a href="<?php echo e(route('all.attendance')); ?>" class="btn btn-sm btn-info pull-right">All Attendance</a>
                                </h3>
                            </div>

                            <h3 class="text-success" align="center">Today: <?php echo e(date("d/m/y")); ?></h3>

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table  class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Photo</th>
                                                <th>Attendance</th>
                                            </tr>
                                            </thead>


                                            <tbody>

                                            <form action="<?php echo e(url('/insert-attendance')); ?>" method="post">
                                                <?php echo csrf_field(); ?>

                                            <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($row->name); ?></td>

                                                    <td><img src="<?php echo e($row->photo); ?>" style=" height: 60px; width: 60px;" alt=""></td>
                                                    <input type="hidden" name="user_id[]" value="<?php echo e($row->id); ?>">

                                                    <td>
                                                        <input type="radio" name="attendance[<?php echo e($row->id); ?>]" value="Present" required>Present
                                                        <input type="radio" name="attendance[<?php echo e($row->id); ?>]" value="Absence" required>Absence

                                                    </td>

                                                    <input type="hidden" name="att_date" value="<?php echo e(date("d/m/y")); ?>">
                                                    <input type="hidden" name="att_year" value="<?php echo e(date("Y")); ?>">
                                                    <input type="hidden" name="month" value="<?php echo e(date("F")); ?>">

                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>

                                        <button type="submit" class="btn btn-success">Take Attendance</button>

                                        </form>

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


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventoryLearnHunter\inventory_hunter\resources\views/take_attendance.blade.php ENDPATH**/ ?>