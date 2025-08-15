<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="container">
            <h1 class="logo">MyWebsite</h1>
            <nav>
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Contact</a>
                 <!-- Tambahkan tombol login -->
                <a href="{{ url('login') }}">
                    <button style="margin-left: 1rem;">Login</button>
                </a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h2>Selamat Datang di Website Kami</h2>
            <p>Menyediakan layanan terbaik untuk Anda</p>
            <button id="cta-btn">Mulai Sekarang</button>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>© {{ date('Y') }} MyWebsite. All rights reserved.</p>
    </footer>


    <script>
    document.getElementById('cta-btn').addEventListener('click', function() {
        alert('Button clicked!');
    });
  </script>
</body>
</html>
