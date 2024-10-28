<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">

               <!-- LOGO -->
         <div class="navbar-brand-box">
            <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="{{ asset('auth/assets/images/logo-sm.png') }}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('auth/assets/images/logo-dark.png') }}" alt="" height="20">
                </span>
            </a>

            <a href="index.html" class="logo logo-light">
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
    <i class="mdi mdi-menu"></i>
</button>

<!-- Sidebar Toggle Script -->
<script>
    document.getElementById('vertical-menu-btn').addEventListener('click', function() {
        const sidebar = document.querySelector('.vertical-menu');
        sidebar.classList.toggle('half-width'); // Toggles half-width class
    });
</script>


          
        </div>

      

      

            <div class="dropdown d-none d-md-block ms-2">
            


   

   

            
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset('auth/assets/images/users/avatar-7.jpg') }}"
                        alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-1">{{ auth()->user()->name }}</span>

                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle-outline font-size-16 align-middle me-1"></i> Profile</a>
                  
                <!-- Check if user is not authenticated (Guest) -->
@guest
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="{{ route('login') }}">
    <i class="mdi mdi-login font-size-16 align-middle me-1"></i> Login
</a>
<a class="dropdown-item" href="{{ route('register') }}">
    <i class="mdi mdi-account-plus font-size-16 align-middle me-1"></i> Register
</a>
@endguest

<!-- Check if user is authenticated -->
@auth
<div class="dropdown-divider"></div>
<a class="dropdown-item text-danger" href="{{ route('logout') }}"
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <i class="mdi mdi-power font-size-16 align-middle me-1 text-danger"></i> Logout
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
@endauth

            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="mdi mdi-cog-outline font-size-20"></i>
                </button>
            </div>
    
        </div>
    </div>

    
</header>

