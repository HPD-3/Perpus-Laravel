<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- Navbar -->
             <nav class="navbar">
                <div class="navbar-left">
                <img src="{{ asset('images/skanic.png') }}" alt="Logo">
                <div class="school-name">SMKN 1 CIOMAS</div>
                </div>
                <div class="navbar-right">
                <a href="#" class="active">BERANDA</a>
                <a href="#">PROFIL</a>
                <a href="#">E-PERPUS</a>
                <a href="#">Program Keahlian</a>
                <a href="#">Berita & Artikel</a>
                </div>
            </nav>

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
