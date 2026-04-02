<?php

namespace App\Modules\Admin\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{

    public function index()
    {

        if(!session()->get('logged_in'))
        {
            return redirect()->to('/admin/login');
        }

        return view('App\Modules\Admin\Views\dashboard\index');

    }

}