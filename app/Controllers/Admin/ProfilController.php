<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProfilModel;
use App\Models\AdminModel;

class ProfilController extends BaseController
{
    protected $forumModel;
     public function __construct()
    {
        // Cek apakah user sudah login
        if (!session()->get('isLoggedIn')) {
            redirect()->to('/login')->send(); // Gunakan cara bawaan CI4
        }
    } 
    
    public function index()
    {
        $model = new ProfilModel();
        $data['profil'] = $model->findAll();
        return view('admin/profil/index', $data);
    }

    public function add()
    {
        return view('admin/profil/add');
    }

    public function store()
    {
        $model = new ProfilModel();
        $model->insert([
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi')
        ]);
        return redirect()->to('/admin/profil');
    }

    public function edit($id)
    {
        $model = new ProfilModel();
        $data['profil'] = $model->find($id);
        return view('admin/profil/edit', $data);
    }

    public function update($id)
    {
        $model = new ProfilModel();
        $model->update($id, [
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi')
        ]);
        return redirect()->to('/admin/profil');
    }

    public function delete($id)
    {
        $model = new ProfilModel();
        $model->delete($id);
        return redirect()->to('/admin/profil');
    }
}
