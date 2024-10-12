<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
    <div class="container">
        <button id="toggleSidebar" class="btn btn-outline-light">
            <i class="fas fa-bars"></i> <!-- Hamburger icon -->
        </button>
        <a href="/" class="navbar-brand mx-auto">
            <img src="{{ asset('assets/img/sample.png') }}" alt="Logo">
        </a>
        <div class="ml-auto text-white">
            @auth
                <div class="dropdown">
                    <button class="btn btn-outline-light dropdown-toggle" type="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle fa-lg mr-2"></i> {{ Auth::user()->name }}
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="fas fa-sign-out-alt mr-2"></i>  Sign Out</a>
                    </div>
                </div>
            @else
                Guest
            @endauth
        </div>
    </div>
</nav>
