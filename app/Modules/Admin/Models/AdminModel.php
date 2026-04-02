<?php

namespace App\Modules\Admin\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admins';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id',
        'name',
        'role'
    ];
}