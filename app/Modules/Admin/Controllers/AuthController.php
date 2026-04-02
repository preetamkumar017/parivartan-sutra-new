<?php

namespace App\Modules\Admin\Controllers;

use App\Controllers\BaseController;
use App\Modules\Admin\Services\AuthService;

class AuthController extends BaseController
{

    public function loginPage()
    {
        // agar already login hai to dashboard bhejo
        if(session()->get('logged_in'))
        {
            return redirect()->to('/admin/dashboard');
        }

        return view('App\Modules\Admin\Views\auth\login');
    }


    public function login()
    {

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $authService = new AuthService();

        $result = $authService->login($email,$password);

        if(!$result['status'])
        {
            return redirect()->back()->with('error',$result['message']);
        }

        return redirect()->to('/admin/dashboard');
    }


    public function logout()
    {
        session()->destroy();

        return redirect()->to('/admin/login');
    }

}