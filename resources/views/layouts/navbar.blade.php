<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm navbar-custom px-3">

    <!-- Sidebar toggle desktop -->
    <button class="btn btn-dark d-none d-md-inline" id="toggleSidebar">
        <i class="bx bx-menu"></i>
    </button>

    <!-- Sidebar toggle mobile -->
    <button class="btn btn-dark d-md-none" id="toggleMobileSidebar">
        <i class="bx bx-menu"></i>
    </button>

    <div class="ms-auto d-flex align-items-center">

        <!-- Tombol Logout (Font Awesome 5 Free) -->
        <a href="{{ route('logout') }}" 
           class="btn btn-outline-danger ms-3"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
        </a>

        <!-- Form logout tersembunyi -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

    </div>

</nav>
