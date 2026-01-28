<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SejarahModel;
use App\Models\AdminModel;
class SejarahController extends BaseController
{
    protected $sejarahModel;

    public function __construct()
    {
        // Cek apakah user sudah login
        if (!session()->get('isLoggedIn')) {
            redirect()->to('/login')->send(); // Gunakan cara bawaan CI4
        
    } 
        $this->sejarahModel = new SejarahModel();
    }

    public function index()
    {
        $data['data'] = $this->sejarahModel->findAll();
        return view('admin/sejarah/index', $data);
    }

    public function add()
    {
        return view('admin/sejarah/add');
    }

    public function store()
    {
        $this->sejarahModel->insert([
            'deskripsi' => $this->request->getPost('deskripsi'),
        ]);
        return redirect()->to(base_url('admin/sejarah'));
    }

    public function edit($id)
    {
        $data['row'] = $this->sejarahModel->find($id);
        return view('admin/sejarah/edit', $data);
    }

    public function update($id)
    {
        $this->sejarahModel->update($id, [
            'deskripsi' => $this->request->getPost('deskripsi'),
        ]);
        return redirect()->to(base_url('admin/sejarah'));
    }

    public function delete($id)
    {
        $this->sejarahModel->delete($id);
        return redirect()->to(base_url('admin/sejarah'));
    }
}
