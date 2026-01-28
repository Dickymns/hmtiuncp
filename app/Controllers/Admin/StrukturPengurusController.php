<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\StrukturPengurusModel;
use App\Models\AdminPengurusModel;
class StrukturPengurusController extends BaseController
{
    protected $strukturModel;

    public function __construct()
    {
           // Cek apakah user sudah login
        if (!session()->get('isLoggedIn')) {
            redirect()->to('/login')->send(); // Gunakan cara bawaan CI4
        
    } 
        $this->strukturModel = new StrukturPengurusModel();
    }

    public function index()
    {
        $data['struktur'] = $this->strukturModel->findAll();
        return view('admin/struktur/index', $data);
    }

    public function add()
    {
        return view('admin/struktur/add');
    }

    public function store()
    {
        $file = $this->request->getFile('foto');
        $fotoName = $file->isValid() && !$file->hasMoved() ? $file->getRandomName() : null;

        if ($fotoName) {
            $file->move('uploads', $fotoName);
        }

        $this->strukturModel->save([
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'jabatan' => $this->request->getPost('jabatan'),
            'foto' => $fotoName
        ]);

        return redirect()->to('/admin/struktur');
    }

    public function edit($id)
    {
        $data['struktur'] = $this->strukturModel->find($id);
        return view('admin/struktur/edit', $data);
    }

    public function update($id)
    {
        $dataLama = $this->strukturModel->find($id);
        $file = $this->request->getFile('foto');

        if ($file->isValid() && !$file->hasMoved()) {
            $fotoName = $file->getRandomName();
            $file->move('uploads', $fotoName);
            if ($dataLama['foto'] && file_exists('uploads/' . $dataLama['foto'])) {
                unlink('uploads/' . $dataLama['foto']);
            }
        } else {
            $fotoName = $dataLama['foto'];
        }

        $this->strukturModel->update($id, [
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'jabatan' => $this->request->getPost('jabatan'),
            'foto' => $fotoName
        ]);

        return redirect()->to('/admin/struktur');
    }

    public function delete($id)
    {
        $data = $this->strukturModel->find($id);
        if ($data['foto'] && file_exists('uploads/' . $data['foto'])) {
            unlink('uploads/' . $data['foto']);
        }

        $this->strukturModel->delete($id);
        return redirect()->to('/admin/struktur');
    }
}
