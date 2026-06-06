<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    // Ini mengatur halaman utama (Welcome Page)
    public function index(): string
    {
        return view('dashboard'); // Memanggil file app/Views/dashboard.php
    }

    // Ini mengatur halaman daftar materi saat navbar diklik
    public function materi(): string
    {
        return view('materi'); // Memanggil file app/Views/materi.php
    }
}