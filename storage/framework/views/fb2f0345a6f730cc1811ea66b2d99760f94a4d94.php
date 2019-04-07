<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Metro Lab</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="Mosaddek" name="author" />
    <link href="<?php echo e(asset('admin/assets/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('admin/assets/bootstrap/css/bootstrap-responsive.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('admin/assets/bootstrap/css/bootstrap-fileupload.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('admin/assets/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('admin/css/style.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('admin/css/style-responsive.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('admin/css/style-default.css')); ?>" rel="stylesheet" id="style_color" />
    <link href="<?php echo e(asset('admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')); ?>" rel="stylesheet" type="text/css" media="screen"/>

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
<!-- BEGIN HEADER -->
<div id="header" class="navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="container-fluid">
            <!--BEGIN SIDEBAR TOGGLE-->
            <div class="sidebar-toggle-box hidden-phone">
                <div class="icon-reorder"></div>
            </div>
            <!--END SIDEBAR TOGGLE-->
            <!-- BEGIN LOGO -->
            <a class="brand" href="<?php echo e(url('/dashboard')); ?>">
                <img src="<?php echo e(asset('admin/img/logo.png')); ?>" alt="Metro Lab" />
            </a>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="arrow"></span>
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->


            <div class="top-nav ">
                <ul class="nav pull-right top-menu" >
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo e(asset('admin/img/avatar1_small.jpg')); ?>" alt="">
                            <span class="username">Jhon Doe</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="icon-cog"></i> My Settings</a></li>
                            <li><a href="<?php echo e(url('/login')); ?>"><i class="icon-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
                <!-- END TOP NAVIGATION MENU -->
            </div>
        </div>
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div id="container" class="row-fluid">
    <!-- BEGIN SIDEBAR -->
    <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <ul class="sidebar-menu">
                <li class="sub-menu active">
                    <a class="" href="index.html">
                        <i class="icon-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span>UI Elements</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="general.html">General</a></li>
                        <li><a class="" href="button.html">Buttons</a></li>
                        <li><a class="" href="slider.html">Sliders</a></li>
                        <li><a class="" href="metro_view.html">Metro View</a></li>
                        <li><a class="" href="tabs_accordion.html">Tabs & Accordions</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-cogs"></i>
                        <span>Components</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="calendar.html">Calendar</a></li>
                        <li><a class="" href="grids.html">Grids</a></li>
                        <li><a class="" href="chartjs.html">Chart Js</a></li>
                        <li><a class="" href="flot_chart.html">Flot Charts</a></li>
                        <li><a class="" href="gallery.html"> Gallery</a></li>
                    </ul>
                </li>
                <li>
                    <a class="" href="<?php echo e(url('/login')); ?>">
                        <i class="icon-user"></i>
                        <span>Login Page</span>
                    </a>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN PAGE -->
    <div id="main-content">
        <!-- BEGIN PAGE CONTAINER-->
        <div class="container-fluid">
        <?php echo $__env->yieldContent('main_content'); ?>
        </div>
        <!-- END PAGE CONTAINER-->
    </div>
    <!-- END PAGE -->
</div>
<!-- END CONTAINER -->

<!-- BEGIN FOOTER -->
<div id="footer">
    2013 &copy; Metro Lab Dashboard.
</div>
<!-- END FOOTER -->

<!-- BEGIN JAVASCRIPTS -->
<!-- Load javascripts at bottom, this will reduce page load time -->
<script src="<?php echo e(asset('admin/js/jquery-1.8.3.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/jquery.nicescroll.js')); ?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo e(asset('admin/assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('admin/assets/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/assets/fullcalendar/fullcalendar/fullcalendar.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/assets/bootstrap/js/bootstrap.min.js')); ?>"></script>

<!-- ie8 fixes -->
<!--[if lt IE 9]>
<script src="<?php echo e(asset('admin/js/excanvas.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/respond.js')); ?>"></script>
<![endif]-->

<script src="<?php echo e(asset('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('admin/js/jquery.sparkline.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('admin/assets/chart-master/Chart.js')); ?>"></script>

<!--common script for all pages-->
<script src="<?php echo e(asset('admin/js/common-scripts.js')); ?>"></script>

<!--script for this page only-->

<script src="<?php echo e(asset('admin/js/easy-pie-chart.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/sparkline-chart.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/home-page-calender.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/chartjs.js')); ?>"></script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
