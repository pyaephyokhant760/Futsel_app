<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Futsel Project</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">


    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- dataTable --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">


</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
            <a href="{{ route('language.change', ['lang' => 'en']) }}">Elglish</a>
            <span>|</span>
            <a href="{{ route('language.change', ['lang' => 'mm']) }}">Myanmar</a>
        </nav>




        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Futsel Project</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="{{ route('admin.index') }}"
                                class="nav-link @if (url()->current() == route('admin.index')) active @endif">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    {{ __('message.home') }}
                                </p>
                            </a>
                        </li>
                        @can('league-list')
                            <li class="nav-item">
                                <a href="{{ route('leagues.index') }}"
                                    class="nav-link  @if (Route::is('leagues.index') || Route::is('leagues.create') || Route::is('leagues.edit')) active @endif">
                                    <i class="fa-solid fa-baseball"></i>
                                    <p>
                                        {{ __('message.league') }}
                                    </p>
                                </a>
                            </li>
                        @endcan

                        @can('coach-list')
                            <li class="nav-item">
                                <a href="{{ route('coachs.index') }}"
                                    class="nav-link  @if (Route::is('coachs.index') || Route::is('coachs.create') || Route::is('coachs.edit')) active @endif">
                                    <i class="fa-solid fa-person"></i>
                                    <p>
                                        {{ __('message.coach') }}
                                    </p>
                                </a>
                            </li>
                        @endcan
                        @can('player-list')
                            <li class="nav-item">
                                <a href="{{ route('players.index') }}"
                                    class="nav-link  @if (Route::is('players.index') || Route::is('players.create') || Route::is('players.edit')) active @endif">
                                    <i class="fa-solid fa-user"></i>
                                    <p>
                                        {{ __('message.player') }}
                                    </p>
                                </a>
                            </li>
                        @endcan
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    {{ __('message.match') }}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa-solid fa-people-group"></i>
                                <p>
                                    {{ __('message.team') }}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa-solid fa-bullseye"></i>
                                <p>
                                    {{ __('message.goal') }}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa-solid fa-bullseye"></i>
                                <p>
                                    {{ __('message.news') }}
                                </p>
                            </a>
                        </li>
                    </ul>
                    </li>
                    </ul>
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
                <div class="container-fluid">
                    <div class="row mb-2">

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            @yield('contact')
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

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                <a href="{{ route('logout.post') }}" type="button" class="btn btn-default">Logout</a>
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2020 <a href="#">A Programmer</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    {{-- fontAweSome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js"
        integrity="sha512-7dlzSK4Ulfm85ypS8/ya0xLf3NpXiML3s6HTLu4qDq7WiJWtLLyrXb9putdP3/1umwTmzIvhuu9EW7gHYSVtCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jQuery -->
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> --}}
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-JobWAqYk5CSjWuVV3mxgS+MmccJqkrBaDhk8SKS1BW+71dJ9gzascwzW85UwGhxiSyR7Pxhu50k+Nl3+o5I49A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap 5 -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>

    {{-- sweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Load jQuery first -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Then DataTables -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

    <script>
        let token = document.head.querySelector('meta[name="csrf-token"]');
        if (token) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': token.content
                }
            });
        } else {
            console.error('CSRF Token not found.');
        }
    </script>



    @yield('script')
</body>


</html>
