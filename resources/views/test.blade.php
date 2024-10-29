<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Oct 2024 14:34:17 GMT -->
<head>
        
        
        <meta charset="utf-8" />
        <title>Products | Morvin - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('auth/assets/images/favicon.ico')}}">

        <!-- ION Slider -->
        <link href="{{asset('auth/assets/libs/ion-rangeslider/css/ion.rangeSlider.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Bootstrap Css -->
        <link href="{{asset('auth/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('auth/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('auth/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />


    </head>

    
    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">

                           <!-- LOGO -->
                     <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{asset('auth/assets/images/logo-sm.png')}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset('auth/assets/images/logo-dark.png')}}" alt="" height="20">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{asset('auth/assets/images/logo-sm.png')}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset('auth/assets/images/logo-light.png')}}" alt="" height="20">
                            </span>
                        </a>
                    </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>


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
                                <img class="me-2" src="{{asset('auth/assets/images/flags/us.jpg')}}" alt="Header Language" height="16"> English <span class="mdi mdi-chevron-down"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{asset('auth/assets/images/flags/germany.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> German </span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{asset('auth/assets/images/flags/italy.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Italian </span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{asset('auth/assets/images/flags/french.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> French </span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{asset('auth/assets/images/flags/spain.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Spanish </span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{asset('auth/assets/images/flags/russia.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Russian </span>
                                </a>
                            </div>
                        </div>

    
           

           

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-bell-outline bx-tada"></i>
                                <span class="badge bg-danger rounded-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
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
                                            <img src="{{asset('auth/assets/images/users/avatar-3.jpg')}}"
                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">James Lemire</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">It will seem like simplified English.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
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
                                                <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="text-reset notification-item">
                                        <div class="media">
                                            <img src="{{asset('auth/assets/images/users/avatar-4.jpg')}}"
                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top">
                                    <a class="btn btn-sm btn-link font-size-14 w-100 text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{asset('auth/assets/images/users/avatar-7.jpg')}}"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1">James</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle-outline font-size-16 align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-wallet-outline font-size-16 align-middle me-1"></i> My Wallet</a>
                                <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-end">11</span><i class="mdi mdi-cog-outline font-size-16 align-middle me-1"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline font-size-16 align-middle me-1"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power font-size-16 align-middle me-1 text-danger"></i> Logout</a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="mdi mdi-cog-outline font-size-20"></i>
                            </button>
                        </div>
            
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">


                    <div class="user-sidebar text-center">
                        <div class="dropdown">
                            <div class="user-img">
                                <img src="{{asset('auth/assets/images/users/avatar-7.jpg')}}" alt="" class="rounded-circle">
                                <span class="avatar-online bg-success"></span>
                            </div>
                            <div class="user-info">
                                <h5 class="mt-3 font-size-16 text-white">James Raphael</h5>
                                <span class="font-size-13 text-white-50">Administrator</span>
                            </div>
                        </div>
                    </div>



                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="index.html" class="waves-effect">
                                    <i class="dripicons-home"></i><span class="badge rounded-pill bg-info float-end">3</span>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="calendar.html" class=" waves-effect">
                                    <i class="dripicons-calendar"></i>
                                    <span>Calendar</span>
                                </a>
                            </li>

                            <li>
                                <a href="chat.html" class=" waves-effect">
                                    <i class="dripicons-message"></i>
                                    <span>Chat</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-cart"></i>
                                    <span>Ecommerce</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ecommerce-products.html">Products</a></li>
                                    <li><a href="ecommerce-product-detail.html">Product Detail</a></li>
                                    <li><a href="ecommerce-orders.html">Orders</a></li>
                                    <li><a href="ecommerce-customers.html">Customers</a></li>
                                    <li><a href="ecommerce-cart.html">Cart</a></li>
                                    <li><a href="ecommerce-checkout.html">Checkout</a></li>
                                    <li><a href="ecommerce-shops.html">Shops</a></li>
                                    <li><a href="ecommerce-add-product.html">Add Product</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-mail"></i>
                                    <span>Email</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Email Read</a></li>
                                    <li><a href="email-compose.html">Email Compose</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Components</li>


                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-suitcase"></i>
                                    <span>UI Elements</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ui-alerts.html">Alerts</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a></li>
                                    <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                    <li><a href="ui-grid.html">Grid</a></li>
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-lightbox.html">Lightbox</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-rangeslider.html">Range Slider</a></li>
                                    <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
                                    <li><a href="ui-tabs-accordions.html">Accordions</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-video.html">Video</a></li>
                                    <li><a href="ui-general.html">General</a></li>
                                    <li><a href="ui-colors.html">Colors</a></li>
                                    <li><a href="ui-rating.html">Rating</a></li>
                                </ul>
                            </li>

           

           

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="dripicons-to-do"></i>
                                    <span class="badge rounded-pill bg-danger float-end">6</span>
                                    <span>Forms</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                    <li><a href="form-editors.html">Form Editors</a></li>
                                    <li><a href="form-uploads.html">Form Upload</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-mask.html">Form Mask</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-graph-pie"></i>
                                    <span>Charts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="charts-apex.html">Apex charts</a></li>
                                    <li><a href="charts-chartist.html">Chartist</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                                    <li><a href="charts-flot.html">Flot Chart</a></li>
                                    <li><a href="charts-knob.html">Knob Chart</a></li>
                                    <li><a href="charts-sparkline.html">Sparkline Chart</a></li>
                                </ul>
                            </li>


                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-toggles"></i>
                                    <span>Tables</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Tables</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-basket"></i>
                                    <span>Icons</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                    <li><a href="icons-themify.html">Themify Icons</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-map"></i>
                                    <span>Maps</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="maps-google.html">Google Maps</a></li>
                                    <li><a href="maps-vector.html">Vector Maps</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Extras</li>


                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-device-desktop"></i>
                                    <span>Layouts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow">Vertical</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                            <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                            <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                            <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                            <li><a href="layouts-preloader.html">Preloader</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                            <li><a href="layouts-hori-topbar-light.html">Topbar light</a></li>
                                            <li><a href="layouts-hori-boxed-width.html">Boxed width</a></li>
                                            <li><a href="layouts-hori-preloader.html">Preloader</a></li>
                                            <li><a href="layouts-hori-colored-header.html">Colored Header</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

               

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-user-group"></i>
                                    <span>Authentication</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="auth-login.html">Login</a></li>
                                    <li><a href="auth-register.html">Register</a></li>
                                    <li><a href="auth-recoverpw.html">Re-Password</a></li>
                                    <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-copy"></i>
                                    <span>Pages</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                    <li><a href="pages-invoice.html">Invoice</a></li>
                                    <li><a href="pages-blank.html">Blank Page</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-500.html">Error 500</a></li>
                                    <li><a href="pages-pricing.html">Pricing</a></li>
                                    <li><a href="pages-maintenance.html">Maintenance</a></li>
                                    <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                                    <li><a href="pages-faq.html">FAQs</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-checklist"></i>
                                    <span>Multi Level</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);">Level 1.1</a></li>
                                    <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="javascript: void(0);">Level 2.1</a></li>
                                            <li><a href="javascript: void(0);">Level 2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">

                    <!-- start page title -->
                    <div class="page-title-box">
                        <div class="container-fluid">
                         <div class="row align-items-center">
                             <div class="col-sm-6">
                                 <div class="page-title">
                                     <h4>Products</h4>
                                         <ol class="breadcrumb m-0">
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Morvin</a></li>
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                             <li class="breadcrumb-item active">Products</li>
                                         </ol>
                                 </div>
                             </div>
                             <div class="col-sm-6">
                                <div class="float-end d-none d-sm-block">
                                    <a href="#" class="btn btn-success">Add Widget</a>
                                </div>
                             </div>
                         </div>
                        </div>
                     </div>
                     <!-- end page title -->    


                    <div class="container-fluid">

                        <div class="page-content-wrapper">

                        


                            <div class="row">
                                <div class="col-xl-3 col-lg-4">
                                   
                                    
    
                                       <div class="card">

                                        <div class="card-body">

                                            <h4 class="header-title">Filters</h4>

                                            <div class="border p-3 rounded mt-4">

                                                <h5 class="font-size-16">Search</h5>

                                                <div class="search-box me-2 mt-3">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" placeholder="Search...">
                                                        <i class="ti-search search-icon"></i>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="border p-3 rounded mt-4">
                                                    <h5 class="font-size-16">Categories</h5>
    
        
                                                <div id="accordion" class="custom-accordion categories-accordion">
                                                    <div class="categories-group-card">
                                                        <a href="#collapseOne" class="categories-group-list collapsed" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseOne">
                                                            <i class="ti-desktop font-size-16 align-middle me-2"></i> Electronic
                                                            <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                                        </a>
                                
                                                        <div id="collapseOne" class="collapse" data-parent="#accordion">
                                                            <div>
                                                                <ul class="list-unstyled categories-list mb-0">
                                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Mobile</a></li>
                                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Cemera</a></li>
                                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Mobile accessories</a></li>
                                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Computers</a></li>
                                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Laptops</a></li>
                                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Speakers</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="categories-group-card">
                                                        <a href="#collapseTwo" class="categories-group-list" data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapseTwo">
                                                            <i class="ti-archive font-size-16 align-middle me-2"></i> Furniture
                                                            <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                                        </a>
                                                        <div id="collapseTwo" class="collapse show" data-parent="#accordion">
                                                            <div>
                                                                <ul class="list-unstyled categories-list mb-0">
                                                                    <li class="active"><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Chairs </a></li>
                                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Tables</a></li>
                                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Beds </a></li>
                                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Seating</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="categories-group-card">
                                                        <a href="#collapseThree" class="categories-group-list collapsed" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                                                            <i class="mdi mdi-pinwheel-outline font-size-16 align-middle me-2"></i> Baby & Kids
                                                            <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                                        </a>
                                                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                                                            <div>
                                                                <ul class="list-unstyled categories-list mb-0">
                                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Clothing</a></li>
                                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Footwear</a></li>
                                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Toys</a></li>
                                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Baby care</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="categories-group-card">
                                                        <a href="#collapseFour" class="categories-group-list collapsed" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
                                                            <i class="mdi mdi-dumbbell font-size-16 align-middle me-2"></i> Fitness
                                                            <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                                        </a>
                                                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                                                            <div>
                                                                <ul class="list-unstyled categories-list mb-0">
                                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Gym equipment</a></li>
                                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Yoga mat</a></li>
                                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Dumbbells</a></li>
                                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Protein supplements</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="border p-3 rounded mt-4">
                                                <h5 class="font-size-16">Multi Range</h5>
    
                                                <div class="mt-4">
                                                    <div class="form-check mt-2">
                                                        <input type="radio" id="multirange" name="multirange1" class="form-check-input" checked>
                                                        <label class="custom-control-label" for="multirange"> All</label>
                                                    </div>
                                                    <div class="form-check mt-2">
                                                        <input type="radio" id="multirange1" name="multirange1" class="form-check-input">
                                                        <label class="custom-control-label" for="multirange1"> $1 - $10</label>
                                                    </div>
                                                    <div class="form-check mt-2">
                                                        <input type="radio" id="multirange2" name="multirange1" class="form-check-input">
                                                        <label class="custom-control-label" for="multirange2"> $10 - $100</label>
                                                    </div>
                                                    <div class="form-check mt-2">
                                                        <input type="radio" id="multirange3" name="multirange1" class="form-check-input">
                                                        <label class="custom-control-label" for="multirange3"> $100 - $500</label>
                                                    </div>
                                                    <div class="form-check mt-2">
                                                        <input type="radio" id="multirange4" name="multirange1" class="form-check-input">
                                                        <label class="custom-control-label" for="multirange4"> $500</label>
                                                    </div>
                                                </div>
                                        </div>
        
                                            <div class="border p-3 rounded mt-4">
                                                    <h5 class="font-size-16 mb-4">Price</h5>
        
                                                    <input type="text" id="pricerange">
                                            </div>


        
                                         
                                                <div class="border p-3 rounded mt-4">
                                                        <h5 class="font-size-16 mb-0 custom-accordion"><a href="#collapseExample1" class="text-dark d-block" data-bs-toggle="collapse" >Discount <i class="mdi mdi-minus float-end accor-plus-icon"></i></a></h5>
            
                                                        <div class="collapse show" id="collapseExample1">
                
                                                            <div class="mt-4">
                                                                <div class="form-check mt-2">
                                                                    <input type="radio" id="productdiscountRadio6" name="productdiscountRadio1" class="form-check-input">
                                                                    <label class="custom-control-label" for="productdiscountRadio6">50% or more</label>
                                                                </div>
                                                                <div class="form-check mt-2">
                                                                    <input type="radio" id="productdiscountRadio5" name="productdiscountRadio1" class="form-check-input">
                                                                    <label class="custom-control-label" for="productdiscountRadio5">40% or more</label>
                                                                </div>
                                                                <div class="form-check mt-2">
                                                                    <input type="radio" id="productdiscountRadio4" name="productdiscountRadio1" class="form-check-input">
                                                                    <label class="custom-control-label" for="productdiscountRadio4">30% or more</label>
                                                                </div>
                                                                <div class="form-check mt-2">
                                                                    <input type="radio" id="productdiscountRadio3" name="productdiscountRadio1" class="form-check-input">
                                                                    <label class="custom-control-label" for="productdiscountRadio3">25% or more</label>
                                                                </div>
                                                                <div class="form-check mt-2">
                                                                    <input type="radio" id="productdiscountRadio2" name="productdiscountRadio1" class="form-check-input">
                                                                    <label class="custom-control-label" for="productdiscountRadio2">10% or more</label>
                                                                </div>
                                                                <div class="form-check mt-2">
                                                                    <input type="radio" id="productdiscountRadio1" name="productdiscountRadio1" class="form-check-input">
                                                                    <label class="custom-control-label" for="productdiscountRadio1">Less than 10%</label>
                                                                </div>
                                                            </div>
                
                                                        </div>
                                                </div>
            
                                                <div class="border p-3 rounded mt-4">
                                                        <h5 class="font-size-16 mb-0 custom-accordion"><a href="#collapseExample3" class="text-dark d-block" data-bs-toggle="collapse">Customer Rating <i class="mdi mdi-minus float-end accor-plus-icon"></i></a></h5>
            
                                                        <div class="collapse show" id="collapseExample3">
                
                                                            <div class="mt-4">
                                                                <div class="form-check mt-2">
                                                                    <input type="radio" id="productratingRadio5" name="productratingRadio1" class="form-check-input">
                                                                    <label class="custom-control-label" for="productratingRadio5">5 <i class="mdi mdi-star text-warning"></i>  & Above</label>
                                                                </div>
                                                                <div class="form-check mt-2">
                                                                    <input type="radio" id="productratingRadio1" name="productratingRadio1" class="form-check-input">
                                                                    <label class="custom-control-label" for="productratingRadio1">4 <i class="mdi mdi-star text-warning"></i>  & Above</label>
                                                                </div>
                                                                <div class="form-check mt-2">
                                                                    <input type="radio" id="productratingRadio2" name="productratingRadio1" class="form-check-input">
                                                                    <label class="custom-control-label" for="productratingRadio2">3 <i class="mdi mdi-star text-warning"></i>  & Above</label>
                                                                </div>
                                                                <div class="form-check mt-2">
                                                                    <input type="radio" id="productratingRadio3" name="productratingRadio1" class="form-check-input">
                                                                    <label class="custom-control-label" for="productratingRadio3">2 <i class="mdi mdi-star text-warning"></i>  & Above</label>
                                                                </div>
                                                                <div class="form-check mt-2">
                                                                    <input type="radio" id="productratingRadio4" name="productratingRadio1" class="form-check-input">
                                                                    <label class="custom-control-label" for="productratingRadio4">1 <i class="mdi mdi-star text-warning"></i></label>
                                                                </div>
                                                            </div>
                
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-9">
                                                <div class="row">
                                                    <div class="col-xl-4 col-sm-6">
                                                        <div class="card">
                                                           <div class="card-body">
                                                            <div class="product-img">
                                                                <div class="product-ribbon  bg-primary">
                                                                    25% Off
                                                                </div>
                                                               
                                                                <img src="{{asset('auth/assets/images/product/img-7.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                            </div>

                                                          
                                                            
                                                            <div class="text-center">

                                                                <a href="#" class="text-dark">
                                                                    <h5 class="font-size-18">Home & Office Chair Green</h5>
                                                                </a>
    
                                                                <h4 class="mt-3 mb-0">$200 <span class="font-size-14 text-muted me-2"><del>$240</del></span></h4>

                                                                <div class="mt-3">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item">
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star-half text-warning"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                            </div>
                                                           </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="col-xl-4 col-sm-6">
                                                        <div class="card">
                                                           <div class="card-body">
                                                            <div class="product-img">

                                                              
                                                                <img src="{{asset('auth/assets/images/product/img-8.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                            </div>
                                                            
                                                            <div class="text-center">
                                                                <a href="#" class="text-dark">
                                                                    <h5 class="font-size-18">Home & Office Chair Crime</h5>
                                                                </a>
    
                                                                <h4 class="mt-3 mb-0">$280</h4>

                                                                <div class="mt-3">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item">
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                           </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-xl-4 col-sm-6">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="product-img">

                                                                    <div class="product-ribbon  bg-primary">
                                                                        25% Off
                                                                    </div>
                                                                   
                                                                   
                                                                    <img src="{{asset('auth/assets/images/product/img-9.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                                </div>
                                                                
                                                                <div class="text-center">
                                                                    <a href="#" class="text-dark">
                                                                        <h5 class="font-size-18">Home & Office Chair White</h5>
                                                                    </a>
        
                                                                    <h4 class="mt-3 mb-0">$380 <span class="font-size-14 text-muted me-2"><del>$420</del></span></h4>
    
                                                                    <div class="mt-3">
                                                                        <ul class="list-inline">
                                                                            <li class="list-inline-item">
                                                                                <i class="mdi mdi-star text-warning"></i>
                                                                                <i class="mdi mdi-star text-warning"></i>
                                                                                <i class="mdi mdi-star text-warning"></i>
                                                                                <i class="mdi mdi-star text-warning"></i>
                                                                                <i class="mdi mdi-star-half text-warning"></i>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-xl-4 col-sm-6">
                                                        <div class="card">
                                                           <div class="card-body">
                                                            <div class="product-img">
                                                               
                                                                <img src="{{asset('auth/assets/images/product/img-10.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                            </div>
                                                            
                                                            <div class="text-center">
                                                                <a href="#" class="text-dark">
                                                                    <h5 class="font-size-18">Home & Office Chair Coffee</h5>
                                                                </a>
    
                                                                <h4 class="mt-3 mb-0">$520</h4>

                                                                <div class="mt-3">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item">
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                           </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="col-xl-4 col-sm-6">
                                                        <div class="card">
                                                           <div class="card-body">
                                                            <div class="product-img">

                                                                <div class="product-ribbon  bg-primary">
                                                                    25% Off
                                                                </div>
                                                               
                                                                <img src="{{asset('auth/assets/images/product/img-11.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                            </div>
                                                            
                                                            <div class="text-center">
                                                                <a href="#" class="text-dark">
                                                                    <h5 class="font-size-18">Home & Office Chair Blue</h5>
                                                                </a>
    
                                                                <h4 class="mt-3 mb-0">$280 <span class="font-size-14 text-muted me-2"><del>$320</del></span></h4>

                                                                <div class="mt-3">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item">
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star-half text-warning"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                           </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-4 col-sm-6">
                                                        <div class="card">
                                                           <div class="card-body">
                                                            <div class="product-img">
                                                               
                                                               
                                                                <img src="{{asset('auth/assets/images/product/img-12.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                                
                                                            </div>
                                                            
                                                            <div class="text-center">
                                                                <a href="#" class="text-dark">
                                                                    <h5 class="font-size-18">Home & Office Chair Black</h5>
                                                                </a>
    
                                                                <h4 class="mt-3 mb-0">$330 </h4>

                                                                <div class="mt-3">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item">
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                           </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-xl-4 col-sm-6">
                                                        <div class="card">
                                                           <div class="card-body">
                                                            <div class="product-img">
                                                               
                                                                <img src="{{asset('auth/assets/images/product/img-14.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                            </div>
                                                            
                                                            <div class="text-center">
                                                                <a href="#" class="text-dark">
                                                                    <h5 class="font-size-18">Home & Office Chair Coffee</h5>
                                                                </a>
    
                                                                <h4 class="mt-3 mb-0">$430</h4>

                                                                <div class="mt-3">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item">
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                           </div>
                                                        </div>
                                                    </div>
    
                                                  

                                                    <div class="col-xl-4 col-sm-6">
                                                        <div class="card">
                                                           <div class="card-body">
                                                            <div class="product-img">
                                                               
                                                               
                                                                <img src="{{asset('auth/assets/images/product/img-13.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                                
                                                            </div>
                                                            
                                                            <div class="text-center">
                                                                <a href="#" class="text-dark">
                                                                    <h5 class="font-size-18">Home & Office Chair Black</h5>
                                                                </a>
    
                                                                <h4 class="mt-3 mb-0">$130 </h4>

                                                                <div class="mt-3">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item">
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                           </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-4 col-sm-6">
                                                        <div class="card">
                                                           <div class="card-body">
                                                            <div class="product-img">

                                                                <div class="product-ribbon  bg-primary">
                                                                    25% Off
                                                                </div>
                                                               
                                                                <img src="{{asset('auth/assets/images/product/img-6.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                            </div>
                                                            
                                                            <div class="text-center">
                                                                <a href="#" class="text-dark">
                                                                    <h5 class="font-size-18">Home & Office Chair Dark</h5>
                                                                </a>
    
                                                                <h4 class="mt-3 mb-0">$220 <span class="font-size-14 text-muted me-2"><del>$320</del></span></h4>

                                                                <div class="mt-3">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item">
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star text-warning"></i>
                                                                            <i class="mdi mdi-star-half text-warning"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                           </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div>
                                                                            <p class="mb-sm-0 mt-2">Page <span class="font-weight-bold">2</span> Of <span class="font-weight-bold">113</span></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="float-sm-end">
                                                                            <ul class="pagination pagination-rounded mb-sm-0">
                                                                                <li class="page-item disabled">
                                                                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                                                </li>
                                                                                <li class="page-item">
                                                                                    <a href="#" class="page-link">1</a>
                                                                                </li>
                                                                                <li class="page-item active">
                                                                                    <a href="#" class="page-link">2</a>
                                                                                </li>
                                                                                <li class="page-item">
                                                                                    <a href="#" class="page-link">3</a>
                                                                                </li>
                                                                                <li class="page-item">
                                                                                    <a href="#" class="page-link">4</a>
                                                                                </li>
                                                                                <li class="page-item">
                                                                                    <a href="#" class="page-link">5</a>
                                                                                </li>
                                                                                <li class="page-item">
                                                                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    
                                                </div>
    
                                                
                                            </div>

                                            
                            </div>
                            <!-- end row -->

                        </div>
        
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

              
                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Morvin.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="{{asset('auth/assets/images/layouts/layout-1.jpg')}}" class="img-fluid img-thumbnail" alt="layout-1">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="{{asset('auth/assets/images/layouts/layout-2.jpg')}}" class="img-fluid img-thumbnail" alt="layout-2">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="{{asset('auth/assets/css/bootstrap-dark.min.css')}}" data-appStyle="{{asset('auth/assets/css/app-dark.min.css')}}">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="{{asset('auth/assets/images/layouts/layout-3.jpg')}}" class="img-fluid img-thumbnail" alt="layout-3">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="{{asset('auth/assets/css/app-rtl.min.css')}}">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('auth/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('auth/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('auth/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('auth/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('auth/assets/libs/node-waves/waves.min.js')}}"></script>

        <!-- Ion Range Slider-->
        <script src="{{asset('auth/assets/libs/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>

        <!-- init js -->
        <script src="{{asset('auth/assets/js/pages/product-filter-range.init.js')}}"></script>

        <script src="{{asset('auth/assets/js/app.js')}}"></script>

    </body>

<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Oct 2024 14:34:25 GMT -->
</html>
