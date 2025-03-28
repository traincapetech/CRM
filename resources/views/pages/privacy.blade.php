@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-lg-8 mx-auto">
            <h1 class="display-4 fw-bold mb-4">Privacy Policy</h1>
            <p class="text-muted">Last updated: {{ date('F d, Y') }}</p>
            <hr class="my-4">
            
            <div class="mb-5">
                <p class="lead">At CRM System, we take your privacy seriously. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you use our CRM platform and related services.</p>
                <p>Please read this Privacy Policy carefully. By accessing or using our services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Privacy Policy.</p>
            </div>
            
            <div class="mb-5">
                <h2 class="h3 mb-3">1. Information We Collect</h2>
                <p>We collect several types of information from and about users of our Services, including:</p>
                
                <h5 class="mt-4">1.1 Personal Information</h5>
                <p>We may collect personal information that you voluntarily provide to us when you:</p>
                <ul>
                    <li>Register for an account</li>
                    <li>Fill out forms or fields on our Services</li>
                    <li>Sign up for communications from us</li>
                    <li>Request customer support</li>
                    <li>Otherwise communicate with us</li>
                </ul>
                <p>This information may include your name, email address, phone number, billing information, and any other information you choose to provide.</p>
                
                <h5 class="mt-4">1.2 Customer Relationship Data</h5>
                <p>As a CRM platform, our Services are designed to store and process information about your customers, leads, and contacts. This data is provided by you or your authorized users and may include contact information, communication history, purchase records, and other data commonly managed in CRM systems.</p>
                
                <h5 class="mt-4">1.3 Usage Data</h5>
                <p>We automatically collect certain information about how you access and use our Services. This may include your IP address, browser type, operating system, referring URLs, access times, pages viewed, links clicked, and other information about your activities on our Services.</p>
                
                <h5 class="mt-4">1.4 Cookies and Similar Technologies</h5>
                <p>We use cookies and similar tracking technologies to track activity on our Services and to hold certain information. Cookies are files with a small amount of data which may include an anonymous unique identifier. You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent.</p>
            </div>
            
            <div class="mb-5">
                <h2 class="h3 mb-3">2. How We Use Your Information</h2>
                <p>We use the information we collect for various purposes, including to:</p>
                <ul>
                    <li>Provide, maintain, and improve our Services</li>
                    <li>Process transactions and send related information</li>
                    <li>Send administrative information, such as updates, security alerts, and support messages</li>
                    <li>Respond to comments, questions, and requests</li>
                    <li>Provide customer support</li>
                    <li>Send promotional communications, such as special offers or other information we think may interest you</li>
                    <li>Monitor and analyze trends, usage, and activities in connection with our Services</li>
                    <li>Detect, investigate, and prevent fraudulent transactions and other illegal activities</li>
                    <li>Personalize and improve the Services</li>
                </ul>
            </div>
            
            <div class="mb-5">
                <h2 class="h3 mb-3">3. Data Sharing and Disclosure</h2>
                <p>We may share your information in the following situations:</p>
                
                <h5 class="mt-4">3.1 With Service Providers</h5>
                <p>We may share your information with third-party vendors, service providers, contractors, or agents who perform services for us or on our behalf and require access to such information to do that work.</p>
                
                <h5 class="mt-4">3.2 For Business Transfers</h5>
                <p>We may share or transfer your information in connection with, or during negotiations of, any merger, sale of company assets, financing, or acquisition of all or a portion of our business to another company.</p>
                
                <h5 class="mt-4">3.3 With Your Consent</h5>
                <p>We may disclose your information for any other purpose with your consent.</p>
                
                <h5 class="mt-4">3.4 For Legal Purposes</h5>
                <p>We may disclose your information where required to do so by law or subpoena or if we believe that such action is necessary to comply with the law and the reasonable requests of law enforcement or to protect the security or integrity of our Services.</p>
            </div>
            
            <div class="mb-5">
                <h2 class="h3 mb-3">4. Data Security</h2>
                <p>We have implemented appropriate technical and organizational security measures designed to protect the security of any personal information we process. However, despite our safeguards and efforts to secure your information, no electronic transmission over the Internet or information storage technology can be guaranteed to be 100% secure.</p>
            </div>
            
            <div class="mb-5">
                <h2 class="h3 mb-3">5. Data Retention</h2>
                <p>We will retain your information for as long as needed to provide you with our Services and as necessary to comply with our legal obligations, resolve disputes, and enforce our agreements. When we no longer need personal information, we securely delete or anonymize it.</p>
            </div>
            
            <div class="mb-5">
                <h2 class="h3 mb-3">6. Your Data Protection Rights</h2>
                <p>Depending on your location, you may have the following rights regarding your personal information:</p>
                <ul>
                    <li>The right to access, update, or delete your information</li>
                    <li>The right to rectification if your information is inaccurate or incomplete</li>
                    <li>The right to object to our processing of your information</li>
                    <li>The right to request restriction of processing your information</li>
                    <li>The right to data portability</li>
                    <li>The right to withdraw consent</li>
                </ul>
                <p>If you wish to exercise any of these rights, please contact us using the information provided at the end of this Privacy Policy.</p>
            </div>
            
            <div class="mb-5">
                <h2 class="h3 mb-3">7. Children's Privacy</h2>
                <p>Our Services are not intended for use by children under the age of 16. We do not knowingly collect personal information from children under 16. If you become aware that a child has provided us with personal information, please contact us. If we become aware that we have collected personal information from children without verification of parental consent, we take steps to remove that information from our servers.</p>
            </div>
            
            <div class="mb-5">
                <h2 class="h3 mb-3">8. International Data Transfers</h2>
                <p>Our Services are operated in the United States. If you are located in another jurisdiction, please be aware that information you provide to us will be transferred to, stored, and processed in the United States. By using our Services or providing us with any information, you consent to this transfer, processing, and storage of your information in the United States.</p>
            </div>
            
            <div class="mb-5">
                <h2 class="h3 mb-3">9. Changes to This Privacy Policy</h2>
                <p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the "Last updated" date. You are advised to review this Privacy Policy periodically for any changes.</p>
            </div>
            
            <div class="mb-5">
                <h2 class="h3 mb-3">10. Contact Us</h2>
                <p>If you have any questions about this Privacy Policy, please <a href="/contact">contact us</a>.</p>
            </div>
        </div>
    </div>
</div>
@endsection 