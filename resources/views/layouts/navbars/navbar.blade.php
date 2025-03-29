<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top shadow">
    <div class="container-fluid">
        @auth
        <button class="btn btn-link text-white me-2 d-lg-none" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>
        @endauth
        <a class="navbar-brand fw-bold d-flex align-items-center" href="">
     
            {{-- <span>CRM System</span> --}}
        <img src="{{asset('assets/image/traincape_logo.png')}}" alt="" width="90" height="90">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') || request()->is('home') ? 'active fw-bold' : '' }}" href="/">
                        <i class="fas fa-home me-1"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard') ? 'active fw-bold' : '' }}" href="/dashboard">
                        <i class="fas fa-tachometer-alt me-1"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('leads*') ? 'active fw-bold' : '' }}" href="/leads">
                        <i class="fas fa-funnel-dollar me-1"></i> Leads
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('client*') ? 'active fw-bold' : '' }}" href="/client">
                        <i class="fas fa-user-tie me-1"></i> Clients
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('sales*') ? 'active fw-bold' : '' }}" href="/sales">
                        <i class="fas fa-chart-line me-1"></i> Sales
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('tasks*') ? 'active fw-bold' : '' }}" href="/tasks">
                        <i class="fas fa-clipboard-list me-1"></i> Tasks
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-info-circle me-1"></i> About
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/about">About Us</a></li>
                        <li><a class="dropdown-item" href="/contact">Contact Us</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/privacy">Privacy Policy</a></li>
                        <li><a class="dropdown-item" href="/terms">Terms of Service</a></li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex">
                <form class="d-flex me-2">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="Search..." aria-label="Search">
                        <button class="btn btn-outline-light" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <div class="dropdown">
                    <button class="btn btn-outline-light dropdown-toggle d-flex align-items-center" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle me-1"></i> 
                        <span class="d-none d-sm-inline">User</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userDropdown">
                        <li><h6 class="dropdown-header">User Account</h6></li>
                        <li><a class="dropdown-item" href="/profile"><i class="fas fa-id-card me-2"></i>Profile</a></li>
                        <li><a class="dropdown-item" href="/settings"><i class="fas fa-cog me-2"></i>Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="/logout"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
