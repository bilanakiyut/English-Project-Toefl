<?php

namespace App\Controllers;

class HistoryController extends BaseController
{
    public function index()
    {
        // halaman dashboard history (yang ada tombolnya)
        return view('history/dashboard_history');
    }

    public function grafik()
    {
        // halaman grafik + list history (yang sudah dibuat)
        return view('history/history');
    }
}