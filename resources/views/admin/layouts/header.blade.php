<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Application Title</title>
    
    <!-- Load Material Design Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.css">
    
    <!-- Include your CSS files here -->
    <link rel="stylesheet" href="{{ asset('auth/assets/css/style.css') }}">
    <!-- Add other necessary stylesheets -->
</head>
<body>

<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ url('index.html') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('auth/assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('auth/assets/images/logo-dark.png') }}" alt="" height="20">
                    </span>
                </a>

                <a href="{{ url('index.html') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('auth/assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('auth/assets/images/logo-light.png') }}" alt="" height="20">
                    </span>
                </a>
            </div>

            <!-- Sidebar Toggle Button -->
            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>  <!-- Ensure 'mdi' is the correct prefix -->
            </button>

            <!-- Sidebar Toggle Script -->
            <script>
                document.getElementById('vertical-menu-btn').addEventListener('click', function() {
                    const sidebar = document.querySelector('.vertical-menu');
                    sidebar.classList.toggle('half-width'); // Toggles half-width class
                });
            </script>

            <div class="topbar-social-icon me-3 d-none d-md-block">
                <ul class="list-inline title-tooltip m-0">
                    <li class="list-inline-item">
                        <a href="email-inbox.html" data-bs-toggle="tooltip" data-placement="top" title="Email">
                            <i class="mdi mdi-email-outline"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="chat.html" data-bs-toggle="tooltip" data-placement="top" title="Chat">
                            <i class="mdi mdi-tooltip-outline"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="calendar.html" data-bs-toggle="tooltip" data-placement="top" title="Calendar">
                            <i class="mdi mdi-calendar"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="pages-invoice.html" data-bs-toggle="tooltip" data-placement="top" title="Printer">
                            <i class="mdi mdi-printer"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Search input -->
        <div class="search-wrap" id="search-wrap">
            <div class="search-bar">
                <input class="search-input form-control" placeholder="Search" />
                <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                    <i class="mdi mdi-close-circle"></i>
                </a>
            </div>
        </div>

        <div class="d-flex">
            <div class="dropdown d-none d-lg-inline-block">
                <button type="button" class="btn header-item toggle-search noti-icon waves-effect" data-target="#search-wrap">
                    <i class="mdi mdi-magnify"></i>
                </button>
            </div>

            <div class="dropdown d-none d-md-block ms-2">
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="me-2" src="{{ asset('auth/assets/images/flags/us.jpg') }}" alt="Header Language" height="16"> English <span class="mdi mdi-chevron-down"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- Language options -->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="{{ asset('auth/assets/images/flags/germany.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> German </span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="{{ asset('auth/assets/images/flags/italy.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Italian </span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="{{ asset('auth/assets/images/flags/french.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> French </span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="{{ asset('auth/assets/images/flags/spain.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Spanish </span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="{{ asset('auth/assets/images/flags/russia.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Russian </span>
                    </a>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="mdi mdi-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-bell-outline bx-tada"></i>
                    <span class="badge bg-danger rounded-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> Notifications </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small"> View All</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <!-- Notification items -->
                        <a href="#" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="mdi mdi-cart text-white"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Your order is placed</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="text-reset notification-item">
                            <div class="media">
                                <img src="{{ asset('auth/assets/images/users/avatar-3.jpg') }}" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">James Lemire</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">It will seem like simplified English.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hour ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="mdi mdi-check text-white"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Your task has been completed</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- User dropdown -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset('auth/assets/images/users/avatar-1.jpg') }}" alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">{{ Auth::user()->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- User options -->
                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle text-muted me-2"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="mdi mdi-cog-outline text-muted me-2"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline text-muted me-2"></i> Lock Screen</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"><i class="mdi mdi-logout text-muted me-2"></i> Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Your sidebar and main content here -->

<!-- Include your JavaScript files here -->
<script src="{{ asset('auth/assets/js/script.js') }}"></script>
<!-- Add other necessary scripts -->

</body>
</html>
