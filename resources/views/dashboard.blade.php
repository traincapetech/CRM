@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-8">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h1 class="card-title display-4">Welcome to CRM System</h1>
                        <p class="lead">The all-in-one solution for managing your customer relationships.</p>
                        <hr>
                        <p>Our CRM system helps you streamline your business processes and improve customer relations with powerful tools and features.</p>
                        <a href="/dashboard" class="btn btn-primary">Go to Dashboard</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-users me-2"></i>Lead Management</h5>
                                <p class="card-text">Efficiently capture, track, and nurture leads through your sales pipeline.</p>
                                <a href="/leads" class="btn btn-sm btn-outline-primary">Manage Leads</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-handshake me-2"></i>Client Relationships</h5>
                                <p class="card-text">Build stronger relationships with your clients with better communication tools.</p>
                                <a href="/client" class="btn btn-sm btn-outline-primary">View Clients</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-chart-line me-2"></i>Sales Tracking</h5>
                                <p class="card-text">Monitor your sales performance with real-time dashboards and reports.</p>
                                <a href="/sales" class="btn btn-sm btn-outline-primary">View Sales</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-tasks me-2"></i>Task Management</h5>
                                <p class="card-text">Stay organized with task management and activity tracking features.</p>
                                <a href="/tasks" class="btn btn-sm btn-outline-primary">Manage Tasks</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Quick Stats</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>Active Leads</div>
                            <div class="badge bg-info">#</div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>Active Clients</div>
                            <div class="badge bg-success">#</div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>Pending Tasks</div>
                            <div class="badge bg-warning">#</div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>Recent Sales</div>
                            <div class="badge bg-primary">#</div>
                        </div>
                    </div>
                </div>
                
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">Latest Updates</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <small class="text-muted">Today</small>
                            <div>New client registration - ABC Corp</div>
                        </div>
                        <div class="mb-3">
                            <small class="text-muted">Yesterday</small>
                            <div>Closed deal with XYZ Inc. ($15,000)</div>
                        </div>
                        <div>
                            <small class="text-muted">March 25, 2023</small>
                            <div>Updated sales forecast for Q2</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection