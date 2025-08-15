<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyWebsite</title>
</head>
<body>
    <!-- Navbar -->
    <header class="navbar" style="background: #fff; box-shadow: 0 2px 8px rgba(34,34,59,0.07);">
        <div class="container" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 2rem;">
            <h1 class="logo" style="margin: 0; font-size: 1.8rem; color: #007bff;">MyWebsite</h1>
            <nav style="display: flex; gap: 1.5rem;">
                <a href="#" style="color: #22223b; text-decoration: none; font-weight: 500; transition: color 0.2s;">Home</a>
                <a href="#" style="color: #22223b; text-decoration: none; font-weight: 500; transition: color 0.2s;">About</a>
                <a href="#" style="color: #22223b; text-decoration: none; font-weight: 500; transition: color 0.2s;">Services</a>
                <a href="#" style="color: #22223b; text-decoration: none; font-weight: 500; transition: color 0.2s;">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" style="display: flex; align-items: center; justify-content: center; min-height: 60vh; background: linear-gradient(90deg, #e0e7ff 60%, #fff 100%);">
        <div class="hero-text" style="text-align: center; max-width: 500px; background: #fff; border-radius: 16px; box-shadow: 0 4px 24px rgba(34,34,59,0.08); padding: 2rem;">
            <h2 style="color: #22223b; font-size: 2rem; font-weight: 700; margin-bottom: 1rem;">Selamat Datang di Website Kami</h2>
            <p style="color: #555; font-size: 1.1rem; margin-bottom: 2rem;">Menyediakan layanan terbaik untuk Anda</p>
            <button id="cta-btn">Mulai Sekarang</button>
        </div>
    </section>

    <h1>WOIIIIIIIII</h1>

    <!-- Footer -->
    <footer style="background: #fff; text-align: center; padding: 1.5rem 0; box-shadow: 0 -2px 8px rgba(34,34,59,0.07); margin-top: 2rem;">
        <p style="color: #555; font-size: 1rem;">© {{ date('Y') }} MyWebsite. All rights reserved.</p>
    </footer>

    <script>
    document.getElementById('cta-btn').addEventListener('click', function() {
        alert('Button clicked!');
    });
    </script>
</body>
</html>
