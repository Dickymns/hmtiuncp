<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ArtikelModel;
use App\Models\AdminModel;

class ArtikelController extends BaseController
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
        $model = new ArtikelModel();
        $data['artikel'] = $model->findAll();
        return view('admin/artikel/index', $data);
    }

    public function add()
    {
        return view('admin/artikel/add');
    }

    public function store()
    {
        $file = $this->request->getFile('foto');
        $namaFoto = '';

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $namaFoto = $file->getRandomName();
            $file->move('uploads/artikel', $namaFoto);
        }

        $model = new ArtikelModel();
        $model->save([
            'judul' => $this->request->getPost('judul'),
            'konten' => $this->request->getPost('konten'),
            'foto' => $namaFoto,
            'tanggal' => date('Y-m-d')
        ]);

        return redirect()->to(base_url('admin/artikel'));
    }

    public function edit($id)
    {
        $model = new ArtikelModel();
        $data['artikel'] = $model->find($id);
        return view('admin/artikel/edit', $data);
    }

    public function update($id)
    {
        $model = new ArtikelModel();
        $artikel = $model->find($id);

        $file = $this->request->getFile('foto');
        $namaFoto = $artikel['foto'];

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $namaFoto = $file->getRandomName();
            $file->move('uploads/artikel', $namaFoto);
        }

        $model->update($id, [
            'judul' => $this->request->getPost('judul'),
            'konten' => $this->request->getPost('konten'),
            'foto' => $namaFoto,
            'tanggal' => date('Y-m-d')
        ]);

        return redirect()->to(base_url('admin/artikel'));
    }

    public function delete($id)
    {
        $model = new ArtikelModel();
        $artikel = $model->find($id);
        if ($artikel && file_exists('uploads/artikel/' . $artikel['foto'])) {
            unlink('uploads/artikel/' . $artikel['foto']);
        }
        $model->delete($id);
        return redirect()->to(base_url('admin/artikel'));
    }
}
