<?php

namespace App\Controllers;

class QuizController extends BaseController
{
    public function index()
    {
        return view('quiz/quiz_toefl');
    }

    public function quiz_soal()
    {
        return view('quiz/quiz_soal');
    }

    public function result()
    {
        return view('quiz/review_flashcards');
    }
}