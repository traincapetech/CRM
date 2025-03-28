<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM Layout</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f8f9fa;">

    <!-- Header -->
    <div style="background: #2c3e50; color: white; text-align: center; padding: 15px;">
        <nav style="display: flex; justify-content: space-between; align-items: center; padding: 0 20px;">
            <a href="/home.blade.php" style="color: white; font-size: 24px; font-weight: bold; text-decoration: none;">CRM</a>
            <ul style="display: flex; gap: 20px; list-style: none; padding: 0; margin: 0;">
                <li><a href="/home" style="color: white; text-decoration: none; font-size: 16px; padding: 10px; border-radius: 5px;">Home</a></li>
                <li><a href="/about" style="color: white; text-decoration: none; font-size: 16px; padding: 10px; border-radius: 5px;">About</a></li>
                <li><a href="/contact" style="color: white; text-decoration: none; font-size: 16px; padding: 10px; border-radius: 5px;">Contact Us</a></li>
            </ul>
        </nav>
    </div>

    <!-- Content Wrapper -->
    <div style="display: flex; min-height: 100vh;">

        <!-- Sidebar -->
        <div style="background-color: #2c3e50; color: white; width: 220px; padding: 20px;">
            <ul style="list-style: none; padding: 0;">
                <li><a href="/dash" style="display: block; color: white; text-decoration: none; padding: 10px; border-radius: 5px;">Dashboard</a></li>
                <li><a href="/admin" style="display: block; color: white; text-decoration: none; padding: 10px; border-radius: 5px;">Admin</a></li>
                <li><a href="/leads" style="display: block; color: white; text-decoration: none; padding: 10px; border-radius: 5px;">Leads Management</a></li>
                <li><a href="/sales" style="display: block; color: white; text-decoration: none; padding: 10px; border-radius: 5px;">Sales Management</a></li>
                <li><a href="/client" style="display: block; color: white; text-decoration: none; padding: 10px; border-radius: 5px;">Clients & Contacts</a></li>
                <li><a href="/tasks" style="display: block; color: white; text-decoration: none; padding: 10px; border-radius: 5px;">Tasks & Activities</a></li>
                <li><a href="#" style="display: block; color: white; text-decoration: none; padding: 10px; border-radius: 5px;">Invoices & Payments</a></li>
                <li><a href="#" style="display: block; color: white; text-decoration: none; padding: 10px; border-radius: 5px;">User & Team Management</a></li>
            </ul>
        </div>

        <!-- Main Panel -->
        <div style="
            flex: 1;
            padding: 30px;
            min-height: 100vh;
            background-image: url('/assets/crm_image.jpeg');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
             ">
            <main style="padding: 15px; text-align: center;">
                <h2 style="color: black; font-size: 24px; margin-bottom: 20px;">Welcome to Dashboard</h2>
                
            </main>
        </div>

    </div>

    <!-- Footer -->
    <div style="background: #2c3e50; color: white; text-align: center; padding: 15px; position: relative; width: 100%;">
        Copyright © 2025 Traincape Technology. All Rights Reserved. | Privacy Policy | Terms of Service | Support
        <br> Powered by CRM | Designed for Efficiency & Growth
        <br> 📧 support@ourcompany.com | 📞 +1 (123) 456-7890
        <br> Follow us: Facebook | Twitter | LinkedIn
    </div>

</body>
</html>
