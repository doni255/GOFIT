<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    {{-- Google Font: Source Sans Pro --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    {{-- Font Awesome Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    {{-- Theme style --}}
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">


    {{-- Boostrap GLYPH --}}
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<script>
    function confirmLogout()
    {
        if(confirm("Are you sure want to logout?"))
        {
            document.getElementById('logout-form').submit();
        }
    }

    $('.alert .close').on('click', function () {
    // Perform additional actions here
    // ...
    
    // Hide the notification
    $(this).closest('.alert').hide();
});


</script>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        {{-- Navbar --}}
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            {{-- Left navbar Links --}}
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>
            
              {{-- Logout Navbar  --}}
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link"  href="{{ route('logout') }}" onclick="event.preventDefault(); confirmLogout();">
                        <i class="glyphicon glyphicon-log-out"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

                

                {{-- Navbar Search --}}
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block" style="width:50%; margin-top:50%;">
                        <form class="form-inline">
                            <div class="input-group input-group">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>

        {{-- /.navbar --}}
        {{-- Main Sidebar Container --}}
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            {{-- Brand Logo --}}
            <a href="{{ url('/admin') }}" class="brand-link">
                <img src=" {{ asset('css/gym.png') }}" alt="adminLTE Logo" class="logo" style="opacity: .8;">
                <span class="brand-text" style="font-weight: 1000;">
                    GO-FIT
                </span>
            </a>
            {{-- Sidebar --}}
            <div class="sidebar">
                {{-- Sidebar user panel (optional) --}}
                {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="{{ url('/') }}" class="d-block">Kasir</a>
                    </div>
                </div> --}}
                {{-- SidebarSearch Form --}}
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        
                        <span>
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            
                        </div>
                    </span>
                        
                    </div>
                </div>
             

                              {{-- Siderbar Menu Departemen --}}
                              <nav class="">
                                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"> 
                                    <li class="nav-item"> 
                                        <a href="{{ url('departemen') }}" class="nav-link"> 
                                            <i class="nav-icon far fa-circle"></i>
                                             <p> Departemen</p> 
                                            </a>
                                         </li>
                                         </ul>
                              </nav>

                              {{-- Sidebar Menu Pegawai --}}
                              <nav class="">
                                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                    <li class="nav-item">
                                        <a href="{{ url('pegawai') }}" class="nav-link">
                                            <i class="nav-icon far fa-circle"></i>
                                            <p> Pegawai</p>
                                        </a>
                                    </li>
                                </ul>
                              </nav>


                              {{-- Sidebar Menu Logout --}}
                              <nav class="">
                                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                         
                                </ul>
                              </nav>
                              
                              
                             
            </div>
            {{-- sidebar --}}
        </aside>
        {{-- Content Wrapper. Contains page content --}}
        <div class="content-wrapper">   
            <div class="text-center">
                <h2>
                    @if (Session::has('login-notification'))
                    <div class="alert alert-success">
                        {{ Session::get('login-notification') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                </h2>
            </div>

            @yield('content')
        </div>
        {{-- Content wrapper --}}
        {{-- Main Footer --}}
        <footer class="main-footer">
            {{-- To the right --}}
            <div class="float-right d-none d-sm-inline"> 200710771 </div>
              {{-- Default to the left --}}
    <strong>Copyright &copy; {{ date('Y') }} <a href="#">AdminLTE.io</a>. </strong> All rights reserved
        </footer>
    </div>
    {{-- wrapper --}}
    {{-- REQUIRED SCRIPTS --}}
    {{-- jQuery --}}
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    {{-- Boostrap 4 --}}
    <script src="{{  asset('plugins/js/bootstrap.bundle.min.js') 
    }}"></script>
    {{-- AdminLTE App --}}
    <script src="{{ asset('js/adminlte.min.js') }}"></script>

   
    
</body>
</html>


<style>

    .logo{
        width: 35%;
    }

</style>