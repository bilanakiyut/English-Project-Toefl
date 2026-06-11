<?php

namespace App\Controllers;

class MateriController extends BaseController
{
    // Membuka halaman utama pilihan materi (app/Views/materi/materi.php)
    public function index()
    {
        return view('materi/materi');
    }

    // Membuka halaman structure (app/Views/materi/structure_materi.php)
    public function structure()
    {
        return view('materi/structure/structure_materi');
    }
    public function noun_clause()
    {
        return view('materi/structure/noun_clause');
    }
    public function writing()
    {
        return view('materi/writing/writing_materi');
    }
     public function parallel_structure()
    {
        return view('materi/writing/parallel_structure');
    }
    public function parallel_coordinate_conjuction()
    {
        return view('materi/writing/parallel_coordinate_conjuction');
    }
    public function parallel_paired_conjuction()
    {
        return view('materi/writing/parallel_paired_conjuction');
    }
    public function present_participle()
    {
        return view('materi/writing/present_participle');
    }
    public function past_participle()
    {
        return view('materi/writing/past_participle');
    }
    public function present_participle_after_be()
    {
        return view('materi/writing/present_participle_after_be');
    }
     public function base_form()
    {
        return view('materi/writing/base_form');
    }
    public function reading()
    {
        return view('materi/reading/reading_materi');
    }
     public function skimming_scanning()
    {
        return view('materi/reading/skimming_scanning');
    }
    public function vocabulary()
    {
        return view('materi/reading/vocabulary');
    }
    public function main_idea()
    {
        return view('materi/reading/main_idea');
    }
     public function listening()
    {
        return view('materi/listening/listening_materi');
    }
}