<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beranda</title>
  <link rel="icon" href="https://eclass.ukdw.ac.id/images/favicon.png" type="image/png" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('style/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('style/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="https://www.ukdw.ac.id/wp-content/uploads/2017/10/logo-ukdw.png" alt="Logo" height="80" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="home" class="navbar-brand">
        <img src="https://www.ukdw.ac.id/wp-content/uploads/2017/10/logo-ukdw.png" alt="UKDW" class="brand-image elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Pendaftaran Asisten</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--div class="collapse navbar-collapse order-3" id="navbarCollapse"-->
        <!-- Left navbar links -->
        <!--ul class="navbar-nav">
          <li class="nav-item">
            <a href="home" class="nav-link">Beranda</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Pengumuman</a>
          </li>
        </ul>
      </div-->

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <p class="fas fa-user mr-2"></p><b>{{ Auth::user()->name }}</b>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="{{ route('logout') }}" class="dropdown-item">
            <i class="fas fa-power-off mr-2"></i><p class="float-right"> Log Out</p>
          </a>
        </div>
      </li>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

    @yield('content')
    @include('sweetalert::alert')
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <!--div class="float-right d-none d-sm-inline">
      Anything you want
    </div-->
    <!-- Default to the left -->
    <strong>Hak Cipta &copy; 2022 <a href="#">SPK OYE</a>.</strong> Seluruh hak cipta.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('style/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('style/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('style/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('style/dist/js/demo.js') }}"></script>
</body>
</html>