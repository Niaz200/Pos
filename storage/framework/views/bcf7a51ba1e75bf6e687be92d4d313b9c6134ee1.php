<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->



    <!-- Scripts -->




<!-- Base Css Files -->
    <link href="<?php echo e(asset('admin/css/bootstrap.min.css')); ?>" rel="stylesheet" />

    <!-- Font Icons -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- DataTables -->
    <link href="<?php echo e(asset('admin/assets/datatables/jquery.dataTables.min.css')); ?>" rel="stylesheet" type="text/css" />


    <link href="<?php echo e(asset('admin/assets/ionicon/css/ionicons.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('admin/css/material-design-iconic-font.min.css')); ?>" rel="stylesheet">

    <!-- animate css -->
    <link href="<?php echo e(asset('admin/css/animate.css')); ?>" rel="stylesheet" />

    <!-- Waves-effect -->
    <link href="<?php echo e(asset('admin/css/waves-effect.css')); ?>" rel="stylesheet">

    <!-- sweet alerts -->


    <!-- Custom Files -->
    <link href="<?php echo e(asset('admin/css/helper.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('admin/css/style.css')); ?>" rel="stylesheet" type="text/css" />
    <script src="<?php echo e(asset('admin/js/modernizr.min.js')); ?>"></script>
    <!-- Styles -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />







</head>

    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>

                        <?php else: ?>

                            <!-- Top Bar Start -->
                                <div class="topbar">
                                    <!-- LOGO -->
                                    <?php
                                      $ab= DB::table('settings')->get();
                                    ?>
                                    <div class="topbar-left">
                                        <div class="text-center">
                                            <?php $__currentLoopData = $ab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="index.html" class="logo"><i class="md md-terrain"></i> <span>  <?php echo e($pro->company_name); ?></span></a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                    <!-- Button mobile view to collapse sidebar menu -->
                                    <div class="navbar navbar-default" role="navigation">
                                        <div class="container">
                                            <div class="">
                                                <div class="pull-left">
                                                    <button class="button-menu-mobile open-left">
                                                        <i class="fa fa-bars"></i>
                                                    </button>
                                                    <span class="clearfix"></span>
                                                </div>
                                                <form class="navbar-form pull-left" role="search">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                                                    </div>
                                                    <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                                                </form>

                                                <ul class="nav navbar-nav navbar-right pull-right">
                                                    <li class="dropdown hidden-xs">
                                                        <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                                            <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-lg">
                                                            <li class="text-center notifi-title">Notification</li>
                                                            <li class="list-group">
                                                                <!-- list item-->
                                                                <a href="javascript:void(0);" class="list-group-item">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <em class="fa fa-user-plus fa-2x text-info"></em>
                                                                        </div>
                                                                        <div class="media-body clearfix">
                                                                            <div class="media-heading">New user registered</div>
                                                                            <p class="m-0">
                                                                                <small>You have 10 unread messages</small>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <!-- list item-->
                                                                <a href="javascript:void(0);" class="list-group-item">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <em class="fa fa-diamond fa-2x text-primary"></em>
                                                                        </div>
                                                                        <div class="media-body clearfix">
                                                                            <div class="media-heading">New settings</div>
                                                                            <p class="m-0">
                                                                                <small>There are new settings available</small>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <!-- list item-->
                                                                <a href="javascript:void(0);" class="list-group-item">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                                        </div>
                                                                        <div class="media-body clearfix">
                                                                            <div class="media-heading">Updates</div>
                                                                            <p class="m-0">
                                                                                <small>There are
                                                                                    <span class="text-primary">2</span> new updates available</small>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <!-- last list item -->
                                                                <a href="javascript:void(0);" class="list-group-item">
                                                                    <small>See all notifications</small>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="hidden-xs">
                                                        <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                                    </li>
                                                    <li class="hidden-xs">
                                                        <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                                                    </li>

                                                    <li class="dropdown">
                                                        <?php $__currentLoopData = $ab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo e(asset($lg->company_logo)); ?>" alt="user-img" class="img-circle"> </a>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <ul class="dropdown-menu">
                                                            <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                                            <li><a href="<?php echo e(route('setting')); ?>"><i class="md md-settings"></i> Settings</a></li>
                                                            <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                                            <li><a href="<?php echo e(route('logout')); ?>"
                                                                   onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                                    <i class="md md-settings-power"></i> Logout</a>
                                                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                                                    <?php echo csrf_field(); ?>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--/.nav-collapse -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Top Bar End -->


                                <!-- ========== Left Sidebar Start ========== -->

                                <div class="left side-menu">
                                    <div class="sidebar-inner slimscrollleft">

























                                        <!--- Divider -->
                                        <div id="sidebar-menu">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo e(route('home')); ?>" class="waves-effect active"><i class="md md-home"></i><span> Dashboard </span></a>
                                                </li>

                                                <li>
                                                    <a href="<?php echo e(route('pos')); ?>" class="waves-effect "><i class="md md-home"></i><span class="text-primary"> <b> POS </b> </span></a>
                                                </li>

                                                <li class="has_sub">
                                                    <a href="#" class="waves-effect"><i class="fas fa-users"></i><span> Employee </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="<?php echo e(route('add.employee')); ?>">Add Employee</a></li>
                                                        <li><a href="<?php echo e(route('all.employee')); ?>">All Employee</a></li>

                                                    </ul>
                                                </li>



                                                <li class="has_sub">
                                                    <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Customers </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="<?php echo e(route('add.customer')); ?>">Add Customer</a></li>
                                                        <li><a href="<?php echo e(route('all.customer')); ?>">All Customers</a></li>


                                                    </ul>

                                                </li>

                                                <li class="has_sub">
                                                    <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Suppliers </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="<?php echo e(route('add.supplier')); ?>">Add Supplier</a></li>
                                                        <li><a href="<?php echo e(route('all.supplier')); ?>">All Suppliers</a></li>


                                                    </ul>

                                                </li>

                                                <li class="has_sub">
                                                    <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Salary(EMP) </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="<?php echo e(route('add.advancedsalary')); ?>">Add Advanced Salary</a></li>
                                                        <li><a href="<?php echo e(route('all.advancedsalary')); ?>">All Advanced Salary</a></li>
                                                        <li><a href="<?php echo e(route('pay.salary')); ?>">Pay Salary</a></li>
                                                        <li><a href="<?php echo e(route('all.advancedsalary')); ?>">Last Month Salary</a></li>

                                                    </ul>

                                                </li>

                                                <li class="has_sub">
                                                    <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Category </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="<?php echo e(route('add.category')); ?>">Add Category</a></li>
                                                        <li><a href="<?php echo e(route('all.category')); ?>">All Category</a></li>

                                                    </ul>

                                                </li>

                                                <li class="has_sub">
                                                    <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Products </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="<?php echo e(route('add.product')); ?>">Add Product</a></li>
                                                        <li><a href="<?php echo e(route('all.product')); ?>">All Product</a></li>
                                                        <li><a href="<?php echo e(route('import.product')); ?>">Import Product</a></li>

                                                    </ul>

                                                </li>

                                                <li class="has_sub">
                                                    <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Expense </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="<?php echo e(route('add.expense')); ?>">Add New</a></li>
                                                        <li><a href="<?php echo e(route('today.expense')); ?>">Today Expense</a></li>
                                                        <li><a href="<?php echo e(route('monthly.expense')); ?>">Monthly Expense</a></li>
                                                        <li><a href="<?php echo e(route('yearly.expense')); ?>">Yearly Expense</a></li>
                                                        <li><a href="<?php echo e(route('monthWise.expense')); ?>">MonthWise Expense</a></li>


                                                    </ul>

                                                </li>

                                                <li class="has_sub">
                                                    <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Orders </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="<?php echo e(route('pending.orders')); ?>">Pending Orders</a></li>
                                                        <li><a href="<?php echo e(route('success.orders')); ?>">Success Orders</a></li>

                                                    </ul>

                                                </li>

                                                <li class="has_sub">
                                                    <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Sales Report </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="<?php echo e(route('add.product')); ?>">First</a></li>
                                                        <li><a href="<?php echo e(route('all.product')); ?>">Second</a></li>

                                                    </ul>

                                                </li>

                                                <li class="has_sub">
                                                    <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Attendance </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="<?php echo e(route('take.attendance')); ?>">Take Attendance</a></li>
                                                        <li><a href="<?php echo e(route('all.attendance')); ?>">All Attendance</a></li>
                                                        <li><a href="#">Monthly Attendance</a></li>

                                                    </ul>

                                                </li>

                                                <li class="has_sub">
                                                    <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Manage Stock </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="<?php echo e(route('stock.report')); ?>">Stock Report</a></li>
                                                        <li><a href="<?php echo e(route('stock.report.supplier.product.wise')); ?>">Supplier/Product Wise</a></li>


                                                    </ul>

                                                </li>


                                                <li class="has_sub">
                                                    <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Setting </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="<?php echo e(route('setting')); ?>">Setting</a></li>



                                                    </ul>

                                                </li>



                                            </ul>

                                            <div class="clearfix"></div>
                                        </div>
                                            <div class="clearfix"></div>
                                    </div>

                                </div>


                                <!-- Left Sidebar End -->

                            <?php endif; ?>
                       </div>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>






    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->





    <script src="<?php echo e(asset('admin/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/waves.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/jquery.nicescroll.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('admin/js/jquery.scrollTo.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/chat/moment-2.2.1.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/jquery-sparkline/jquery.sparkline.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/jquery-detectmobile/detect.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/fastclick/fastclick.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/jquery-slimscroll/jquery.slimscroll.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/jquery-blockui/jquery.blockUI.js')); ?>"></script>

    <!-- sweet alerts -->
    <script src="<?php echo e(asset('admin/assets/sweet-alert/sweet-alert.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/sweet-alert/sweet-alert.init.js')); ?>"></script>

    <!-- flot Chart -->









    <!-- Counter-up -->
    <script src="<?php echo e(asset('admin/assets/counterup/waypoints.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('admin/assets/counterup/jquery.counterup.min.js')); ?>" type="text/javascript"></script>

    <!-- CUSTOM JS -->
    <script src="<?php echo e(asset('admin/js/jquery.app.js')); ?>"></script>

    <!-- Dashboard -->
    <script src="<?php echo e(asset('admin/js/jquery.dashboard.js')); ?>"></script>

    <!-- Chat -->


    <!-- Todo -->


        <script src="<?php echo e(asset('admin/assets/datatables/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/assets/datatables/dataTables.bootstrap.js')); ?>"></script>



        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>

    <script type="text/javascript">
        /* ==============================================
        Counter Up
        =============================================== */
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 100,
                time: 1200
            });
        });
    </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- jquery-validation -->
        <script src="<?php echo e(asset('admin/plugins/jquery-validation/jquery.validate.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/plugins/jquery-validation/additional-methods.min.js')); ?>"></script>

        <script>
            <?php if(Session::has('messege')): ?>
                 var type="<?php echo e(Session::get('alert-type','info')); ?>"
                switch (type){
                     case 'info':
                         toastr.info("<?php echo e(Session::get('messege')); ?>");
                         break;
                    case 'success':
                        toastr.success("<?php echo e(Session::get('messege')); ?>");
                        break;
                    case 'warning':
                        toastr.warning("<?php echo e(Session::get('messege')); ?>");
                        break;
                    case 'error':
                        toastr.error("<?php echo e(Session::get('messege')); ?>");
                        break;
                }
                <?php endif; ?>
        </script>



        <script>
            $(document).on("click", "#delete", function (e){
                e.preventDefault();
                var link = $(this).attr("href");
                    swal({
                        title:"Are you Want to delete?",
                        text: "Once Delete, This will be Permanently Delete!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete){
                            window.location.href = link;
                        } else {
                            swal("Safe Data!");
                        }
                    });
            });
        </script>



        <?php echo $__env->yieldPushContent('js'); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\test-inventory\inventory\inventoryLearnHunter\inventory_hunter\resources\views/layouts/app.blade.php ENDPATH**/ ?>