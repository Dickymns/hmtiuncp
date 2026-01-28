<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DokumenModel;
use App\Models\AdminModel;
class DokumenController extends BaseController
{
      protected $userModel;
    
    public function __construct()
    {
        // Cek apakah user sudah login
        if (!session()->get('isLoggedIn')) {
            redirect()->to('/login')->send(); // Gunakan cara bawaan CI4
        }
    } 
    public function index()
    {
        $model = new DokumenModel();
        $data['dokumen'] = $model->findAll();
        return view('admin/dokumen/index', $data);
    }

    public function add()
    {
        return view('admin/dokumen/add');
    }

    public function store()
    {
        $file = $this->request->getFile('file');
        if ($file->isValid() && !$file->hasMoved()) {
            $nama = $file->getName(); // Tetap gunakan nama asli
            $file->move('uploads/dokumen', $nama);

            $model = new DokumenModel();
            $model->save([
                'nama_file' => $nama,
                'deskripsi' => $this->request->getPost('deskripsi'),
                'tanggal_upload' => date('Y-m-d')
            ]);
        }
        return redirect()->to(base_url('admin/dokumen'));
    }

    public function edit($id)
    {
        $model = new DokumenModel();
        $data['dokumen'] = $model->find($id);
        return view('admin/dokumen/edit', $data);
    }

    public function update($id)
    {
        $model = new DokumenModel();
        $data = [
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];
        $model->update($id, $data);
        return redirect()->to(base_url('admin/dokumen'));
    }

    public function delete($id)
    {
        $model = new DokumenModel();
        $dokumen = $model->find($id);
        if ($dokumen) {
            unlink('uploads/dokumen/' . $dokumen['nama_file']);
            $model->delete($id);
        }
        return redirect()->to(base_url('admin/dokumen'));
    }
}
