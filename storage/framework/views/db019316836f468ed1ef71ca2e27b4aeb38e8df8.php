<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="<?php echo e(asset('admin/assets/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('admin/assets/bootstrap/css/bootstrap-responsive.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('admin/assets/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('admin/css/style.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('admin/css/style-responsive.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('admin/css/style-default.css')); ?>" rel="stylesheet" id="style_color" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="lock">
<div class="lock-header">
    <!-- BEGIN LOGO -->
    <a class="center" id="logo" href="<?php echo e(url('/')); ?>" style="text-decoration: none">
       <h1 class="text-center">Restaurant Management System </h1>
    </a>
    <!-- END LOGO -->
</div>
<div class="login-wrap">
    <div class="metro single-size red">
        <div class="locked">
            <i class="icon-lock"></i>
            <span>Login</span>
        </div>
    </div>
    <form action="<?php echo e(route('login')); ?>" method="POST">
        <?php echo e(csrf_field()); ?>

        <div class="metro double-size green">

            <div class="input-append lock-input">
                <input type="email" class="" placeholder="Enter Email" name="email" required>
            </div>
        </div>
        <div class="metro double-size yellow">

            <div class="input-append lock-input">
                <input type="password" class="" placeholder="Password" name="password" required>
            </div>
        </div>
        <div class="metro single-size terques login">

            <button type="submit" class="btn login-btn">
                Login
                <i class=" icon-long-arrow-right"></i>
            </button>

        </div>
    </form>
    <div class="login-footer">
        <div class="remember-hint pull-left">
            <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
        </div>
        <div class="forgot-hint pull-right">
            <a id="forget-password" class="" href="<?php echo e(route('password.request')); ?>">Forgot Password?</a>
        </div>
    </div>
</div>
</body>
<!-- END BODY -->
</html>
