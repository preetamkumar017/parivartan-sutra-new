<?php

namespace App\Modules\Admin\Services;

use App\Modules\Admin\Models\UserModel;

class AuthService
{

    public function login($email,$password)
    {

        $userModel = new UserModel();

        $user = $userModel
                ->where('email',$email)
                ->where('role','admin')
                ->first();

        if(!$user)
        {
            return [
                'status'=>false,
                'message'=>'Admin not found'
            ];
        }

        if(!password_verify($password,$user['password_hash']))
        {
            return [
                'status'=>false,
                'message'=>'Invalid password'
            ];
        }

        session()->set([
            'admin_id'=>$user['id'],
            'role'=>'admin',
            'logged_in'=>true
        ]);

        session()->regenerate();

        return [
            'status'=>true
        ];

    }

}