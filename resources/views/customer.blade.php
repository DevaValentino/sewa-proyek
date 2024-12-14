<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Customer</title>
    <link rel="stylesheet" href="{{ asset('css/customer.css') }}">
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
        <div class="main-content">
            <div class="header">
                <h2>Data Customer</h2>
                <div class="greeting">Hi, Admin</div>
            </div>

            <div class="actions">
                <button class="btn-add">Tambah Customer</button>
            </div>

            <table class="customer-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Gender</th>
                        <th>No.Telepon</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Andang Syafrudin</td>
                        <td>Randusari, Boyolali</td>
                        <td>Laki-laki</td>
                        <td>089631490457</td>
                        <td>*******</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Deva Valentino</td>
                        <td>Surakarta</td>
                        <td>Laki-laki</td>
                        <td>085788516782</td>
                        <td>*******</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Dyas Arya</td>
                        <td>Sragen</td>
                        <td>Laki-laki</td>
                        <td>085755418670</td>
                        <td>*******</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
