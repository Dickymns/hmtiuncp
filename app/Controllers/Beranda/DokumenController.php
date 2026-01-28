<?php

namespace App\Controllers\Beranda;

use App\Controllers\BaseController;
use App\Models\DokumenModel;

class DokumenController extends BaseController
{
    public function index()
    {
        $model = new DokumenModel();
        $data['dokumen'] = $model->orderBy('tanggal_upload', 'DESC')->findAll();

        return view('beranda/dokumen', $data);
    }

    public function dokumen()
    {
        $dokumenModel = new DokumenModel();
        $data['dokumen'] = $dokumenModel->findAll();

        return view('beranda/dokumen', $data);
    }
}
