<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register Page</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <h1>Halo, Teman!</h1>
            <p>Daftarkan diri anda dan mulai gunakan layanan kami segera</p>
        </div>
        <div class="right-panel">
            <h2>Daftar</h2>
            <p>Anda akan dapat memulai segera setelah anda daftar</p>
            <div class="google-login">
                <p>Mendaftar dengan</p>
                <button type="button" class="google-button">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/4a/Logo_2013_Google.png" alt="Google" width="20">
                </button>
            </div>
            <div class="divider">
                <p class="or">Buat akun baru</p>
            </div>
            <form>
                <div class="name-fields">
                    <div class="field">
                        <label for="first-name">Nama Depan</label>
                        <input type="text" id="first-name" placeholder="Masukkan nama depan">
                    </div>
                    <div class="field">
                        <label for="last-name">Nama Belakang</label>
                        <input type="text" id="last-name" placeholder="Masukkan nama belakang">
                    </div>
                </div>

                <label for="email">Email atau Nomor Hp</label>
                <input type="text" id="email" placeholder="Masukkan email atau nomor hp">

                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Masukkan password">

                <label for="confirm-password">Konfirmasi Password</label>
                <input type="password" id="confirm-password" placeholder="Masukkan konfirmasi password">

                <button type="submit" class="register-button">Create Account</button> 
                <p class="signup-text">Sudah punya akun? <a href="{{ route('login') }}" class="auth-button">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>