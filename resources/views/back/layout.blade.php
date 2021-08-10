<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>PortPark</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('admin/dist/css/custom.css')}}">

  @yield('import')

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('home')}}" class="nav-link">Accueil</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Recherche" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
      <img src="{{asset('admin/dist/img/avata')}}" alt="AdminLTE Logo" class="brand-image  elevation-1"
           style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          
            <li class="nav-item">
              <a  class="nav-link" href="{{route('home')}}">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Accueil
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-list-alt"></i>
                <p>
                  Clients
                </p>
                <i class="right fas fa-angle-left"></i>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="{{route('clients')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                     <p>All</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>In</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>En attente</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a  class="nav-link" href="{{route('blocks')}}">
                <i class="nav-icon fas fa-sliders-h"></i>
                <p>
                  Block
                </p>
              </a>
              
            </li>
            <li class="nav-item">
              <a  class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Facture
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a  class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Places
                </p>
              </a>
            </li>
            
            <li class="nav-item">
              <a  class="nav-link">
                <i class="nav-icon fas fa-list-alt"></i>
                <p>
                  Reservations
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a  class="nav-link"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Déconnexion
                </p>
              </a>
              <form id="logout-form" class="d-none" action="" method="POST" >
                @csrf
              </form>
            </li>
        </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="container-fluid">

      @if($message = Session::get('success'))
	      <div class="alert alert-success alert-block">
		      <button type="button" class="close" data-dismiss="alert">×</button>
		      <strong>{{ $message }}</strong>
	      </div>
      @endif
	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

       @yield('content')
    </div>
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Admin Panel - Port de annaba
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021 Ithrytec.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js')}}"></script>

@yield('script')

</body>
</html>
