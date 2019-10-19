<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> <?php echo $__env->yieldContent('title'); ?> </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(url("")); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo e(url("")); ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo e(url("")); ?>/plugins//select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo e(url("")); ?>/plugins//select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(url("")); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo e(url("")); ?>/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(url("")); ?>/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo e(url("")); ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(url("")); ?>/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo e(url("")); ?>/plugins/summernote/summernote-bs4.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo e(url("")); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> Edit Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo e(url("")); ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">App Inventaris</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo e(url("")); ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Muhamad Rifky</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          
          <li class="nav-item">
            <a href="<?php echo e(url('')); ?>/ruangan" class="nav-link <?php if($alink=="ruangan"): ?> active <?php endif; ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>Kelola Ruangan</p>
            </a>
          </li>

          
          <li class="nav-item">
            <a href="<?php echo e(url('')); ?>/pegawai" class="nav-link <?php if($alink=="pegawai"): ?> active <?php endif; ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>Kelola Pegawai</p>
            </a>
          </li>
          
          
          <li class="nav-item">
            <a href="<?php echo e(url('')); ?>/barang" class="nav-link <?php if($alink=="barang"): ?> active <?php endif; ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>Kelola Barang</p>
            </a>
          </li>
          
          
          <li class="nav-item">
            <a href="<?php echo e(url('')); ?>/petugas" class="nav-link <?php if($alink=="petugas"): ?> active <?php endif; ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>Kelola Petugas</p>
            </a>
          </li>

          
          <li class="nav-item">
            <a href="<?php echo e(url('')); ?>/jenisbarang" class="nav-link <?php if($alink=="jenisbarang"): ?> active <?php endif; ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>Kelola Jenis Barang</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class='container-fluid pt-3'><!-- container-fluid -->

        <?php echo $__env->yieldContent('content'); ?>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-rc.3
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo e(url("")); ?>/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(url("")); ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
  </script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(url("")); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo e(url("")); ?>/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo e(url("")); ?>/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo e(url("")); ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo e(url("")); ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(url("")); ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo e(url("")); ?>/plugins/moment/moment.min.js"></script>
<script src="<?php echo e(url("")); ?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo e(url("")); ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Select2 -->
<script src="<?php echo e(url("")); ?>/plugins/select2/js/select2.full.min.js"></script>
<!-- Summernote -->
<script src="<?php echo e(url("")); ?>/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo e(url("")); ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- DataTables -->
<script src="<?php echo e(url("")); ?>/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo e(url("")); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(url("")); ?>/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(url("")); ?>/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(url("")); ?>/dist/js/demo.js"></script>
<!-- Custom Js -->
<script src="<?php echo e(url("")); ?>/dist/js/custom.js"></script>
</body>
</html>
<?php /**PATH D:\invetaris\resources\views/dashboard/main.blade.php ENDPATH**/ ?>