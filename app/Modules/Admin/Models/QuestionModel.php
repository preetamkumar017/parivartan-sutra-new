<?php

namespace App\Modules\Admin\Models;

use CodeIgniter\Model;

class QuestionModel extends Model
{

    protected $table = 'questions';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'question_text',
        'question_type',
        'marks'
    ];

}