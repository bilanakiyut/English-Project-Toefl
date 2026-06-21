<?php

namespace App\Controllers;

use App\Models\QuestionModel;
use App\Models\TestResultModel;
use App\Models\TestAnswerModel;
use App\Models\TestSessionModel;


class QuizController extends BaseController
{
    public function index()
{
    return view('quiz/quiz_toefl');
}
    public function quiz_soal()
    {
        $questionModel = new QuestionModel();

        $questions = $questionModel
            ->orderBy('question_number', 'ASC')
            ->findAll();

        return view('quiz/quiz_soal', [
            'questions' => $questions
        ]);
    }

    public function result()
{
    $sessionModel  = new TestSessionModel();
    $answerModel   = new TestAnswerModel();
    $questionModel = new QuestionModel();

    $sessionId = session()->get('last_session_id');

    $session = $sessionModel->find($sessionId);

    $answers = $answerModel
        ->where('session_id', $sessionId)
        ->findAll();

    $flashcards = [];

    foreach ($answers as $answer)
    {
        $question = $questionModel
            ->find($answer['question_id']);

        $options = [];

        foreach (['A','B','C','D'] as $letter)
        {
            $field = 'option_' . strtolower($letter);

            $options[] = [
                'letter' => $letter,
                'text' => $question[$field] ?? '',

                'is_correct' =>
                    $letter === $question['correct_answer'],

                'is_selected' =>
                    $letter === $answer['user_answer']
            ];
        }

        $flashcards[] = [
            'is_correct' =>
                (bool)$answer['is_correct'],

            'question_text' =>
                $question['question'],

            'options' => $options
        ];
    }

    $correct = count(
        array_filter(
            $answers,
            fn($a) => $a['is_correct']
        )
    );

    $total = count($answers);

    $incorrect = $total - $correct;

    $accuracy =
        $total > 0
        ? round(($correct / $total) * 100)
        : 0;

    $data['user'] = [
    'name' => session()->get('name'),
    'program' => 'TOEFL Practice',
    'avatar_url' => null
];

    $data['topics'] = [
        'Structure',
        'Listening',
        'Reading'
    ];

    $data['stats'] = [
        'rank' => 1,
        'total_participants' => 30,

        'score' => $session['total_score'],

        'time_hours' => 0,
        'time_minutes' => 0
    ];

    $data['accuracy'] = [
        'percent' => $accuracy,
        'correct' => $correct,
        'incorrect' => $incorrect,
        'total' => $total
    ];

    $data['flashcards'] = $flashcards;

    return view(
        'quiz/review_flashcards',
        $data
    );
}
public function submit()
{
    $answers = $this->request->getPost('answers');

    $questionModel = new \App\Models\QuestionModel();
    $resultModel   = new \App\Models\TestResultModel();
    $answerModel   = new \App\Models\TestAnswerModel();
    $sessionModel  = new \App\Models\TestSessionModel();

    $questions = $questionModel->findAll();

    $structureCorrect = 0;
    $listeningCorrect = 0;
    $readingCorrect   = 0;

    $answerData = [];

$sessionModel->insert([
    'user_id'    => 1,
    'started_at' => date('Y-m-d H:i:s')
]);

$sessionId = $sessionModel->getInsertID();

session()->set('last_session_id', $sessionId);

    foreach ($questions as $question)
    {
        $questionId = $question['id'];

        if (!isset($answers[$questionId]))
        {
            continue;
        }

        $userAnswer = strtoupper(trim($answers[$questionId]));

        $isCorrect =
            $userAnswer ===
            strtoupper($question['correct_answer']);

           $answerData[] = [
    'question_id' => $questionId,
    'user_answer' => $userAnswer,
    'is_correct'  => $isCorrect ? 1 : 0
];
        if ($isCorrect)
        {
            switch ($question['category'])
            {
                case 'structure':
                    $structureCorrect++;
                    break;

                case 'listening':
                    $listeningCorrect++;
                    break;

                case 'reading':
                    $readingCorrect++;
                    break;
            }
        }
    }

    $structureScore = 31 + $structureCorrect;
    $listeningScore = 31 + $listeningCorrect;
    $readingScore   = 31 + $readingCorrect;

    $totalScore =
        round(
            (
                $structureScore +
                $listeningScore +
                $readingScore
            ) / 3
        );
    
        $sessionModel->update($sessionId, [
    'structure_score' => $structureScore,
    'listening_score' => $listeningScore,
    'reading_score' => $readingScore,
    'total_score' => $totalScore,
    'finished_at' => date('Y-m-d H:i:s')
]);
   $resultModel->insert([
    'user_id' => 1,

    'structure_correct' => $structureCorrect,
    'listening_correct' => $listeningCorrect,
    'reading_correct' => $readingCorrect,

    'structure_score' => $structureScore,
    'listening_score' => $listeningScore,
    'reading_score' => $readingScore,

    'total_score' => $totalScore,

    'created_at' => date('Y-m-d H:i:s')
]);

$resultId = $resultModel->getInsertID();

foreach ($answerData as $answer)
{
    $answer['session_id'] = $sessionId;

    $result = $answerModel->insert($answer);

if (!$result)
{
    dd($answerModel->errors());
}
}
return redirect()->to('/quiz/result');
}
}