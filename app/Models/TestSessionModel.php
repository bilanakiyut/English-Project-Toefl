<?php

namespace App\Models;

use CodeIgniter\Model;

class TestSessionModel extends Model
{
    protected $table = 'test_sessions';

    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'user_id',

        'current_section',

        'structure_score',
        'reading_score',
        'listening_score',

        'total_score',

        'started_at',
        'finished_at'
    ];

    protected $useTimestamps = false;
}