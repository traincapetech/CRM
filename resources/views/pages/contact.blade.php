@extends('layouts.app')

@section('content')
<div class="container py-5">
    <!-- Hero Section -->
    <div class="row mb-5">
        <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-4 fw-bold mb-4">Get in Touch</h1>
            <p class="lead text-muted">Have questions about our CRM system? We're here to help.</p>
        </div>
    </div>

    <div class="row">
        <!-- Contact Form -->
        <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-5">
                    <h2 class="fw-bold mb-4">Send us a Message</h2>
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="Enter your first name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email address" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                        </div>
                        <div class="mb-3">
                            <label for="company" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="company" placeholder="Enter your company name">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <select class="form-select" id="subject" required>
                                <option value="" selected disabled>Select a subject</option>
                                <option value="Sales Inquiry">Sales Inquiry</option>
                                <option value="Technical Support">Technical Support</option>
                                <option value="Billing Question">Billing Question</option>
                                <option value="Feature Request">Feature Request</option>
                                <option value="Partnership Opportunity">Partnership Opportunity</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Enter your message" required></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="privacyCheck" required>
                            <label class="form-check-label small" for="privacyCheck">
                                I agree to the <a href="/privacy">privacy policy</a> and consent to being contacted regarding my inquiry.
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="col-lg-5">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <h3 class="fw-bold mb-3">Contact Information</h3>
                    <p class="text-muted mb-4">We're always ready to help with any questions about our CRM platform. Reach out to us through any of these channels.</p>
                    
                    <div class="d-flex mb-4">
                        <div class="me-3">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Email Us</h5>
                            <p class="text-muted mb-0">info@crmcompany.com</p>
                            <p class="text-muted mb-0">support@crmcompany.com</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-4">
                        <div class="me-3">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <i class="fas fa-phone"></i>
                            </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Call Us</h5>
                            <p class="text-muted mb-0">+1 (234) 567-8900</p>
                            <p class="text-muted mb-0">Mon-Fri, 9AM-6PM EST</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-4">
                        <div class="me-3">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <i class="fas fa-comments"></i>
                            </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Live Chat</h5>
                            <p class="text-muted mb-0">Available 24/7 on our website</p>
                            <p class="text-muted mb-0"><a href="#" class="text-primary">Start a chat now</a></p>
                        </div>
                    </div>
                    
                    <div class="d-flex">
                        <div class="me-3">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Visit Us</h5>
                            <p class="text-muted mb-0">123 CRM Street, Business Park</p>
                            <p class="text-muted mb-0">San Francisco, CA 94107</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="fw-bold mb-3">Follow Us</h3>
                    <p class="text-muted mb-4">Stay updated with our latest news and updates on social media.</p>
                    <div class="d-flex">
                        <a href="#" class="btn btn-outline-primary me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-outline-primary me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-outline-primary me-2"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="btn btn-outline-primary"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Global Offices Section -->
    <div class="row mt-5">
        <div class="col-12 text-center mb-4">
            <h2 class="fw-bold">Our Global Offices</h2>
            <p class="text-muted">Find us in cities around the world</p>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <img src="https://via.placeholder.com/400x200" alt="San Francisco Office" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">San Francisco <span class="badge bg-primary">Headquarters</span></h5>
                    <p class="card-text">123 CRM Street, Business Park<br>San Francisco, CA 94107</p>
                    <p class="card-text"><i class="fas fa-phone me-2 text-primary"></i>+1 (234) 567-8900</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <img src="https://via.placeholder.com/400x200" alt="New York Office" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">New York</h5>
                    <p class="card-text">456 Tech Avenue, Suite 500<br>New York, NY 10001</p>
                    <p class="card-text"><i class="fas fa-phone me-2 text-primary"></i>+1 (345) 678-9012</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <img src="https://via.placeholder.com/400x200" alt="London Office" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">London</h5>
                    <p class="card-text">789 Business Road<br>London, UK SW1A 1AA</p>
                    <p class="card-text"><i class="fas fa-phone me-2 text-primary"></i>+44 20 1234 5678</p>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="row mt-5">
        <div class="col-lg-8 mx-auto">
            <h2 class="fw-bold text-center mb-4">Frequently Asked Questions</h2>
            <div class="accordion" id="contactFAQ">
                <div class="accordion-item border-0 mb-3 shadow-sm">
                    <h2 class="accordion-header" id="heading1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            How quickly can I expect a response to my inquiry?
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#contactFAQ">
                        <div class="accordion-body">
                            We aim to respond to all inquiries within 24 hours during business days. For urgent matters, we recommend using our live chat feature for immediate assistance.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item border-0 mb-3 shadow-sm">
                    <h2 class="accordion-header" id="heading2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            Do you offer product demonstrations?
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#contactFAQ">
                        <div class="accordion-body">
                            Yes, we offer personalized product demonstrations. You can request a demo through our contact form or by emailing info@crmcompany.com with your preferred date and time.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item border-0 mb-3 shadow-sm">
                    <h2 class="accordion-header" id="heading3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            How can I get technical support for the CRM platform?
                        </button>
                    </h2>
                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#contactFAQ">
                        <div class="accordion-body">
                            For technical support, please email support@crmcompany.com or use the support portal within your CRM account. Our technical support team is available Monday-Friday, 24 hours a day.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection