
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

  <title>@yield('title')</title>

  <!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  
<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    
      <span class="brand-text font-weight-light">Constructor</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{asset('/profile/'. Auth::User()->image)}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <p class="text-warning font-weight-bolder">{{Auth::User()->name}}</p>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">

        
        <ul class="nav nav-sidebar flex-column">
          <li class="nav-item">
          <a href="{{url('admin/')}}" class="nav-link">
            <i class="fas fa-tachometer-alt text-warning pr-2"></i>
              <p>Admin Dashboard</p>
            </a>
          </li>
        </ul>


        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            

              
          <li class="nav-item has-treeview menu-open">
          <a href="" class="nav-link ">
              <i class="fas fa-user-tie text-warning"></i>&nbsp;
              <p>
                Admin Control
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('isAdmin')
              <li class="nav-item">
              <a href="{{url('admin/user')}}" class="nav-link ">
                  <i class="fas fa-users-cog text-warning"></i>&nbsp;
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{url('admin/role')}}" class="nav-link ">
                  <i class="fas fa-align-justify text-warning"></i>&nbsp;
                  <p>Role</p>
                </a>
              </li>
              @endcan


              @can('isAdminOrCon')
              <li class="nav-item">
              <a href="{{url('admin/category')}}" class="nav-link">
                <i class="fas fa-clipboard-list text-warning"></i>&nbsp;
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{url('admin/project')}}" class="nav-link">
                <i class="fas fa-home text-warning"></i>&nbsp;
                  <p>Project</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{url('admin/service')}}" class="nav-link">
                  <i class="fas fa-tools text-warning"></i>&nbsp;
                    <p>Service</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{url('admin/blog')}}" class="nav-link">
                    <i class="fab fa-blogger text-warning"></i>&nbsp;
                      <p>Blog</p>
                    </a>
                  </li>

                @endcan

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-user text-info"></i>&nbsp;
              <p>Profile</p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{url('logout')}}" class="nav-link">
              <div class="fas fa-power-off text-danger "></div>&nbsp;
             <p> logout</p>
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      @yield('content')
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">

    <div class="col-md-12">
      <div class="fa fa-copyright">
      </div>
      Powered by HNL Bla Bla Bla
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
{{-- <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script> --}}


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>

<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>
