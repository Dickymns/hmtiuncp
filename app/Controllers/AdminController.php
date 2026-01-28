<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function dashboard()
    {
        if (!session()->get('admin_id')) {
            return redirect()->to('/login');
        }

        return view('admin/dashboard');
    }
}
