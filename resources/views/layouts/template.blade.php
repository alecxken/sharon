<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>LETS TRADE</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
 @include('layouts.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="Lets Trade" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Lets Trade</span>
    </a>

    <!-- Sidebar -->
    @include('layouts.side')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

       <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   @if (session('status'))
        <div id="erros" class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4>Alert!</h4>

        <p> {{ session('status') }}</p>
      </div>
@elseif(session('error'))
<div id="erros" class="alert alert-warning alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4>Warning!</h4>

        <p> {{ session('error') }}</p>
      </div>
@elseif(session('danger'))
<div id="erros" class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4>Warning!</h4>

              <p> {{ session('danger') }}</p>
            </div>
@elseif(session('primary'))
<div id="erros" class="alert alert-primary alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4>Warning!</h4>

              <p> {{ session('primary') }}</p>
            </div>

@endif
@if ($errors->any())
    <div id="erros" class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4>Input Fields Error!!</h4>
             @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </div>
@endif
    <!-- Main content -->
    <div class="content">
    
   @yield('content')
 </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
   <!--  <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div> -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Sharon Copyright &copy; {{date('Y')}}  All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>
