<?php

namespace App\Models;

use CodeIgniter\Model;

class TestAnswerModel extends Model
{
    protected $table = 'test_answers';

    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'session_id',
        'question_id',
        'user_answer',
        'is_correct'
    ];

    protected $useTimestamps = false;
}