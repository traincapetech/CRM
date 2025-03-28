@extends('layouts.app')

@section('content')
<div class="container py-5">
    <!-- Hero Section -->
    <div class="row mb-5">
        <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-4 fw-bold mb-4">About Our Company</h1>
            <p class="lead text-muted mb-4">We're dedicated to creating powerful CRM solutions that help businesses grow and succeed.</p>
            <div class="d-flex justify-content-center">
                <a href="/contact" class="btn btn-primary me-2">Contact Us</a>
                <a href="/dashboard" class="btn btn-outline-secondary">Explore Platform</a>
            </div>
        </div>
    </div>

    <!-- Our Story Section -->
    <div class="row mb-5">
        <div class="col-md-6">
            <img src="https://via.placeholder.com/600x400" alt="Our Office" class="img-fluid rounded shadow-sm">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold mb-4">Our Story</h2>
            <p>Founded in 2015, our CRM company was born out of a passion for helping businesses build better relationships with their customers. We noticed that many existing CRM solutions were either too complex or lacked the essential features that modern businesses need.</p>
            <p>What started as a small project has grown into a comprehensive CRM platform that serves thousands of businesses worldwide. Our team has expanded from 3 founders to over 50 talented individuals who share our vision of making customer relationship management accessible and effective for businesses of all sizes.</p>
            <p>Today, we continue to innovate and improve our platform based on customer feedback and industry trends, ensuring that our users always have access to the best tools for managing their customer relationships.</p>
        </div>
    </div>

    <!-- Our Mission Section -->
    <div class="row mb-5 bg-light py-5 rounded">
        <div class="col-md-6 order-md-2">
            <img src="https://via.placeholder.com/600x400" alt="Our Mission" class="img-fluid rounded shadow-sm">
        </div>
        <div class="col-md-6 order-md-1">
            <h2 class="fw-bold mb-4">Our Mission</h2>
            <p>Our mission is to empower businesses with intuitive and powerful CRM tools that enhance customer relationships, streamline operations, and drive growth.</p>
            <div class="mt-4">
                <div class="d-flex mb-3">
                    <div class="me-3">
                        <i class="fas fa-check-circle text-primary fa-2x"></i>
                    </div>
                    <div>
                        <h5>Simplify Customer Management</h5>
                        <p class="text-muted">We make it easy to track, nurture, and manage customer relationships from initial contact to long-term loyalty.</p>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="me-3">
                        <i class="fas fa-chart-line text-primary fa-2x"></i>
                    </div>
                    <div>
                        <h5>Drive Business Growth</h5>
                        <p class="text-muted">Our tools help businesses identify opportunities, close deals faster, and increase revenue through data-driven insights.</p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="me-3">
                        <i class="fas fa-users text-primary fa-2x"></i>
                    </div>
                    <div>
                        <h5>Foster Team Collaboration</h5>
                        <p class="text-muted">We provide collaborative features that unite teams across departments for better customer service and satisfaction.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="row mb-5">
        <div class="col-12 text-center mb-4">
            <h2 class="fw-bold">Meet Our Leadership Team</h2>
            <p class="text-muted">The talented individuals who drive our company forward</p>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100 text-center shadow-sm border-0">
                <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="Team Member">
                <div class="card-body">
                    <h5 class="card-title">John Doe</h5>
                    <p class="card-text text-muted">CEO & Co-Founder</p>
                    <p class="small">With over 15 years of experience in software development and business management, John leads our company vision and strategy.</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-primary me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-primary"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100 text-center shadow-sm border-0">
                <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="Team Member">
                <div class="card-body">
                    <h5 class="card-title">Jane Smith</h5>
                    <p class="card-text text-muted">CTO & Co-Founder</p>
                    <p class="small">Jane is the technical genius behind our platform, with expertise in cloud infrastructure and software architecture.</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-primary me-2"><i class="fab fa-github"></i></a>
                        <a href="#" class="text-primary"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100 text-center shadow-sm border-0">
                <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="Team Member">
                <div class="card-body">
                    <h5 class="card-title">Michael Johnson</h5>
                    <p class="card-text text-muted">COO</p>
                    <p class="small">Michael oversees our daily operations and ensures that we deliver exceptional service to all our clients.</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-primary me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-primary"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100 text-center shadow-sm border-0">
                <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="Team Member">
                <div class="card-body">
                    <h5 class="card-title">Sarah Wilson</h5>
                    <p class="card-text text-muted">CMO</p>
                    <p class="small">Sarah leads our marketing efforts, bringing our CRM solution to businesses that can benefit from our platform.</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-primary me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-primary"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="row text-center py-5 bg-primary text-white rounded mb-5">
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <div class="px-4">
                <i class="fas fa-users fa-3x mb-3"></i>
                <h2 class="fw-bold">5,000+</h2>
                <p class="mb-0">Clients Worldwide</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <div class="px-4">
                <i class="fas fa-globe fa-3x mb-3"></i>
                <h2 class="fw-bold">30+</h2>
                <p class="mb-0">Countries Served</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <div class="px-4">
                <i class="fas fa-code fa-3x mb-3"></i>
                <h2 class="fw-bold">1M+</h2>
                <p class="mb-0">Lines of Code</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <div class="px-4">
                <i class="fas fa-coffee fa-3x mb-3"></i>
                <h2 class="fw-bold">&#8734;</h2>
                <p class="mb-0">Cups of Coffee</p>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="row">
        <div class="col-md-10 mx-auto text-center">
            <div class="card border-0 shadow p-5">
                <h3 class="mb-3">Ready to Transform Your Customer Relationships?</h3>
                <p class="text-muted mb-4">Join thousands of businesses that trust our CRM platform to manage their customer relationships.</p>
                <div class="d-flex justify-content-center">
                    <a href="/register" class="btn btn-primary me-2">Get Started</a>
                    <a href="/contact" class="btn btn-outline-secondary">Contact Sales</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection