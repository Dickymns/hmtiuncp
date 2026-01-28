<?php

namespace App\Controllers\Beranda;

use App\Controllers\BaseController;
use App\Models\ArtikelModel;

class ArtikelController extends BaseController
{
    protected $artikelModel;

    public function __construct()
    {
        $this->artikelModel = new ArtikelModel();
    }

    public function index()
    {
        helper('text');
        $data = [
            'artikel' => $this->artikelModel->orderBy('tanggal', 'DESC')->paginate(6),
            'pager' => $this->artikelModel->pager
        ];

        return view('beranda/artikel', $data);
    }

    public function detail($id)
    {
        helper('text');
        $artikel = $this->artikelModel->find($id);
        if (!$artikel) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Artikel tidak ditemukan');
        }

        $daftarArtikel = $this->artikelModel
            ->where('id !=', $id)
            ->orderBy('tanggal', 'DESC')
            ->findAll(4);

        return view('beranda/artikel_detail', [
            'artikel' => $artikel,
            'daftarArtikel' => $daftarArtikel
        ]);
    }
}
