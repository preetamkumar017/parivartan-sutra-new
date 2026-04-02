<?php

namespace App\Modules\Admin\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';

    protected $allowedFields = [
        'uuid',
        'role',
        'email',
        'mobile',
        'password_hash',
        'is_verified',
        'status'
    ];
}