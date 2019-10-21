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
  <link rel="stylesheet" href="{{url('')}}/dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{url('')}}/plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page" style="background-size:cover;background-image: url(https://pixabay.com/get/54e0dc404d56a814f6d1867dda6d49214b6ac3e45656704d722f73d790/classroom-2093744_1920.jpg)">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <h3 class="login-box-msg">Login Area</h3>

      <form action="{{ url("")}}/login" method="post">
        @csrf
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="username" placeholder="Username" value="{{ old('username') }}">
          @error('username')<span class="small muted text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password" placeholder="Password" value="{{ old('password') }}">
          @error('password')<span class="small muted text-danger">{{ $message }}</span>@enderror
        </div>
        <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        @if (session('status'))
          <div class="alert alert-danger mt-3">
              {{ session('status') }}
          </div>
        @endif
      </form>
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{url('')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="{{url('')}}/plugins/iCheck/icheck.min.js"></script>
</body>
</html>