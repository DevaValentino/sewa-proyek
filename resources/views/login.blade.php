<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <h1>Selamat Datang Kembali!</h1>
            <p>Untuk tetap terhubung dengan kami silahkan masuk dengan akun anda</p>
        </div>
        <div class="right-panel">
            <h2>Welcome</h2>
            <p>Silahkan masuk ke akun anda</p>
            <form>
                <label for="email">Email atau Nomor Hp</label>
                <input type="text" id="email" placeholder="Masukkan email atau nomor hp">

                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Masukkan password">

                <div class="forgot-password">
                    <a href="#">Lupa kata sandi?</a>
                </div>

                <button type="submit" class="login-button">Login</button>

                <p class="or">Atau lanjutkan dengan</p>

                <div class="google-login">
                    <button type="button" class="google-button">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/4a/Logo_2013_Google.png" alt="Google"> 
                    </button>
                </div>

                <p class="signup-text">Belum punya akun? <a href="#">Mendaftar</a></p>
            </form>
        </div>
    </div>
</body>
</html>