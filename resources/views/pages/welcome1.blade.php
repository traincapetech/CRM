<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM Layout</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  

</head>
<body style="margin: 0; font-family: Arial, sans-serif;">

    <!-- Header -->
    <header style="background-color: rgb(32, 22, 77); color:White; padding: 15px; display: flex; justify-content: space-between; align-items: center;">
        <div style="font-size: 24px; font-weight: bold;">CRM</div>
       


        <nav>
            <a href="/pages/home.php" style="color: rgb(8, 8, 8); text-decoration: none; margin: 0 10px;">Home</a>
            <a href="/about.blade.php" style="color: rgb(8, 8, 8); text-decoration: none; margin: 0 10px;">About</a>
            <a href="#" style="color: rgb(8, 8, 8); text-decoration: none; margin: 0 10px;">Contact Us</a>
        </nav>

        <button type="button" class="btn btn-primary">Login</button>
    </header>

    <!-- Sidebar -->
    <div style="display: flex;">
        <aside style="width: 200px; background-color:  rgb(32, 22, 77); height: 100vh; padding: 15px;">
       
            <ul style="list-style: none; padding: 0;  color: black;">
                <li><a href="#" style="text-decoration: none;">Admin</a></li>
                <li><a href="#" style="text-decoration: none;">Admin</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main style="flex-grow: 1; padding: 20px;">
            <h2>Welcome to CRM Dashboard</h2>
            <p>Main content goes here.</p>
        </main>
    </div>

    <!-- Footer -->
    <footer style="text-align: center; padding: 10px; position: absolute; width: 100%; bottom: 0;">
        &copy; 2025 CRM System
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    

</body>
</html>
