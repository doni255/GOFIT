<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    {{-- Google Font: Source Sans Pro --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400,400i,700&display=fallback">
    {{-- Font Awesome Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    {{-- Theme style --}}
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">


    {{-- Boostrap GLYPH --}}
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/4.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.7/js/bootstrap.min.js"></script>

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
                {{-- <div class="user-panel mt-4 pb-4 mb-4 d-flex">
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

                <div class="content-header">
                    <div class="container-xl">
                        <div class="row">
                            <div class="col-sm-6">
                                {{-- <h3 class="m-0">Starter Page</h3> --}}
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="content ">
                    <div class="card" style="background-color:rgb(0, 200, 255);">
                        <div class="container-fluid" style="background-color:white; margin-top:5px;">                          
                                <h4 style="font-weight:500;">Edit Data Pegawai</h4>                       
                        </div>
                        <div class="container-fluid bg-white f-red" style="margin-top:-10px'">
                            <hr>
                        
                            <div class="container-fluid mb-3">
                               {{-- <form action="/edit/{{ $item->id }}" method="POST"> --}}
                                <form action="{{ route('pegawai.update', $item->id) }}" method="POST">


                                @method('PUT')
                                @csrf

                                {{ csrf_field() }}

                                {{-- @csrf
                                @method('PUT') --}}

                                <input type="text" id="nama_pegawai" name="nama_pegawai"  class="form-control mb-4" value="{{ $item->nama_pegawai }}">
                                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control mb-4" value="{{ $item->tanggal_lahir }}">
                                <input type="email" id="email" name="email" class="form-control mb-4" value="{{ $item->email }}">
                                <input type="text" id="nomor_telepon" name="nomor_telepon" class="form-control mb-4" value="{{ $item->nomor_telepon }}">
                                <input type="text" id="role" name="role" class="form-control mb-3" value="{{ $item->role }}">

                                <button class="btn btn-primary" type="submit">Change The Data</button>
                                &nbsp;&nbsp;
                                <a href="{{ route('cancel') }}" class="btn btn-danger">Cancel</a>

                                
                              
                               </form>
                            
                              
                            </div>
                           
                                
                          
                           
                        </div>
                    </div>
                </div>
                
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
        width: 45%;
    }

</style>