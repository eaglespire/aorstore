<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>{{ config('app.name') }} - Admin Dashboard  | Eaglespire Technologies</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="/assets/images/favicon.ico">


    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
@include('sweetalert::alert')
<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="/" class="logo">
                        <span class="logo-light">
                            <img src="/assets/images/logo-light.png" alt="" height="16">
                        </span>
                <span class="logo-sm">
                    <img src="/assets/images/logo-sm.png" alt="" height="22">
                </span>
            </a>
        </div>

        @include('partials.nav')

    </div>
    <!-- Top Bar End -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="slimscroll-menu" id="remove-scroll">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
               @include('partials.main_menu')
            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content dasboard-content">
            <div class="container-fluid">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <h4 class="page-title">@yield('page-title')</h4>
                            <ol class="breadcrumb">
                                <!-- <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="mdi mdi-home-outline"></i></a></li> -->
                                <li class="breadcrumb-item active">@yield('page-breadcrumb')</li>
                            </ol>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-right d-none d-md-block">
                                <div class="dropdown">
                                    <a href="@yield('link', '')" class="btn btn-primary  arrow-none waves-effect waves-light" >
                                        <i class="mdi mdi-settings mr-2"></i> @yield('linkText','')
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end row -->
                </div>
                <!-- end page-title -->
                @include('partials.messages')
                @yield('content')
            </div>
            <!-- container-fluid -->

        </div>
        <!-- content -->

        <footer class="footer">
            © 2019 Veltrix <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>.
        </footer>

    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

<div class="right-sidebar d-none d-xl-block">
    <div class="slimscroll-menu">
        <div class="px-4 pt-4">
            <div class="card user-wid text-center overflow-hidden">
                <div class="p-4 bg-lighten-danger"></div>
                <div class="mx-3">
                    <div class="bg-white user-wid-content p-1 rounded">
                        <div class="user-img">
                            <img src="assets/images/users/user-1.jpg" alt="user-img" title="" class="rounded-circle thumb-md img-fluid">
                        </div>
                        <h5 class="font-14 mb-1"><a href="javascript: void(0);">James Heine</a> </h5>
                        <p class="text-muted mb-2"><small>Admin Head</small></p>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <h5 class="font-14">Calender</h5>

                <div class="dashboard-date-pick" id="date-pick-widget" data-provide="datepicker-inline"></div>
            </div>

            <div>
                <h5 class="font-14">Clients</h5>

                <div id="world-map-markers" class="dashboard-map-wid"></div>
            </div>

        </div>
    </div>
</div>

<!-- jQuery  -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/metismenu.min.js"></script>
<script src="/assets/js/jquery.slimscroll.js"></script>


<!-- App js -->
<script src="/assets/js/app.js"></script>
@stack('scripts')
</body>

</html>
