<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        helper('url');
        return view('dashboard');
    }

    public function materi(): string
    {
        helper('url');
        return view('materi');
    }
}