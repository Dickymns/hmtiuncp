<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class AdminController extends BaseController
{
    protected $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }

    public function index()
    {
        $data['admins'] = $this->adminModel->findAll();
        return view('admin/admin/index', $data);
    }

    public function add()
    {
        return view('admin/admin/add');
    }

    public function store()
    {
        $this->adminModel->save([
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ]);
        return redirect()->to('/admin/admin');
    }

    public function edit($id)
    {
        $data['admin'] = $this->adminModel->find($id);
        return view('admin/admin/edit', $data);
    }

    public function update($id)
    {
        $this->adminModel->update($id, [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ]);
        return redirect()->to('/admin/admin');
    }

    public function delete($id)
    {
        $this->adminModel->delete($id);
        return redirect()->to('/admin/admin');
    }
}
