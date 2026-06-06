<?php

namespace App\Controllers;

class MateriController extends BaseController
{
    // 1. Tampilkan Halaman Utama (Yang isinya 3 Menu Gede: Structure, Reading, Listening)
    public function index()
    {
        // Ganti 'materi' dengan nama file view 3 menu kamu yang lama jika berbeda
        return view('materi'); 
    }

    // 2. Tampilkan Halaman Rincian Modul Buku Structure (Ada 8 Buku)
    public function structure()
    {
        // Sesuai konfirmasi kamu, ini memanggil file structure_materi.php
        return view('structure_materi'); 
    }
}