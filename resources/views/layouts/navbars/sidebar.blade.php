<div class="sidebar py-3">
    <div class="d-flex flex-column h-100">
        <div class="text-center p-4 border-bottom border-secondary">
            <a href="/" class="d-flex align-items-center justify-content-center text-decoration-none text-white">
                <i class="fas fa-tasks fa-2x me-2"></i>
                <span class="fs-4 fw-bold">CRM System</span>
            </a>
        </div>
        
        <div class="mt-3 px-3">
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item mb-1">
                    <a href="/dashboard" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                        <i class="fas fa-tachometer-alt me-2"></i>
                        Dashboard
                    </a>
                </li>
                
                <li class="nav-item mb-1">
                    <a href="/leads" class="nav-link {{ request()->is('leads*') ? 'active' : '' }}">
                        <i class="fas fa-funnel-dollar me-2"></i>
                        Leads Management
                    </a>
                </li>
                
                <li class="nav-item mb-1">
                    <a href="/client" class="nav-link {{ request()->is('client*') ? 'active' : '' }}">
                        <i class="fas fa-user-tie me-2"></i>
                        Clients & Contacts
                    </a>
                </li>
                
                <li class="nav-item mb-1">
                    <a href="/sales" class="nav-link {{ request()->is('sales*') ? 'active' : '' }}">
                        <i class="fas fa-chart-line me-2"></i>
                        Sales & Deals
                    </a>
                </li>
                
                <li class="nav-item mb-1">
                    <a href="/tasks" class="nav-link {{ request()->is('tasks*') ? 'active' : '' }}">
                        <i class="fas fa-clipboard-list me-2"></i>
                        Tasks & Activities
                    </a>
                </li>
                
                <li class="nav-item mb-1">
                    <a href="/calendar" class="nav-link {{ request()->is('calendar*') ? 'active' : '' }}">
                        <i class="fas fa-calendar-alt me-2"></i>
                        Calendar
                    </a>
                </li>
                
                <li class="nav-item mb-1">
                    <a href="/email" class="nav-link {{ request()->is('email*') ? 'active' : '' }}">
                        <i class="fas fa-envelope me-2"></i>
                        Email Integration
                    </a>
                </li>
                
                <li class="nav-item mb-1">
                    <a href="/reports" class="nav-link {{ request()->is('reports*') ? 'active' : '' }}">
                        <i class="fas fa-chart-bar me-2"></i>
                        Reports & Analytics
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="mt-auto p-3 border-top border-secondary">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div class="small text-white-50">Logged in as</div>
                    <div class="text-white">Admin User</div>
                </div>
                <div>
                    <a href="/settings" class="btn btn-outline-light btn-sm" title="Settings">
                        <i class="fas fa-cog"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
