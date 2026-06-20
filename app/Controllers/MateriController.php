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
    public function adjective_clause_connector()
    {
        return view('materi/structure/adjective_clause_connector');
    }

    public function adverb_clause_connector()
    {
        return view('materi/structure/adverb_clause_connector');
    }

    public function cordinate_connector()
    {
        return view('materi/structure/cordinate_connector');
    }

    public function countable_uncountable_noun()
    {
        return view('materi/structure/countable_uncountable_noun');
    }
    public function noun_clause_connector()
    {
        return view('materi/structure/noun_clause_connector');
    }

    public function possessive_pronoun()
    {
        return view('materi/structure/possessive_pronoun');
    }

    public function singular_plural_nouns()
    {
        return view('materi/structure/singular_plural_nouns');
    }

    public function subject_object_pronouns()
    {
        return view('materi/structure/subject_object_pronouns');
    }

    public function writing()
    {
        return view('materi/writing/writing_materi');
    } 
    public function subject_verb_agreement()
    {
        return view('materi/writing/subject_verb_agreement');
    }
    public function agreement_after_certain_words()
    {
        return view('materi/writing/agreement_after_certain_words');
    }

    public function agreement_after_expression_of_quantity()
    {
        return view('materi/writing/agreement_after_expression_of_quantity');
    }

    public function agreement_after_prepositional_phrase()
    {
        return view('materi/writing/agreement_after_prepositional_phrase');
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
    public function stated_detail_information()
    {
        return view('materi/reading/stated_detail_information');
    }
    public function unstated_detail_information()
    {
        return view('materi/reading/unstated_detail_information');
    }
    public function references()
    {
        return view('materi/reading/references');
    }
    public function inferences()
    {
        return view('materi/reading/inferences');
    }

     public function listening()
    {
        return view('materi/listening/listening_materi');
    }

     public function listening_short_conversations()
    {
        return view('materi/listening/listening_short_conversations');
    }
     public function listening_longer_conversations()
    {
        return view('materi/listening/listening_longer_conversations');
    }
     public function listening_talks_notetaking()
    {
        return view('materi/listening/listening_talks_notetaking');
    }
}