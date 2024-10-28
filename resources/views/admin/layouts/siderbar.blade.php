
<style>
    /* CSS for arrow rotation */
    .arrow {
        transition: transform 0.3s ease; /* Smooth transition */
        margin-left: 5px; /* Space between text and arrow */
    }
    
    .sub-menu {
        display: none; /* Initially hide the sub-menu */
    }
    
    /* Additional styles for smooth animations */
    .vertical-menu {
        transition: width 0.3s ease; /* Smooth transition for width */
    }
    
    /* Rotate arrow when submenu is open */
    .sub-menu.active + .dropdown-toggle .arrow {
        transform: rotate(180deg);
    }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">
        <div data-simplebar class="h-100">
            <div class="user-sidebar text-center">
                <div class="dropdown">
                    <div class="user-img">
                        <img src="{{ asset('auth/assets/images/users/avatar-7.jpg') }}" alt="" class="rounded-circle">
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
                <ul class="list-unstyled" id="side-menu">
                    <li class="menu-title">Menu</li>
    
                    <li>
                        <a href="index.html" class="waves-effect">
                            <i class="dripicons-home"></i>
                            <span class="badge rounded-pill bg-info float-end"></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
    
                    <li>
                        <a href="javascript:void(0);" class="dropdown-toggle waves-effect">
                            <i class="dripicons-mail"></i>
                            <span>Services</span>
                            <span class="arrow" style="float: right;">&#x25BC;</span> <!-- Arrow icon at the end -->
                        </a>
                        <ul class="sub-menu">
                            <li><a href="email-inbox.html">Create Services</a></li>
                            <li><a href="email-read.html">Show Services</a></li>
                        </ul>
                    </li>
    
                    {{-- Uncomment this block if needed
                    <li>
                        <a href="javascript:void(0);" class="dropdown-toggle waves-effect">
                            <i class="dripicons-suitcase"></i>
                            <span>UI Elements</span>
                            <span class="arrow" style="float: right;">&#x25BC;</span> <!-- Arrow icon at the end -->
                        </a>
                        <ul class="sub-menu">
                            <li><a href="ui-alerts.html">Alerts</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-cards.html">Cards</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                            <li><a href="ui-rating.html">Rating</a></li>
                        </ul>
                    </li>
                    --}}
                </ul>
            </div>
        </div>
    </div>
    <!-- ========== Left Sidebar End ========== -->
    
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Custom Script for Dropdown Toggle -->
    <script>
        $(document).ready(function() {
            // Toggle the visibility of sub-menus when the parent <a> is clicked
            $('#side-menu .dropdown-toggle').on('click', function(e) {
                e.preventDefault();
    
                // Close all other sub-menus
                $('#side-menu .sub-menu').slideUp().removeClass('active');
                $('#side-menu .arrow').css('transform', 'rotate(0deg)'); // Reset arrow position
    
                // Open the clicked submenu if it’s not already open
                const $submenu = $(this).next('.sub-menu');
                if (!$submenu.is(':visible')) {
                    $submenu.slideDown().addClass('active'); // Show submenu and mark it as active
                    $(this).find('.arrow').css('transform', 'rotate(180deg)'); // Rotate arrow
                }
            });
        });
    </script>
    