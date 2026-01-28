<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProkerModel;
use App\Models\AdminModel;
class ProkerController extends BaseController
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
        $model = new ProkerModel();
        $data['proker'] = $model->findAll();
        return view('admin/proker/index', $data);
    }

    public function add()
    {
        return view('admin/proker/add');
    }

    public function store()
    {
        $model = new ProkerModel();
        $file = $this->request->getFile('foto');
        $namaFoto = null;

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $namaFoto = $file->getRandomName();
            $file->move('uploads/proker', $namaFoto);
        }

        $model->save([
            'nama_kegiatan' => $this->request->getPost('nama_kegiatan'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'tanggal_pelaksanaan' => $this->request->getPost('tanggal_pelaksanaan'),
            'foto' => $namaFoto
        ]);

        return redirect()->to(base_url('admin/proker'));
    }

    public function edit($id)
    {
        $model = new ProkerModel();
        $data['proker'] = $model->find($id);
        return view('admin/proker/edit', $data);
    }

    public function update($id)
    {
        $model = new ProkerModel();
        $data = [
            'nama_kegiatan' => $this->request->getPost('nama_kegiatan'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'tanggal_pelaksanaan' => $this->request->getPost('tanggal_pelaksanaan'),
            'foto' => $this->request->getPost('foto'),
        ];

        $file = $this->request->getFile('foto');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $namaFoto = $file->getRandomName();
            $file->move('uploads/proker', $namaFoto);
            $data['foto'] = $namaFoto;
        }

        $model->update($id, $data);
        return redirect()->to(base_url('admin/proker'));
    }

    public function delete($id)
    {
        $model = new ProkerModel();
        $data = $model->find($id);
        if ($data && $data['foto']) {
            unlink('uploads/proker/' . $data['foto']);
        }
        $model->delete($id);
        return redirect()->to(base_url('admin/proker'));
    }
}
