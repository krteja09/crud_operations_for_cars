<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Orbiter is a bootstrap minimal & clean admin template">
        <meta name="keywords" content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
        <meta name="author" content="Themesbox">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> @yield('title') </title>
        <!-- Fevicon -->
        <link rel="shortcut icon" href="{{ asset('assets/dashboard/images/favicon.ico') }}">
        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
        <!-- Start CSS -->   
        @yield('style')
        <link href="{{ asset('assets/dashboard/plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/dashboard/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/dashboard/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/dashboard/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
        

		<link href="{{ asset('assets/dashboard/css/style.css') }}" rel="stylesheet" type="text/css">

        <link href="{{ asset('assets/dashboard/css/main.css') }}" rel="stylesheet" type="text/css">

        <!-- End CSS -->
    </head>
    <body class="vertical-layout">
        <!-- Start Infobar Setting Sidebar -->
        <div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                <h4>Notifications setting</h4><a href="javascript:void(0)" id="infobar-settings-close" class="infobar-settings-close"><img src="assets/dashboard/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
            </div>
            <div class="infobar-settings-sidebar-body">
                <div class="custom-mode-setting">
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">New Customers notifictaion</h6></div>

                        <div class="col-4 text-left"><input type="checkbox" class="js-switch-setting-first" checked /></div>

                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Out of stock reminder</h6></div>

                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-first" checked /></div>

                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">New order notification</h6></div>

                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-first" checked /></div>

                    </div>
                </div>
            </div>
        </div>
        <div class="infobar-settings-sidebar-overlay"></div>
        <!-- End Infobar Setting Sidebar -->
        <!-- Start Containerbar -->
        <div id="containerbar">     
            <!-- Start Leftbar -->
            @include('layouts.sideMenu')
            <!-- End Leftbar -->
            <!-- Start Rightbar -->
            @include('layouts.notificationsMenu')
            @yield('content')
            <!-- End Rightbar --> 
        </div>
        

        <!-- End Containerbar -->
        <!-- Start JS -->        
        <script src="{{ asset('assets/dashboard/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/detect.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/vertical-menu.js') }}"></script> 
        <script src="{{ asset('assets/dashboard/plugins/switchery/switchery.min.js') }}"></script> 
        <!-- Core JS -->
        <script src="{{ asset('assets/dashboard/js/core.js') }}"></script>


        <!-- End JS -->
        @yield('script')
        


    </body>
</html>    
