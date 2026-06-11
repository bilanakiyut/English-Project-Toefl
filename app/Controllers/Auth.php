<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        // Ini akan memanggil app/Views/login.php setelah dipindahkan
        return view('login'); 
    }

    public function register()
    {
        // Ini akan memanggil app/Views/register.php setelah dipindahkan
        return view('register'); 
    }
}