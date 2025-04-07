@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <!-- Breadcrumb -->
    <div class="bg-white shadow-sm py-3">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/home" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <!-- Contact Information -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <h3 class="h4 mb-4">Contact Information</h3>
                        
                        <div class="mb-4">
                            <h5 class="h6 text-primary">Office Address</h5>
                            <p class="mb-0">Khandolia Plaza, 118/C, Dabri - Palam Rd,</p>
                            <p class="mb-0">Vaishali Colony, Dashrath Puri,</p>
                            <p class="mb-0">New Delhi, Delhi, 110045</p>
                        </div>

                        <div class="mb-4">
                            <h5 class="h6 text-primary">Contact Details</h5>
                            <p class="mb-2">
                                <i class="fas fa-phone me-2"></i>
                                <a href="https://wa.me/+916280281505" target="_blank" class="text-decoration-none">+91 6280281505</a>
                            </p>
                            <p class="mb-0">
                                <i class="fas fa-envelope me-2"></i>
                                <a href="mailto:sales@traincapetech.info" class="text-decoration-none">sales@traincapetech.info</a>
                            </p>
                        </div>

                        <div class="mb-4">
                            <h5 class="h6 text-primary">Business Hours</h5>
                            <p class="mb-0">Monday to Saturday</p>
                            <p class="mb-0">11:00 AM - 07:00 PM IST</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="h4 mb-4">Send us a Message</h3>
                        
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                       id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                       id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control @error('phone') is-invalid @enderror" 
                                       id="phone" name="phone" value="{{ old('phone') }}" required>
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <select class="form-select @error('subject') is-invalid @enderror" 
                                        id="subject" name="subject" required>
                                    <option value="">Select a subject</option>
                                    <option value="General Inquiry" {{ old('subject') == 'General Inquiry' ? 'selected' : '' }}>General Inquiry</option>
                                    <option value="Training Programs" {{ old('subject') == 'Training Programs' ? 'selected' : '' }}>Training Programs</option>
                                    <option value="Certification" {{ old('subject') == 'Certification' ? 'selected' : '' }}>Certification</option>
                                    <option value="Partnership" {{ old('subject') == 'Partnership' ? 'selected' : '' }}>Partnership</option>
                                    <option value="Other" {{ old('subject') == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control @error('message') is-invalid @enderror" 
                                          id="message" name="message" rows="4" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 