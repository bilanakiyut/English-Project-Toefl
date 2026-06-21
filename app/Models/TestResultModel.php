<?php

namespace App\Models;

use CodeIgniter\Model;

class TestResultModel extends Model
{
    protected $table = 'test_results';

    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $useAutoIncrement = true;

    protected $allowedFields = [

        'user_id',

        'structure_correct',
        'reading_correct',
        'listening_correct',

        'structure_score',
        'reading_score',
        'listening_score',

        'total_score',

        'created_at'

    ];

    protected $useTimestamps = false;
}