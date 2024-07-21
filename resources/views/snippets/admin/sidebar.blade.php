        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu  bg-dark text-light">
            <!-- LOGO -->
            <div class=" navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="dashboard/assets/images/logo-sm.png" alt="" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="dashboard/assets/images/logo-dark.png" alt="" height="26">
                    </span>
                </a>
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="dashboard/assets/images/logo-sm.png" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="dashboard/assets/images/logo-light.png" alt="" height="24">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                        <li class="nav-item">
                            <a href="" class="nav-link menu-link"> <i class="bi bi-speedometer2"></i> <span data-key="t-dashboard">Dashboard</span> </a>
                        </li>




                        <li class="nav-item">
                            <a href="" class="nav-link menu-link"> <i class="bi bi-person-bounding-box"></i> <span data-key="t-users-list">Bookings</span> </a>
                        </li>






                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarShipping" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarShipping">
                                <i class="bi bi-truck"></i> <span data-key="t-shipping">Shippments</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarShipping">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('admin_track')}}" class="nav-link menu-link"> <i class="bi bi-speedometer2"></i> <span data-key="t-dashboard">Create Tracking</span> </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('trackList')}}" class="nav-link menu-link"> <i class="bi bi-person-bounding-box"></i> <span data-key="t-users-list">Shipments List </span> </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->

        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
