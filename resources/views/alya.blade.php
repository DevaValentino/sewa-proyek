<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/tampilan.css') }}">
    <title>Formulir Pemesanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            text-align: center;
            color: #333;
        }
        .car-image {
            text-align: center;
            margin-bottom: 20px;
        }
        .car-image img {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            border-radius: 8px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-group textarea {
            resize: vertical;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Formulir Pemesanan</h2>
        
        <!-- Gambar Mobil -->
        <div class="car-image">
            <img src="images/alya.png" alt="alya">
        </div>

        <!-- Formulir Pemesanan -->
        <form action="submit-order.php" method="POST">
            <div class="form-group">
                <label for="car-name">Mobil yang Dipesan:</label>
                <input type="text" id="car-name" name="car_name" value="alya" readonly>
            </div>
            <div class="form-group">
                <label for="name">Nama Lengkap:</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="form-group">
                <label for="phone">Nomor Telepon:</label>
                <input type="tel" id="phone" name="phone" placeholder="Masukkan nomor telepon Anda" required>
            </div>
            <div class="form-group">
                <label for="rent-date">Tanggal Penyewaan:</label>
                <input type="date" id="rent-date" name="rent_date" required>
            </div>
            <div class="form-group">
                <label for="rent-duration">Durasi Penyewaan (hari):</label>
                <input type="number" id="rent-duration" name="rent_duration" min="1" required>
            </div>
            <div class="form-group">
                <label for="notes">Catatan Tambahan:</label>
                <textarea id="notes" name="notes" placeholder="Masukkan catatan tambahan (opsional)"></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Kirim Pemesanan</button>
            </div>
        </form>
    </div>
</body>
</html>
