@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <!-- Hero Section -->
    <section class="position-relative">
        <div class="position-relative">
            <img src="{{ asset('assets/image/about-us-Bg.jpg') }}" alt="About Traincape Technology" class="w-100" style="height: 400px; object-fit: cover;">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(0,0,0,0.5);">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bold mb-3">About Traincape Technology</h1>
                    <p class="lead">Empowering careers through professional IT training and certification programs</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="bg-white shadow-sm py-3">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/home" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active">About Us</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Our Story Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Story</h2>
                <div class="mx-auto bg-primary" style="width: 80px; height: 3px;"></div>
                <p class="text-muted mt-3">The journey of Traincape Technology started with a vision to transform IT education</p>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="text-center">
                        <img src="{{ asset('assets/image/Parichay-Sir.jpeg') }}" alt="Founder of Traincape Technology" class="rounded-circle mb-3" style="width: 250px; height: 250px; object-fit: cover;">
                        <h3 class="h4">Parichay Singh Rana</h3>
                        <p class="text-muted">Founder & CEO</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <p><strong>Traincape Technology</strong> was founded in 2021 by Parichay Singh Rana with a vision to revolutionize the way businesses approach technology. With years of experience in the industry, we recognized the need for a company that could provide tailored, reliable, and cutting-edge tech solutions.</p>
                    <p>Our mission is to empower businesses by leveraging the latest technologies and innovations to drive growth, efficiency, and innovation. Our team of experts has extensive experience in developing and implementing custom software solutions, mobile apps, and web applications that meet the unique needs of our clients.</p>
                    <p>Today, we are proud to have trained numerous professionals who have gone on to secure roles with leading tech companies. Our partnerships with major certification bodies enable us to offer comprehensive training programs that are recognized globally.</p>
                </div>
            </div>
        </div>
    </section>

     <!-- Vision, Mission, Values -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Foundation</h2>
                <div class="mx-auto bg-primary" style="width: 80px; height: 3px;"></div>
                <p class="text-muted mt-3">The principles that guide everything we do at Traincape Technology</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-star text-primary mb-3" style="font-size: 40px;"></i>
                            <h3 class="h4">Our Vision</h3>
                            <p>To be the premier provider of IT education, recognized for excellence in training and producing industry-ready professionals who lead technological innovation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-chalkboard-teacher text-primary mb-3" style="font-size: 40px;"></i>
                            <h3 class="h4">Our Mission</h3>
                            <p>To empower individuals through comprehensive IT training programs that combine theoretical knowledge with practical skills, enabling them to excel in their careers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-handshake text-primary mb-3" style="font-size: 40px;"></i>
                            <h3 class="h4">Our Values</h3>
                            <p>Excellence in education, integrity in our approach, innovation in our methods, and a commitment to the success of every student who trusts us with their professional development.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Services</h2>
                <div class="mx-auto bg-primary" style="width: 80px; height: 3px;"></div>
                <p class="text-muted mt-3">Comprehensive IT training and technology solutions to advance your career</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-globe text-primary mb-3" style="font-size: 40px;"></i>
                            <h3 class="h4">Website Development</h3>
                            <p>Custom website solutions tailored to your business needs, from simple informational sites to complex e-commerce platforms and web applications.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-3" style="font-size: 40px;"></i>
                            <h3 class="h4">App Development</h3>
                            <p>Cross-platform mobile applications that provide seamless user experiences across iOS and Android devices, built with the latest technologies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-certificate text-primary mb-3" style="font-size: 40px;"></i>
                            <h3 class="h4">Certification Vouchers</h3>
                            <p>Discounted exam vouchers for major IT certifications, making the path to professional certification more affordable and accessible.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-tools text-primary mb-3" style="font-size: 40px;"></i>
                            <h3 class="h4">Internship Programs</h3>
                            <p>Gain practical experience through our structured internship programs, working on real-world projects under the guidance of experienced professionals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-laptop-code text-primary mb-3" style="font-size: 40px;"></i>
                            <h3 class="h4">Professional Training</h3>
                            <p>Instructor-led training in various IT domains, including networking, cybersecurity, cloud computing, and software development.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-certificate text-primary mb-3" style="font-size: 40px;"></i>
                            <h3 class="h4">Free Assessment</h3>
                            <p>Comprehensive skill assessment to identify strengths and areas for improvement, helping you chart the best path for your professional development.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Why Choose Traincape Technology</h2>
                <div class="mx-auto bg-primary" style="width: 80px; height: 3px;"></div>
                <p class="text-muted mt-3">What sets us apart from other providers</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="d-flex align-items-start mb-4">
                        <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                        <div>
                            <h3 class="h5">Industry-Experienced Instructors</h3>
                            <p class="text-muted mb-0">Learn from professionals with real-world experience in their fields</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start mb-4">
                        <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                        <div>
                            <h3 class="h5">Hands-On Learning</h3>
                            <p class="text-muted mb-0">Practice-oriented training with real-world projects and exercises</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start mb-4">
                        <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                        <div>
                            <h3 class="h5">Career Support</h3>
                            <p class="text-muted mb-0">Resume assistance, interview preparation, and job placement support</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start mb-4">
                        <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                        <div>
                            <h3 class="h5">Custom Development</h3>
                            <p class="text-muted mb-0">Tailored web and mobile applications designed to meet your specific business needs</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start mb-4">
                        <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                        <div>
                            <h3 class="h5">Modern Technologies</h3>
                            <p class="text-muted mb-0">Development using the latest frameworks and technologies for optimal performance</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start mb-4">
                        <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                        <div>
                            <h3 class="h5">Ongoing Support</h3>
                            <p class="text-muted mb-0">Continuous maintenance and updates to ensure your applications stay current</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Certification Partners</h2>
                <div class="mx-auto bg-primary" style="width: 80px; height: 3px;"></div>
                <p class="text-muted mt-3">Prepare for globally recognized certifications with our authorized training programs</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <h3 class="h4">CompTIA</h3>
                            <p>Prepare for core IT certifications like A+, Network+, Security+, and more with our CompTIA authorized training materials and experienced instructors.</p>
                            <a href="/comptia" class="btn btn-primary">View Courses</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <h3 class="h4">PECB</h3>
                            <p>Get certified in ISO standards, risk management, and information security with our PECB-accredited training programs.</p>
                            <a href="/pecb" class="btn btn-primary">View Courses</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <h3 class="h4">Microsoft</h3>
                            <p>Master Microsoft technologies with our training programs for Azure, Microsoft 365, and developer certifications.</p>
                            <a href="/microsoft" class="btn btn-primary">View Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Ready to Advance Your IT Career?</h2>
            <p class="lead mb-4">Whether you're looking to get certified, enhance your skills, or completely change your career path, we're here to help you succeed.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="/contact" class="btn btn-light">Contact Us</a>
                <a href="/courses" class="btn btn-outline-light">Explore Courses</a>
            </div>
        </div>
    </section>
</div>
@endsection