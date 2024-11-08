<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login'); // Pastikan `auth.login` adalah nama view untuk halaman login Anda
    }
}
