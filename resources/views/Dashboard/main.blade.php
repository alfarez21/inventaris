<?php $level = Session::get('level') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> @yield('title') </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url("") }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ url("") }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ url("") }}/plugins//select2/css/select2.min.css">
  <link rel="stylesheet" href="{{ url("") }}/plugins//select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url("") }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ url("") }}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url("") }}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url("") }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url("") }}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ url("") }}/plugins/summernote/summernote-bs4.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ url("") }}/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
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
          <a href="{{url("logout")}}" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i> Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-center">
      <span class="brand-text font-weight-light"><strong>App Inventaris</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url("") }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Session::get("nama")}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          

          {{-- Kelola Ruangan --}}
          <li class="nav-item">
            <a href="{{ url('') }}" class="nav-link @if($alink=="beranda") active @endif">
              <i class="nav-icon fas fa-home"></i>
              <p>Beranda</p>
            </a>
          </li>

          @if($level==1)
          <li class="nav-item">
            <a href="{{ url('') }}/ruangan" class="nav-link @if($alink=="ruangan") active @endif">
              <i class="nav-icon fas fa-hospital"></i>
              <p>Kelola Ruangan</p>
            </a>
          </li>
          @endif

          @if($level==1)
          {{-- Kelola Pagawai --}}
          <li class="nav-item">
            <a href="{{ url('') }}/pegawai" class="nav-link @if($alink=="pegawai") active @endif">
              <i class="nav-icon fas fa-users"></i>
              <p>Kelola Pegawai</p>
            </a>
          </li>
          @endif

          @if($level==1)          
          {{-- Kelola Barang --}}
          <li class="nav-item">
            <a href="{{ url('') }}/barang" class="nav-link @if($alink=="barang") active @endif">
              <i class="nav-icon fas fa-boxes"></i>
              <p>Kelola Barang</p>
            </a>
          </li>
          @endif

          @if($level==1)
          {{-- Kelola Petugas --}}
          <li class="nav-item">
            <a href="{{ url('') }}/petugas" class="nav-link @if($alink=="petugas") active @endif">
              <i class="nav-icon fas fa-users"></i>
              <p>Kelola Petugas</p>
            </a>
          </li>
          @endif

          @if($level==1)
          {{-- Kelola Jenis Barang --}}
          <li class="nav-item">
            <a href="{{ url('') }}/jenisbarang" class="nav-link @if($alink=="jenisbarang") active @endif">
              <i class="nav-icon fas fa-th"></i>
              <p>Kelola Jenis Barang</p>
            </a>
          </li>
          @endif

          @if($level==1 || $level==2)
          {{-- Kelola Jenis Barang --}}
          <li class="nav-item">
            <a href="{{ url('') }}/peminjaman" class="nav-link @if($alink=="peminjaman") active @endif">
              <i class="nav-icon fas fa-th"></i>
              <p>Peminjaman</p>
            </a>
          </li>
          @endif


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

        @yield('content')

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
<script src="{{ url("") }}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url("") }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
  </script>
<!-- Bootstrap 4 -->
<script src="{{ url("") }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ url("") }}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ url("") }}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ url("") }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ url("") }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ url("") }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ url("") }}/plugins/moment/moment.min.js"></script>
<script src="{{ url("") }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ url("") }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Select2 -->
<script src="{{ url("") }}/plugins/select2/js/select2.full.min.js"></script>
<!-- Summernote -->
<script src="{{ url("") }}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ url("") }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- DataTables -->
<script src="{{ url("") }}/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{ url("") }}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="{{ url("") }}/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url("") }}/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url("") }}/dist/js/demo.js"></script>
<!-- Custom Js -->
<script src="{{ url("") }}/dist/js/custom.js"></script>
</body>
</html>
