<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e(config('admin.title')); ?> | <?php echo e(trans('admin.login')); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo e(admin_asset("/vendor/laravel-admin/AdminLTE/bootstrap/css/bootstrap.min.css")); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(admin_asset("/vendor/laravel-admin/font-awesome/css/font-awesome.min.css")); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(admin_asset("/vendor/laravel-admin/AdminLTE/dist/css/AdminLTE.min.css")); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(admin_asset("/vendor/laravel-admin/AdminLTE/plugins/iCheck/square/blue.css")); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page" <?php if(config('admin.login_background_image')): ?>style="background: url(<?php echo e(config('admin.login_background_image')); ?>) no-repeat;background-size: cover;"<?php endif; ?>>
<div class="login-box">
    <div class="login-logo">
        <a href="<?php echo e(admin_base_path('/')); ?>"><b><?php echo e(config('admin.name')); ?></b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body" <?php if(config('admin.background')): ?> style="background:rgba(255,255,255,0);"<?php endif; ?>>
        <p class="login-box-msg"><?php echo e(trans('admin.login')); ?> </p>

        <form action="<?php echo e(admin_base_path('auth/login')); ?>" method="post">
            <div class="form-group has-feedback <?php echo !$errors->has('username') ?: 'has-error'; ?>">

                <?php if($errors->has('username')): ?>
                    <?php $__currentLoopData = $errors->get('username'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i><?php echo e($message); ?></label><br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <input type="input" class="form-control" <?php if(config('admin.background')): ?> style="background:rgba(255,255,255,0);"<?php endif; ?> placeholder="<?php echo e(trans('admin.username')); ?>" name="username" value="<?php echo e(old('username')); ?>">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback <?php echo !$errors->has('password') ?: 'has-error'; ?>">

                <?php if($errors->has('password')): ?>
                    <?php $__currentLoopData = $errors->get('password'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i><?php echo e($message); ?></label></br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <input type="password" class="form-control" <?php if(config('admin.background')): ?> style="background:rgba(255,255,255,0);"<?php endif; ?> placeholder="<?php echo e(trans('admin.password')); ?>" name="password" value="<?php echo e(old('username')); ?>">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="form-group has-feedback <?php echo !$errors->has('captcha') ?: 'has-error'; ?>">

                    <?php if($errors->has('captcha')): ?>
                        <?php $__currentLoopData = $errors->get('captcha'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <label class="control-label" for="inputError" style=" margin-left: 15px"><i class="fa fa-times-circle-o"></i><?php echo e($message); ?></label></br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                    <input type="text" class="form-control" style="display: inline;width: 55%; margin-left: 15px; <?php if(config('admin.background')): ?> background:rgba(255,255,255,0);<?php endif; ?>"  placeholder="<?php echo e(trans('admin.captcha')); ?>" name="captcha">
                    <span class="glyphicon glyphicon-refresh form-control-feedback captcha" style="right:39%;z-index: 100"></span>
                    <img  class="captcha" src="<?php echo e(captcha_src('admin')); ?>" onclick="refresh()">
                </div>
                <script>
                    function refresh(){
                        $('img[class="captcha"]').attr('src','<?php echo e(captcha_src('admin')); ?>'+Math.random());
                    }
                </script>
                <div class="row">

                    <!-- /.col -->
                    <div class="col-xs-4 col-md-offset-4">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <button type="submit" class="btn btn-primary btn-block btn-flat"><?php echo e(trans('admin.login')); ?></button>
                    </div>
                </div>
        </form>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.1.4 -->
<script src="<?php echo e(admin_asset("/vendor/laravel-admin/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js")); ?> "></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo e(admin_asset("/vendor/laravel-admin/AdminLTE/bootstrap/js/bootstrap.min.js")); ?>"></script>
<!-- iCheck -->
<script src="<?php echo e(admin_asset("/vendor/laravel-admin/AdminLTE/plugins/iCheck/icheck.min.js")); ?>"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
