<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('bower_components/morris.js/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
    
    <header class="main-header">
      <!-- Logo -->
      <a href="/dashboard" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Ad</b>min</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Dashboard</b>Admin</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
    
        <div class="navbar-custom-menu">
        
          <ul class="nav navbar-nav">
            <!-- Authentication Links -->
            
            @guest
              {{--  <li><a href="{{ route('cruds') }}">CRUD</a></li>  --}}
                <li><a href="{{ route('login') }}">Login</a></li>
                  <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                      <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                          {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
    
                        <ul class="dropdown-menu">
                          <li>
                            <a style="color:#000" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                              Logout
                            </a>
    
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                            </form>
                          </li>
                        </ul>
                      </li>
                    @endguest
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                  </button>
                </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
          <li>
            <a href="{{ url('dashboard') }}">
              <i class="fa fa-th"></i> <span>Dashboard</span>
              <!-- <span class="pull-right-container">
                <small class="label pull-right bg-green">new</small>
              </span> -->
            </a>
          </li>
    
          <li>
            <a href="{{ url('admin/blog/index') }}">
            {{-- <a href="#"> --}}
                <i class="fa fa-th"></i> <span>Blog</span>
              <!-- <span class="pull-right-container">
                <small class="label pull-right bg-green">new</small>
              </span> -->
            </a>
          </li>
          
          <li>
            <a href="{{ url('admin/eventproject/index') }}">
              <i class="fa fa-th"></i> <span>Event/Project</span>
              <!-- <span class="pull-right-container">
                <small class="label pull-right bg-green">new</small>
              </span> -->
            </a>
          </li>
    
          <li>
            <a href="{{ url('admin/campaign/index') }}">
              <i class="fa fa-th"></i> <span>Campaign</span>
              <!-- <span class="pull-right-container">
                <small class="label pull-right bg-green">new</small>
              </span> -->
            </a>
          </li>
    
  
          {{-- <li>
            <a href="{{ url('admin/testimoni') }}">
              <i class="fa fa-th"></i> <span>Testimoni</span>
              <!-- <span class="pull-right-container">
                <small class="label pull-right bg-green">new</small>
              </span> -->
            </a>
          </li> --}}
          
          {{-- <li>
            <a href="{{ url('admin/achievement') }}">
              <i class="fa fa-th"></i> <span>Achievement</span>
              <!-- <span class="pull-right-container">
                <small class="label pull-right bg-green">new</small>
              </span> -->
            </a>
          </li> --}}
          
          {{-- <li>
            <a href="{{ url('admin/kehadiran') }}">
              <i class="fa fa-th"></i> <span>Kehadiran Event</span>
              <!-- <span class="pull-right-container">
                <small class="label pull-right bg-green">new</small>
              </span> -->
            </a>
          </li> --}}
    
      </section>
      <!-- /.sidebar -->
    </aside>
    
    