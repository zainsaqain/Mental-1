<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Toggle Example</title>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Full-width sidebar */
        .vertical-menu {
            width: 250px; /* Default full width */
            height: 100vh; /* Full height */
            background-color: inherit; /* Keep original color */
            transition: width 0.3s ease; /* Smooth transition when resizing */
        }

        /* Half-width collapsed sidebar */
        .vertical-menu.collapsed {
            width: 70px; /* Collapsed width */
        }

        /* Hide text when sidebar is collapsed */
        .vertical-menu.collapsed .user-info,
        .vertical-menu.collapsed .menu-title,
        .vertical-menu.collapsed .sub-menu,
        .vertical-menu.collapsed ul li a span {
            display: none;
        }

        /* Adjust icons when sidebar is collapsed */
        .vertical-menu.collapsed ul li a i {
            font-size: 24px;
            margin: 0;
        }

        /* Sidebar icons in full mode */
        .vertical-menu ul li a i {
            margin-right: 10px; /* Space between icon and text */
        }

        /* Sub-menu stays hidden initially */
        .sub-menu {
            display: none; /* Initially hide the sub-menu */
        }

        /* CSS for arrow rotation */
        .arrow {
            transition: transform 0.3s ease; /* Smooth transition */
            margin-left: 5px; /* Space between text and arrow */
        }

        /* Rotate arrow when submenu is open */
        .sub-menu:visible + .dropdown-toggle .arrow {
            transform: rotate(180deg);
        }
    </style>
</head>
<body>

    <!-- Sidebar Toggle Button -->
    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
        <i class="mdi mdi-menu"></i>
    </button>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">
        <div data-simplebar class="h-100">
            <div class="user-sidebar text-center">
                <div class="dropdown">
                    <div class="user-img">
                        <img src="{{asset('auth/assets/images/users/avatar-7.jpg') }}" alt="" class="rounded-circle">
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

                </ul>
            </div>
        </div>
    </div>
    <!-- ========== Left Sidebar End ========== -->

    <!-- Custom Script for Dropdown Toggle -->
    <script>
        $(document).ready(function() {
            // Toggle the visibility of sub-menus when the parent <a> is clicked
            $('#side-menu .dropdown-toggle').on('click', function(e) {
                e.preventDefault();
                
                // Close all other sub-menus
                $('#side-menu .sub-menu').slideUp();
                $('#side-menu .arrow').css('transform', 'rotate(0deg)'); // Reset arrow position
                
                // Open the clicked submenu if it’s not already open
                const $submenu = $(this).next('.sub-menu');
                if (!$submenu.is(':visible')) {
                    $submenu.slideDown();
                    $(this).find('.arrow').css('transform', 'rotate(180deg)'); // Rotate arrow
                }
            });
        });
    </script>

    <!-- Sidebar Toggle Script -->
    <script>
        document.getElementById('vertical-menu-btn').addEventListener('click', function() {
            const sidebar = document.querySelector('.vertical-menu');
            sidebar.classList.toggle('collapsed'); // Toggle between full and collapsed sidebar
        });
    </script>

</body>
</html>
