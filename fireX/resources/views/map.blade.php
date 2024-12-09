<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>FireX | Live Feeds</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap css -->
        <link href="backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link
            href="backend/assets/css/app.min.css"
            rel="stylesheet"
            type="text/css"
            id="app-style"
        >
        <!-- icons -->
        <link href="backend/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- Head js -->
        <script src="backend/assets/js/head.js"></script>
        
    </head>

    <!-- body start -->
    <body data-layout-mode="default" data-theme="light" data-topbar-color="light" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='light' data-sidebar-user='false'>

        <!-- Begin page -->
        <div id="wrapper">
            <!-- Topbar Start -->
            <div class="navbar-custom">
            <div class="container-fluid">
                     <ul class="list-unstyled topnav-menu float-end mb-0">

                        <li class="dropdown d-none d-lg-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                                <i class="fe-maximize noti-icon"></i>
                            </a>
                        </li>
                
                        <li class="topbar-item">
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="nav-link me-0 waves-effect waves-light border-0 bg-transparent p-0 d-flex align-items-center">
                            <i class="fe-log-out me-2" style="font-size: 16; color: #f44336;"></i>
                            <span style="color: #f44336; font-weight: bold;">Logout</span>
                        </button>
                    </form>
                </li>

                    </ul>
                   
                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="/dashboard"  class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="backend/assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="backend/assets/images/firex-logo-vector.png" alt="" height="20">
                            </span>
                        </a>
                        <a href="/dashboard"  class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="backend/assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="backend/assets/images/logo-light.png" alt="" height="20">
                            </span>
                        </a>
                    </div>
                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect waves-light">
                                <i class="fe-menu"></i>
                            </button>
                        </li>
                        <li>
                            <!-- Mobile menu toggle (Horizontal Layout)-->
                            <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                </div>
        </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">
                <div class="h-100" data-simplebar>
                   
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul id="side-menu">
                            <li class="menu-title">Navigation</li>
                            <li>
                                <a href="{{ route('dashboard') }}">
                                    <i class="mdi mdi-view-dashboard-outline"></i>
                                    <span> Dashboard</span>
                                </a>
                            </li>
                            <li class="menu-title mt-2">Features</li>
                            <li>
                                <a href="{{ route('live.feeds') }}" class="{{ request()->routeIs('live.feeds') ? 'active' : '' }}">
                                    <span class="mdi mdi-cctv"></span>
                                    <span> Live Feeds</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('map') }}" class="{{ request()->routeIs('map') ? 'active' : '' }}">
                                    <span class="mdi mdi-map"></span>
                                    <span> Feeds in Map</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Sidebar -->
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                        <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">FireX</a></li>
                                            <li class="breadcrumb-item"><a href="{{ route('map') }}">Feeds in</a></li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Live Feeds</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                                    <div class="row" style="height: 100vh; margin: 0;">
                <div class="col-lg-12" style="height: 100%; padding: 0;">
                    <div class="card" style="height: 100%; margin: 0; border: none;">
                        <div class="card-body" style="height: 100%; padding: 0;">
                            <!-- Remove the header title if not needed -->
                            <h4 class="header-title mb-3" style="display: none;">Basic</h4>
                            <div id="gmaps-basic" class="gmaps" style="height: 100%; width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>

                        <!-- end row -->
                      
                        <!-- end row-->
                    </div> 

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; <span style="color: red;">FireX</span>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-sm-block">
                                    <a href="https://github.com/AymaneHassini/FireX.git">About Us</a>
                                    <a href="https://github.com/AymaneHassini/FireX.git">Help</a>
                                    <a href="https://github.com/AymaneHassini/FireX.git">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="backend/assets/js/vendor.min.js" defer></script>

        <!-- google maps api -->
        <script
            src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}" defer
         ></script>
        <!-- gmap js-->
        <script src="backend/assets/libs/gmaps/gmaps.min.js"></script>

        <!-- Init js-->
        <script src="backend/assets/js/pages/google-maps.init.js"></script>
        <!-- GMaps Library -->
<script src="backend/assets/libs/gmaps/gmaps.min.js" defer></script>

<!-- Map Initialization -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
    // Initialize the map
    var map = new GMaps({
        el: '#gmaps-basic',
        lat: 33.4817352473167, // Center latitude
        lng: -5.1447216303132794, // Center longitude
        zoom: 12 // Adjust zoom level as needed
    });

    // Retrieve all feed data from localStorage
    Object.keys(localStorage).forEach((key) => {
        const feedDetails = JSON.parse(localStorage.getItem(key));

        if (feedDetails && feedDetails.lat && feedDetails.lng) {
            map.addMarker({
                lat: parseFloat(feedDetails.lat),
                lng: parseFloat(feedDetails.lng),
                title: feedDetails.title || 'Custom Marker',
                icon: {
                    url: '/backend/assets/libs/iconsvg/cctv.svg',
                    scaledSize: new google.maps.Size(40, 40) // Adjust size
                },
                infoWindow: {
                    content: `<p>${feedDetails.title || 'Feed'}</p>` // Customize content
                }
            });
        }
    });
});

</script>


        <!-- App js -->
        <script src="backend/assets/js/app.min.js"></script>
        
    </body>
</html>