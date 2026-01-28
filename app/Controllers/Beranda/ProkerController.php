<?php

namespace App\Controllers\Beranda;

use App\Controllers\BaseController;
use App\Models\ProkerModel;

class ProkerController extends BaseController
{
    protected $prokerModel;

    public function __construct()
    {
        $this->prokerModel = new ProkerModel();
    }

    public function index()
    {
        helper('text');
        $model = new \App\Models\ProkerModel();
    $data = [
        'proker' => $model->paginate(6), // 6 data per halaman
        'pager' => $model->pager,
    ];
    
    return view('beranda/proker', $data);
    }

    public function detail($id)
    {
        
        helper('text');
        $proker = $this->prokerModel->find($id);

        if (!$proker) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Program kerja tidak ditemukan');
        }

        // Ambil daftar semua proker kecuali yang sedang dibuka
        $daftarProker = $this->prokerModel
            ->where('id !=', $id)
            ->findAll(4); // ambil 4 proker terbaru lainnya

        return view('beranda/proker_detail', [
            'proker' => $proker,
            'daftarProker' => $daftarProker,
        ]);
    }

}
