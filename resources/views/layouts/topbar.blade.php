<nav class="navbar navbar-expand navbar-dark topbar mb-4 static-top shadow" id="topbarCustom">



    <ul class="navbar-nav ms-auto">
        <div class="topbar-divider d-none d-sm-block"></div>

        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle text-white" href="#" id="userDropdown" role="button"
               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="me-2 d-none d-lg-inline small">
                    {{ session('user')->nm_user ?? 'Guest' }}
                </span>
                <img class="img-profile rounded-circle" width="32"
                     src="https://via.placeholder.com/32">
            </a>
            <div class="dropdown-menu dropdown-menu-end shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
<a class="dropdown-item" href="{{ route('logout') }}">
    <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i> Logout
</a>

            </div>
        </li>
    </ul>
</nav>

<style>
    #topbarCustom {
        background-color: #1a001f !important;
    }

    #sidebarToggleTop {
        background-color: #510151;
        border: none;
    }
    #sidebarToggleTop:hover {
        background-color: #6a056a;
    }

    #topbarCustom .nav-link,
    #topbarCustom .nav-link span,
    #topbarCustom .fa {
        color: #ffffff !important;
    }
</style>
