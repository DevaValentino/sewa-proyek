<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mobil</title>
    <link rel="stylesheet" href="{{ asset('css/datamobil.css') }}">
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
                <a href="customer" class="menu-item">
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
                <h2>Data Mobil</h2>
                <div class="greeting">Hi, Admin</div>
            </div>

            <button class="add-button">Tambah Data</button>

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Merk</th>
                        <th>Nomor Plat</th>
                        <th>Status</th>
                        <th>Kondisi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td><img src="images/ayla.png" alt="Ayla"></td>
                        <td>Ayla</td>
                        <td>AD 7689 ADL</td>
                        <td><span class="status tersedia">Tersedia</span></td>
                        <td>Baik</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td><img src="images/xpander.png" alt="Xpander"></td>
                        <td>Xpander</td>
                        <td>AD 8871 BC</td>
                        <td><span class="status tersedia">Tersedia</span></td>
                        <td>Baik</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td><img src="images/innova.png" alt="Innova Reborn"></td>
                        <td>Innova Reborn</td>
                        <td>B 2556 BEC</td>
                        <td><span class="status tidak-tersedia">Tidak Tersedia</span></td>
                        <td>Baik</td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td><img src="images/luxio.png" alt="Luxio"></td>
                        <td>Luxio</td>
                        <td>H 8902 TN</td>
                        <td><span class="status tidak-tersedia">Tidak Tersedia</span></td>
                        <td>Service</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
