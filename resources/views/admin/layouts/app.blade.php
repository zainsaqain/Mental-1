<!-- admin/layouts/app.blade.php -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Admin Panel" name="description" />
    <meta content="Your Name" name="author" />
    <link rel="shortcut icon" href="{{ asset('auth/assets/images/favicon.ico') }}">

    <!-- Add your CSS links here -->
    <link href="{{ asset('auth/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('auth/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('auth/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">

</head>

<body>
    <div id="layout-wrapper">
        <!-- Sidebar -->
        <div class="vertical-menu">
            <div data-simplebar class="h-100">
                <!-- Sidebar Header -->
                @include('admin.layouts.header')

                <div class="user-sidebar text-center">
                    @include('admin.layouts.right')
                </div>

                <!-- Sidemenu -->
                <div id="sidebar-menu">
                    @include('admin.layouts.siderbar')
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        
        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
    </div>
    <!-- Sidebar Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sidebar = document.querySelector('.vertical-menu');
            const subMenuLinks = document.querySelectorAll('.has-arrow');

            // Toggle submenus on click
            subMenuLinks.forEach(link => {
                link.addEventListener('click', function (event) {
                    event.preventDefault();
                    const subMenu = link.nextElementSibling;
                    
                    // Close all other submenus
                    document.querySelectorAll('.sub-menu').forEach(menu => {
                        if (menu !== subMenu) menu.classList.remove('show');
                    });

                    // Toggle the clicked submenu
                    subMenu.classList.toggle('show');
                });
            });

            // Close submenus on outside click
            document.addEventListener('click', function (event) {
                const isClickInside = sidebar.contains(event.target);
                if (!isClickInside) {
                    document.querySelectorAll('.sub-menu.show').forEach(menu => {
                        menu.classList.remove('show');
                    });
                }
            });
        });
    </script>
    <!-- Add your JS files here -->
    <script src="{{ asset('auth/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('auth/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="auth/assets/js/app.js'"></script>

    
</body>

</html>
