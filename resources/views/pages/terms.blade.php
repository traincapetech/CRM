@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-lg-8 mx-auto">
            <h1 class="display-4 fw-bold mb-4">Terms of Service</h1>
            <p class="text-muted">Last updated: {{ date('F d, Y') }}</p>
            <hr class="my-4">
            
            <div class="mb-5">
                <h2 class="h3 mb-3">1. Introduction</h2>
                <p>Welcome to CRM System. These Terms of Service ("Terms") govern your use of our website, products, and services ("Services"). By accessing or using our Services, you agree to be bound by these Terms. If you disagree with any part of the Terms, you may not access our Services.</p>
            </div>
            
            <div class="mb-5">
                <h2 class="h3 mb-3">2. Your Account</h2>
                <p>When you create an account with us, you must provide accurate, complete, and current information. You are responsible for safeguarding the password and for all activities that occur under your account. You agree to notify us immediately of any unauthorized use of your account.</p>
                <p>We reserve the right to disable any user account if, in our opinion, you have violated any provision of these Terms.</p>
            </div>
            
            <div class="mb-5">
                <h2 class="h3 mb-3">3. Subscription and Payments</h2>
                <p>Some of our Services are offered on a subscription basis. You will be billed in advance on a recurring basis, depending on the subscription plan you select. We may change subscription fees at any time, but will provide you with advance notice before any change in fees takes effect.</p>
                <p>You may cancel your subscription at any time, but no refunds will be provided for any unused portion of the current billing period.</p>
            </div>
            
            <div class="mb-5">
                <h2 class="h3 mb-3">4. Use of Services</h2>
                <p>You agree to use our Services only for lawful purposes and in a way that does not infringe the rights of, restrict, or inhibit anyone else's use of the Services. You agree not to:</p>
                <ul class="mb-3">
                    <li>Use our Services in any way that could disable, overburden, damage, or impair the Services</li>
                    <li>Use any robot, spider, or other automatic device to access our Services</li>
                    <li>Introduce any viruses, trojan horses, worms, or other malicious code</li>
                    <li>Attempt to gain unauthorized access to any parts of the Services</li>
                    <li>Use our Services to send spam or other unsolicited communications</li>
                    <li>Use our Services for any illegal or unauthorized purpose</li>
                </ul>
                <p>We reserve the right to terminate your access to our Services if you violate these usage rules.</p>
            </div>
            
            <div class="mb-5">
                <h2 class="h3 mb-3">5. Data Protection and Privacy</h2>
                <p>We respect your privacy and are committed to protecting it. Our <a href="/privacy">Privacy Policy</a> explains how we collect, use, and disclose information about you.</p>
                <p>By using our Services, you consent to our collection and use of your data in accordance with our Privacy Policy.</p>
            </div>
            
            <div class="mb-5">
                <h2 class="h3 mb-3">6. Intellectual Property</h2>
                <p>The Services and all contents, including but not limited to text, graphics, logos, icons, images, audio clips, digital downloads, data compilations, and software, are the property of CRM System or its content suppliers and protected by international copyright laws.</p>
                <p>You may not reproduce, distribute, modify, create derivative works of, publicly display, publicly perform, republish, download, store, or transmit any of the material on our Services without our prior written consent.</p>
            </div>
            
            <div class="mb-5">
                <h2 class="h3 mb-3">7. User Content</h2>
                <p>Our Services may allow you to post, upload, or submit content. You retain ownership of any intellectual property rights that you hold in that content, but you grant us a worldwide, royalty-free license to use, copy, reproduce, process, adapt, modify, publish, transmit, display, and distribute such content in any and all media or distribution methods.</p>
                <p>You are responsible for the content you post. You represent and warrant that you have all necessary rights to post the content and that your content does not violate these Terms or any applicable law.</p>
            </div>
            
            <div class="mb-5">
                <h2 class="h3 mb-3">8. Limitation of Liability</h2>
                <p>In no event shall CRM System, its officers, directors, employees, or agents be liable for any indirect, incidental, special, consequential, or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, resulting from:</p>
                <ul class="mb-3">
                    <li>Your access to or use of or inability to access or use the Services</li>
                    <li>Any conduct or content of any third party on the Services</li>
                    <li>Any content obtained from the Services</li>
                    <li>Unauthorized access, use, or alteration of your transmissions or content</li>
                </ul>
                <p>The foregoing limitations will apply whether such damages arise out of breach of contract, tort (including negligence), or otherwise and regardless of whether such damages were foreseeable.</p>
            </div>
            
            <div class="mb-5">
                <h2 class="h3 mb-3">9. Disclaimer of Warranties</h2>
                <p>Our Services are provided "as is" and "as available" without warranties of any kind, either express or implied. We do not warrant that our Services will be uninterrupted or error-free, that defects will be corrected, or that our Services or the servers that make them available are free of viruses or other harmful components.</p>
            </div>
            
            <div class="mb-5">
                <h2 class="h3 mb-3">10. Changes to Terms</h2>
                <p>We reserve the right to modify these Terms at any time. We will provide notice of significant changes by posting the updated Terms on our Services and updating the "Last updated" date. Your continued use of our Services after such changes constitutes your acceptance of the new Terms.</p>
            </div>
            
            <div class="mb-5">
                <h2 class="h3 mb-3">11. Governing Law</h2>
                <p>These Terms shall be governed by and construed in accordance with the laws of the United States, without regard to its conflict of law provisions.</p>
            </div>
            
            <div class="mb-5">
                <h2 class="h3 mb-3">12. Contact Us</h2>
                <p>If you have any questions about these Terms, please <a href="/contact">contact us</a>.</p>
            </div>
        </div>
    </div>
</div>
@endsection 