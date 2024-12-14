<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h1 class="brand">ADD RENT CAR</h1>
            <nav class="menu">
                <a href="/dashboard" class="menu-item">
                    <img src="images/dashboard.jpg" alt="Dashboard Icon">
                    Dashboard
                </a>
                <a href="/datamobil" class="menu-item">
                    <img src="images/mobil.png" alt="Data Mobil Icon">
                    Data Mobil
                </a>
                <a href="/customer" class="menu-item">
                    <img src="images/Customer.png" alt="Data Customer Icon">
                    Data Customer
                </a>
                <a href="#" class="menu-item">
                    <img src="images/laporan.jpg" alt="Laporan Icon">
                    Laporan
                </a>
                <a href="#" class="menu-item">
                    <img src="images/transaksi.png" alt="Transaksi Icon">
                    Transaksi
                </a>
                <a href="#" class="menu-item">
                    <img src="images/logout.png" alt="Logout Icon">
                    Log-out
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header class="header">
                <h2>Dashboard</h2>
                <span class="greeting">Hi, Admin</span>
            </header>
            <section class="cards">
                <div class="card">
                <a href="/datamobil">    
                <img src="images/mobil.png" alt="Mobil">
                    <h3>Mobil</h3>
                </a>
                </div>
                <div class="card">
                    <a href="/customer">
                    <img src="images/Customer.png" alt="Customers" >
                    <h3>Customers</h3>
                    </a>
                </div>
                <div class="card">
                    <img src="images/laporan.jpg" alt="Laporan">
                    <h3>Laporan</h3>
                </div>
                <div class="card">
                    <img src="images/transaksi.png" alt="Transaksi">
                    <h3>Transaksi</h3>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
