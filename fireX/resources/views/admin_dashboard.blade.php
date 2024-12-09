<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dashboard  | FireX App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        <link href="backend/assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- Head js -->
        <script src="backend/assets/js/head.js"></script>

    </head>
    <!-- body start -->
    <body
        data-layout-mode="default"
        data-theme="light"
        data-topbar-color="light"
        data-menu-position="fixed"
        data-leftbar-color="light"
        data-leftbar-size="default"
        data-sidebar-user="false"
    >
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
                                    <div class="page-title-right d-flex align-items-center">
                                        <button id="reset-button" class="btn btn-sm btn-primary me-3">Reset Alerts</button>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">FireX</a></li>
                                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Live Feeds</a></li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                        <div class="col-md-6 col-xl-3 d-flex justify-content-center align-items-center">
                            <div class="card" id="tooltip-container"
                                style="width: 400px; height: 200px; margin: 10px auto; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center" style="text-align: center;">
                                    <h4 class="mt-0 font-20">Active Cameras</h4>
                                    <div class="d-flex justify-content-center align-items-center" style="flex: 1;">
                                        <h2 class="text-primary my-3 m-0" style="font-size: 80px;">
                                            <span data-plugin="counterup">0</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3 d-flex justify-content-center align-items-center">
                            <div class="card" id="tooltip-container"
                                style="width: 400px; height: 200px; margin: 10px auto; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center" style="text-align: center;">
                                    <h4 class="mt-0 font-20">Number of Alerts</h4>
                                    <div class="d-flex justify-content-center align-items-center" style="flex: 1;">
                                        <h2 class="text-primary my-3 m-0" style="font-size: 80px;">
                                            <span id="total-alerts" data-plugin="counterup">0</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 d-flex justify-content-center align-items-center">
                            <div class="card" id="tooltip-container"
                                style="width: 400px; height: 200px; margin: 10px auto; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center" style="text-align: center;">
                                    <h4 class="mt-0 font-20">Number of False Positives</h4>
                                    <div class="d-flex justify-content-center align-items-center" style="flex: 1;">
                                        <h2 class="text-primary my-3 m-0" style="font-size: 80px;">
                                            <span data-plugin="counterup">0</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 d-flex justify-content-center align-items-center">
                            <div class="card" id="tooltip-container"
                                style="width: 400px; height: 200px; margin: 10px auto; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center" style="text-align: center;">
                                    <h4 class="mt-0 font-20">Number of Notifications</h4>
                                    <div class="d-flex justify-content-center align-items-center" style="flex: 1;">
                                        <h2 class="text-primary my-3 m-0" style="font-size: 80px; color:#f44336">
                                            <span data-plugin="counterup">0</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar-lg">
                                                    <img src="backend/assets/images/users/user-3.jpg" class="img-fluid rounded-circle" alt="user-img">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h5 class="mb-1 mt-2 font-16">Mr. Amir Amir</h5>
                                                <p class="mb-2 text-muted font-13">Head of Forest Rangers </p>
                                                <p class="mb-0  font-12">
                                                    <b>
                                                    Phone: <b> <a href="tel:+212641093261" class="text-muted">+212 641093261</a>  </b>
                                                    </b>
                                                </p>

                                            </div>
                                        </div>
                                        <!-- end row-->
                                    </div>
                                </div>
                                <!-- end widget-rounded-circle-->
                            </div>
                            <!-- end col-->
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar-lg">
                                                    <img src="backend/assets/images/users/user-5.jpg" class="img-fluid rounded-circle" alt="user-img">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h5 class="mb-1 mt-2 font-16">Ms. Samira Alami</h5>
                                                <p class="mb-2 text-muted font-13">Chief Wildlife & Waters Officer </p>
                                                <p class="mb-0  font-12">
                                                    <b>
                                                    Phone: <b> <a href="tel:+212641093261" class="text-muted">+212 641093261</a>  </b>
                                                    </b>
                                                </p>

                                            </div>
                                        </div>
                                        <!-- end row-->
                                    </div>
                                </div>
                                <!-- end widget-rounded-circle-->
                            </div>
                            <!-- end col-->
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar-lg">
                                                    <img src="backend/assets/images/users/user-7.jpg" class="img-fluid rounded-circle" alt="user-img">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h5 class="mb-1 mt-2 font-16">Mr. Adam Bouji</h5>
                                                <p class="mb-2 text-muted font-13">Forests Chief Patrol Leader</p>
                                                <p class="mb-0  font-12">
                                                    <b>
                                                    Phone: <b> <a href="tel:+212641093261" class="text-muted">+212 641093261</a>  </b>
                                                    </b>
                                                </p>

                                            </div>
                                        </div>
                                        <!-- end row-->
                                    </div>
                                </div>
                                <!-- end widget-rounded-circle-->
                            </div>
                            <!-- end col-->
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar-lg">
                                                    <img src="backend/assets/images/users/user-6.jpg" class="img-fluid rounded-circle" alt="user-img">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h5 class="mb-1 mt-2 font-16">Mr. Hamid Jamal</h5>
                                                <p class="mb-2 text-muted font-13">Director of National Parks </p>
                                                <p class="mb-0  font-12">
                                                    <b>
                                                    Phone: <b> <a href="tel:+212641093261" class="text-muted">+212 641093261</a>  </b>
                                                    </b>
                                                </p>

                                            </div>
                                        </div>
                                        <!-- end row-->
                                    </div>
                                </div>
                                <!-- end widget-rounded-circle-->
                            </div>
                            <!-- end col-->
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-bs-toggle="collapse" href="#cardCollpase4" role="button" aria-expanded="false" aria-controls="cardCollpase4"><i class="mdi mdi-minus"></i></a>
                                        </div>
                                        <h4 class="header-title mb-0">Camera's Location</h4>

                                        <div id="cardCollpase4" class="collapse show">
                                            <div class="pt-3">
                                                <!-- Map Container -->
                                                <div id="map" style="height: 433px; width: 100%;"></div>
                                            </div>
                                        </div> <!-- collapsed end -->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>

                        <!-- Google Maps Script -->
                        <script
                        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}" defer
                        ></script>
                        <script src="backend/assets/libs/gmaps/gmaps.min.js" defer></script>
                        <script src="backend/assets/js/pages/google-maps.init.js"></script>
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                            // Initialize the map
                            var map = new GMaps({
                                el: '#map',
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

                    <!-- container -->
                </div>
                <!-- content -->
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

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <!-- Vendor js -->
        <script src="backend/assets/js/vendor.min.js"></script>
        <!-- Chart JS -->
        <script src="backend/assets/libs/chart.js/Chart.bundle.min.js"></script>
        <script src="backend/assets/libs/moment/min/moment.min.js"></script>
        <script src="backend/assets/libs/jquery.scrollto/jquery.scrollTo.min.js"></script>
        <!-- Chat app -->
        <script src="backend/assets/js/pages/jquery.chat.js"></script>
        <!-- Todo app -->
        <script src="backend/assets/js/pages/jquery.todo.js"></script>
        <!-- Dashboard init JS -->
        <script src="backend/assets/js/pages/dashboard-3.init.js"></script>
        <!-- App js-->
        <script src="backend/assets/js/app.min.js"></script>
        <script>
               document.addEventListener('DOMContentLoaded', function () {
            const totalAlertsElement = document.querySelector('#total-alerts');

            async function fetchAlertCounts() {
                try {
                    const response = await fetch('/alert-counts');
                    const data = await response.json();
                    totalAlertsElement.textContent = data.number_of_alerts;
                } catch (error) {
                    console.error('Error fetching alert counts:', error);
                }
            }

            setInterval(fetchAlertCounts, 2000);
            fetchAlertCounts();

            document.querySelector('#reset-button').addEventListener('click', async function () {
                try {
                    const response = await fetch('/reset-alerts', {
                        method: 'POST',
                        headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
                    });
                    if (response.ok) {
                        await fetchAlertCounts();
                    } else {
                        console.error('Failed to reset alerts');
                    }
                } catch (error) {
                    console.error('Error resetting alerts:', error);
                }
            });
        });

        </script>


        <!-- Plugins js-->
        <script src="backend/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
    </body>
</html>
