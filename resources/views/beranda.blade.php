<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Rent Car</title>
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="images/car-logo.png" alt="Logo" class="logo-image">
                <h1 class="brand-name">ADD RENT CAR</h1>
            </div>
            <div class="auth-buttons">
                <button class="auth-button" onclick="window.location.href='{{ route('login') }}'">Login</button> 
                <button class="auth-button" onclick="window.location.href='{{ route('daftar') }}'">Register</button>
            </div>
        </div>
    </header>
    <main>
        <div class="hero-section">
            <h2 class="hero-title">PESAN MOBIL HARI INI</h2>
            <p class="hero-subtitle">JAMINAN KUALITAS DAN HARGA MURAH<br>TIDAK PERCAYA? AYO BUKTIKAN</p>
            <img src="images/cars-image.png" alt="Cars" class="cars-image">
        </div>
    </main>
</body>
</html>
