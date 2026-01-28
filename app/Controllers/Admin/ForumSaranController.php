<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ForumSaranModel;
use App\Models\AdminModel;
class ForumSaranController extends BaseController
{
    protected $forumModel;

    public function __construct()
    {
         // Cek apakah user sudah login
        if (!session()->get('isLoggedIn')) {
            redirect()->to('/login')->send(); // Gunakan cara bawaan CI4
        }
    
        
        $this->forumModel = new ForumSaranModel();
    }

    public function index()
    {
        $data['data'] = $this->forumModel->findAll();
        return view('admin/forumsaran/index', $data);
    }

    public function add()
    {
        return view('admin/forumsaran/add');
    }

    public function store()
    {
        $this->forumModel->insert([
            'nama' => $this->request->getPost('nama'),
            'saran' => $this->request->getPost('saran'),
            'tanggal' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to(base_url('admin/forumsaran'));
    }

    public function edit($id)
    {
        $data['data'] = $this->forumModel->find($id);
        return view('admin/forumsaran/edit', $data);
    }

    public function update($id)
    {
        $this->forumModel->update($id, [
            'nama' => $this->request->getPost('nama'),
            'saran' => $this->request->getPost('saran'),
        ]);

        return redirect()->to(base_url('admin/forumsaran'));
    }

    public function delete($id)
    {
        $this->forumModel->delete($id);
        return redirect()->to(base_url('admin/forumsaran'));
    }
}
