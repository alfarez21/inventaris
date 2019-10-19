<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login | Inventaris</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(url('')); ?>/dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(url('')); ?>/plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page" style="background-size:cover;background-image: url(https://pixabay.com/get/54e0dc404d56a814f6d1867dda6d49214b6ac3e45656704d722f73d790/classroom-2093744_1920.jpg)">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <h3 class="login-box-msg">Login Area</h3>

      <form action="<?php echo e(url("")); ?>/login" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Username">
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
      </form>
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo e(url('')); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(url('')); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="<?php echo e(url('')); ?>/plugins/iCheck/icheck.min.js"></script>
</body>
</html><?php /**PATH D:\lks\invetaris\resources\views/login.blade.php ENDPATH**/ ?>