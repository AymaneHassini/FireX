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
                        <a href="/dashboard" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="backend/assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="backend/assets/images/firex-logo-vector.png" alt="" height="20">
                            </span>
                        </a>
                        <a href="/dashboard" class="logo logo-light text-center">
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
                                            <li class="breadcrumb-item"><a href="{{ route('live.feeds') }}">Live Feeds</a></li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Live Feeds</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->
                        
                  <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="header-title mb-3">Feed 1</h6>
                                <div class="feed-container" data-feed-id="feed1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-3">Feed 2</h4>
                                <div class="feed-container" data-feed-id="feed2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-3">Feed 3</h4>
                                <div class="feed-container" data-feed-id="feed3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-3">Feed 4</h4>
                                <div class="feed-container" data-feed-id="feed4"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <script>
                        function initializeFeed(feedId) {
                                const container = document.querySelector(`.feed-container[data-feed-id="${feedId}"]`);
                                const header = container.closest('.card-body').querySelector('.header-title');

                                // Create a wrapper for the title and buttons
                                const titleWrapper = document.createElement("div");
                                titleWrapper.style.cssText = `
                                    display: flex; 
                                    justify-content: space-between; 
                                    align-items: center;
                                    gap: 10px;
                                `;

                                // Move the header into the wrapper
                                header.parentNode.insertBefore(titleWrapper, header);
                                titleWrapper.appendChild(header);

                                // Create a container for the buttons to group them together
                                const buttonContainer = document.createElement("div");
                                buttonContainer.style.cssText = `
                                    display: flex; 
                                    align-items: center; 
                                    gap: 10px;
                                `;
                                titleWrapper.appendChild(buttonContainer);

                                // Create reset button (icon)
                                const resetBtn = document.createElement("button");
                                resetBtn.id = `${feedId}-reset-btn`;
                                resetBtn.innerHTML = `<img src="/backend/assets/libs/iconsvg/reset.svg" alt="Reset" style="width:30px;height:30px;">`;
                                resetBtn.style.cssText = `
                                    border: none; 
                                    background: transparent; 
                                    cursor: pointer; 
                                    display: none;
                                    padding: 5px; 
                                    border-radius: 4px;
                                    transition: opacity 0.2s ease-in-out;
                                `;
                                resetBtn.addEventListener("mouseover", () => resetBtn.style.opacity = "0.7");
                                resetBtn.addEventListener("mouseout", () => resetBtn.style.opacity = "1.0");

                                // Create expand button (icon)
                                const expandBtn = document.createElement("button");
                                expandBtn.id = `${feedId}-expand-btn`;
                                expandBtn.innerHTML = `<img src="/backend/assets/libs/iconsvg/expand.svg" alt="Expand" style="width:25px;height:25px;">`;
                                expandBtn.style.cssText = `
                                    border: none; 
                                    background: transparent; 
                                    cursor: pointer; 
                                    padding: 5px; 
                                    border-radius: 4px;
                                    transition: opacity 0.2s ease-in-out;
                                `;
                                expandBtn.addEventListener("mouseover", () => expandBtn.style.opacity = "0.7");
                                expandBtn.addEventListener("mouseout", () => expandBtn.style.opacity = "1.0");

                                // Create fullscreen button (icon)
                                const fullScreenBtn = document.createElement("button");
                                fullScreenBtn.id = `${feedId}-fullscreen-btn`;
                                fullScreenBtn.innerHTML = `<img src="/backend/assets/libs/iconsvg/fs.svg" alt="Fullscreen" style="width:20px;height:20px;">`;
                                fullScreenBtn.style.cssText = `
                                    border: none; 
                                    background: transparent; 
                                    cursor: pointer; 
                                    padding: 5px; 
                                    border-radius: 4px;
                                    transition: opacity 0.2s ease-in-out;
                                `;
                                fullScreenBtn.addEventListener("mouseover", () => fullScreenBtn.style.opacity = "0.7");
                                fullScreenBtn.addEventListener("mouseout", () => fullScreenBtn.style.opacity = "1.0");

                                // Append the buttons to the button container
                                buttonContainer.appendChild(resetBtn);
                                buttonContainer.appendChild(expandBtn);
                                buttonContainer.appendChild(fullScreenBtn);

                                // Create iframe
                                const iframe = document.createElement("iframe");
                                iframe.id = `${feedId}-frame`;
                                iframe.style.cssText = `
                                    position: absolute; top: 0; left: 0; 
                                    width: 100%; height: 100%; 
                                    border: none; display: none; z-index: 1;
                                `;

                                // Create add-feed box
                                const addFeedBox = document.createElement("div");
                                addFeedBox.id = `${feedId}-add-box`;
                                addFeedBox.style.cssText = `
                                    position: absolute; top: 0; left: 0; width: 100%; height: 100%; 
                                    display: flex; justify-content: center; align-items: center; 
                                    cursor: pointer; border: 2px dashed #007bff; 
                                    background: rgba(255,255,255,0.8); z-index: 2;
                                `;
                                addFeedBox.innerHTML = `<span style="font-size: 3rem; color: #007bff;">+</span>`;

                                // Append iframe and add-feed box to container
                                container.style.cssText = "position: relative; height: 400px; overflow: hidden;";
                                container.appendChild(iframe);
                                container.appendChild(addFeedBox);

                                // Event listeners for add-feed box
                                // Function to validate IP address format
                            function isValidIP(ip) {
                                const ipPattern = /^(25[0-5]|2[0-4][0-9]|[0-1]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[0-1]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[0-1]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[0-1]?[0-9][0-9]?)$/;
                                return ipPattern.test(ip);
                            }

                            // Utility to check feed availability with retries
                            function checkFeedAvailability(url, retries = 3, delay = 2000) {
                                return new Promise((resolve, reject) => {
                                    const attempt = (count) => {
                                        fetch(url)
                                            .then((response) => {
                                                if (response.ok) {
                                                    resolve(); // Feed is available
                                                } else {
                                                    throw new Error(`HTTP Error: ${response.status}`);
                                                }
                                            })
                                            .catch((error) => {
                                                if (count > 0) {
                                                    setTimeout(() => attempt(count - 1), delay);
                                                } else {
                                                    reject(new Error("Feed is unavailable after multiple retries."));
                                                }
                                            });
                                    };

                                    attempt(retries);
                                });
                            }

                            // Restore feed state dynamically
                            function restoreFeed() {
                                const savedFeed = localStorage.getItem(feedId);

                                if (savedFeed) {
                                    try {
                                        const feedData = JSON.parse(savedFeed);

                                        if (feedData.url) {
                                            checkFeedAvailability(feedData.url)
                                                .then(() => {
                                                    iframe.src = feedData.url;
                                                    iframe.style.display = "block";
                                                    addFeedBox.style.display = "none";
                                                    resetBtn.style.display = "inline-block";
                                                    console.log("Feed restored:", feedData);
                                                })
                                                .catch((error) => {
                                                    console.error("Failed to restore feed:", error.message);
                                                    alert("Previously saved feed is unavailable.");
                                                    localStorage.removeItem(feedId); // Clean up invalid feed
                                                });
                                        }
                                    } catch (e) {
                                        console.error("Failed to parse saved feed data:", e);
                                    }
                                }
                            }

                            // Event listener for adding a feed
                            addFeedBox.addEventListener("click", () => {
                                        const ip = prompt("Enter IP Address (e.g., 10.121.33.102):");

                                        if (ip && isValidIP(ip)) {
                                            const latitude = prompt("Enter Latitude:");
                                            const longitude = prompt("Enter Longitude:");

                                            if (latitude && longitude) {
                                                const rawFeedUrl = `http://${ip}:8080/video`;
                                                const processedFeedUrl = `http://localhost:5001/processed_feed?url=${encodeURIComponent(rawFeedUrl)}`;
                                                console.log("Processed feed URL:", processedFeedUrl);


                                                // Check if the processed feed URL is available before displaying it
                                                checkFeedAvailability(processedFeedUrl)
                                                    .then(() => {
                                                        iframe.src = processedFeedUrl; // Use the processed YOLO feed
                                                        iframe.style.display = "block";
                                                        addFeedBox.style.display = "none";
                                                        resetBtn.style.display = "inline-block";

                                                        // Save feed details
                                                        try {
                                                            const feedDetails = {
                                                                url: processedFeedUrl, // Save the processed feed URL
                                                                lat: parseFloat(latitude),
                                                                lng: parseFloat(longitude),
                                                                timestamp: Date.now()
                                                            };
                                                            localStorage.setItem(feedId, JSON.stringify(feedDetails));
                                                            console.log("Feed saved:", feedDetails);
                                                        } catch (e) {
                                                            console.error("Failed to save feed details:", e);
                                                        }
                                                    })
                                                    .catch((error) => {
                                                        alert(`Failed to load feed: ${error.message}`);
                                                    });
                                            } else {
                                                alert("Latitude and Longitude are required!");
                                            }
                                        } else {
                                            alert("Invalid IP Address! Please try again.");
                                        }
                                    });


                            // Restore feed state on page load
                            document.addEventListener("DOMContentLoaded", restoreFeed);

                            window.addEventListener("popstate", restoreFeed);

                                // Reset button functionality
                                resetBtn.addEventListener("click", () => {
                                    localStorage.removeItem(feedId);
                                    iframe.src = "";
                                    iframe.style.display = "none";
                                    addFeedBox.style.display = "flex";
                                    resetBtn.style.display = "none";
                                });

                                // Expand functionality (blurred overlay)
                                expandBtn.addEventListener("click", () => {
                                    const overlay = document.createElement("div");
                                    overlay.style.cssText = `
                                        position: fixed !important;
                                        top: 0 !important;
                                        left: 0 !important;
                                        width: 100vw !important;
                                        height: 100vh !important;
                                        background: rgba(0,0,0,0.2) !important; 
                                        backdrop-filter: blur(10px) !important;
                                        -webkit-backdrop-filter: blur(10px) !important;
                                        z-index: 9999 !important;
                                        display: flex !important;
                                        justify-content: center !important;
                                        align-items: center !important;
                                        overflow: hidden !important;
                                    `;

                                    const expContainer = document.createElement("div");
                                    expContainer.style.cssText = `
                                        position: relative !important;
                                        width: 640px !important;  
                                        height: 400px !important;  
                                        background: rgba(255,255,255,0.2) !important;
                                        border-radius: 8px !important;
                                        box-shadow: 0 0 20px rgba(0,0,0,0.3) !important;
                                        display: block !important;
                                        overflow: hidden !important;
                                        backdrop-filter: blur(5px) !important;
                                        -webkit-backdrop-filter: blur(5px) !important;
                                    `;

                                    const expandedIframe = iframe.cloneNode(true);
                                    expandedIframe.style.cssText = `
                                        width: 100% !important;
                                        height: 100% !important;
                                        border: none !important;
                                        display: block !important;
                                    `;

                                    // Close button for overlay
                                    const closeBtn = document.createElement("button");
                                    closeBtn.innerHTML = `<img src="/backend/assets/libs/iconsvg/close.svg" alt="Close" style="width:25px;height:25px;">`;
                                    closeBtn.style.cssText = `
                                        position: absolute !important;
                                        top: 10px !important;
                                        right: 10px !important;
                                        background: transparent !important;
                                        border: none !important;
                                        cursor: pointer !important;
                                        border-radius: 50%;
                                        width: 40px; height: 40px;
                                        display: flex; justify-content: center; align-items: center;
                                        transition: opacity 0.2s ease-in-out;
                                    `;
                                    closeBtn.addEventListener("mouseover", () => closeBtn.style.opacity = "0.7");
                                    closeBtn.addEventListener("mouseout", () => closeBtn.style.opacity = "1.0");

                                    expContainer.appendChild(expandedIframe);
                                    expContainer.appendChild(closeBtn);
                                    overlay.appendChild(expContainer);
                                    document.body.appendChild(overlay);

                                    closeBtn.addEventListener("click", () => {
                                        document.body.removeChild(overlay);
                                    });
                                });

                                // Fullscreen functionality
                                fullScreenBtn.addEventListener("click", () => {
                                    const fsOverlay = document.createElement('div');
                                    fsOverlay.style.cssText = `
                                        position: fixed;
                                        top: 0; left: 0;
                                        width: 100vw; height: 100vh;
                                        background: rgba(0,0,0,0.3);
                                        z-index: 999999;
                                        overflow: hidden;
                                        margin: 0; padding: 0;
                                    `;
                                    document.body.appendChild(fsOverlay);

                                    const wrapper = document.createElement('div');
                                    wrapper.style.cssText = `
                                        position: absolute;
                                        top: 50%; left: 50%;
                                        transform: translate(-50%, -50%);
                                        transform-origin: center center;
                                        overflow: hidden;
                                    `;
                                    fsOverlay.appendChild(wrapper);

                                    const originalWidth = 640;
                                    const originalHeight = 480;
                                    wrapper.style.width = originalWidth + 'px';
                                    wrapper.style.height = originalHeight + 'px';

                                    const fsIframe = document.createElement('iframe');
                                    fsIframe.src = iframe.src;
                                    fsIframe.style.cssText = `
                                        width: 100%;
                                        height: 100%;
                                        border: none;
                                        display: block;
                                        background: black;
                                    `;
                                    wrapper.appendChild(fsIframe);

                                    const scaleFactor = Math.min(window.innerWidth / originalWidth, window.innerHeight / originalHeight);
                                    wrapper.style.transform = `translate(-50%, -50%) scale(${scaleFactor})`;

                                    const fsCloseBtn = document.createElement('button');
                                    fsCloseBtn.innerHTML = `<img src="/backend/assets/libs/iconsvg/close.svg" alt="Close" style="width:45px;height:45px;">`;
                                    fsCloseBtn.style.cssText = `
                                        position: absolute;
                                        top: 20px; right: 20px;
                                        background: transparent;
                                        border: none;
                                        border-radius: 50%;
                                        width: 40px; height: 40px;
                                        display: flex; justify-content: center; align-items: center;
                                        cursor: pointer; z-index: 1000000;
                                        transition: opacity 0.2s ease-in-out;
                                    `;
                                    fsCloseBtn.addEventListener("mouseover", () => fsCloseBtn.style.opacity = "0.7");
                                    fsCloseBtn.addEventListener("mouseout", () => fsCloseBtn.style.opacity = "1.0");

                                    fsOverlay.appendChild(fsCloseBtn);

                                    fsCloseBtn.addEventListener('click', () => {
                                        document.body.removeChild(fsOverlay);
                                    });
                                });

                                // Restore feed from localStorage if available
                                const savedUrl = localStorage.getItem(feedId);
                                if (savedUrl) {
                                    iframe.src = savedUrl;
                                    iframe.style.display = "block";
                                    addFeedBox.style.display = "none";
                                    resetBtn.style.display = "inline-block";
                                }
                            }

                            // Initialize feeds dynamically
                            ["feed1", "feed2", "feed3", "feed4"].forEach(initializeFeed);


                </script>



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
        <script src="backend/assets/js/vendor.min.js"></script>

        <!-- google maps api -->
        <script
           src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}" defer
        ></script>
        <!-- gmap js-->
        <script src="backend/assets/libs/gmaps/gmaps.min.js"></script>

        <!-- Init js-->
        <script src="backend/assets/js/pages/google-maps.init.js"></script>

        <!-- App js -->
        <script src="backend/assets/js/app.min.js"></script>
        
    </body>
</html>