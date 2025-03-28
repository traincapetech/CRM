<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'CRM System') }}</title>
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
        
        <!-- Custom Styles -->
        <style>
            body {
                font-family: 'Poppins', sans-serif;
                background-color: #f8f9fa;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }
            .sidebar {
                background-color: #343a40;
                color: #fff;
                min-height: 100vh;
                position: fixed;
                top: 0;
                left: 0;
                width: 250px;
                z-index: 100;
                padding-top: 60px;
                overflow-y: auto;
                transition: all 0.3s;
            }
            .sidebar .nav-link {
                color: rgba(255, 255, 255, 0.8);
                padding: 0.75rem 1rem;
                border-radius: 0.25rem;
                margin-bottom: 0.25rem;
            }
            .sidebar .nav-link:hover {
                color: #fff;
                background-color: rgba(255, 255, 255, 0.1);
            }
            .sidebar .nav-link.active {
                color: #fff;
                background-color: #007bff;
            }
            .content-wrapper {
                flex: 1;
            }
            .main-content {
                padding-top: 70px;
                min-height: calc(100vh - 60px - 400px); /* viewport height minus navbar and footer */
            }
            .with-sidebar {
                margin-left: 250px;
            }
            .navbar {
                box-shadow: 0 2px 5px rgba(0,0,0,0.1);
                z-index: 1030;
            }
            .card {
                box-shadow: 0 4px 6px rgba(0,0,0,0.05);
                border: none;
                margin-bottom: 1.5rem;
                border-radius: 0.5rem;
            }
            .card-header {
                background-color: #fff;
                border-bottom: 1px solid rgba(0,0,0,0.05);
                font-weight: 600;
            }
            @media (max-width: 991.98px) {
                .sidebar {
                    margin-left: -250px;
                }
                .sidebar.show {
                    margin-left: 0;
                }
                .with-sidebar {
                    margin-left: 0;
                }
            }
            .btn-primary {
                background-color: #4e73df;
                border-color: #4e73df;
            }
            .btn-primary:hover {
                background-color: #2e59d9;
                border-color: #2653d4;
            }
            .bg-primary {
                background-color: #4e73df !important;
            }
            .text-primary {
                color: #4e73df !important;
            }
            .footer {
                margin-top: auto;
            }
        </style>
    </head>
    <body>
        <!-- Navbar always visible -->
        @include('layouts.navbars.navbar')
        
        <div class="content-wrapper">
            @auth()
                <!-- Sidebar for authenticated users -->
                <div class="sidebar" id="sidebar">
                    @include('layouts.navbars.sidebar')
                </div>
                <!-- Main content with sidebar margin -->
                <div class="main-content with-sidebar">
                    <div class="container-fluid p-4">
                        @yield('content')
                    </div>
                </div>
            @else
                <!-- Main content without sidebar margin -->
                <div class="main-content">
                    <div class="container-fluid p-4">
                        @yield('content')
                    </div>
                </div>
            @endauth
        </div>
        
        <!-- Footer always visible -->
        @include('layouts.footer')

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        
        <!-- Custom Scripts -->
        <script>
            $(document).ready(function() {
                // Toggle sidebar on mobile
                $('#sidebarToggle').on('click', function() {
                    $('#sidebar').toggleClass('show');
                });
                
                // Close sidebar when clicking outside on mobile
                $(document).click(function(e) {
                    var sidebar = $("#sidebar");
                    var toggleBtn = $("#sidebarToggle");
                    if (!sidebar.is(e.target) && sidebar.has(e.target).length === 0 && 
                        !toggleBtn.is(e.target) && toggleBtn.has(e.target).length === 0) {
                        sidebar.removeClass('show');
                    }
                });
            });
        </script>
        
        @stack('js')
    </body>
</html>
