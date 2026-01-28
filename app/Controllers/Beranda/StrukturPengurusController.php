<?php

namespace App\Controllers\Beranda;

use App\Controllers\BaseController;
use App\Models\StrukturPengurusModel;

class StrukturPengurusController extends BaseController
{
    public function index()
    {
        $model = new StrukturPengurusModel();
        $data['pengurus'] = $model->findAll(); // ambil semua pengurus

        return view('beranda/struktur_pengurus', $data);
    }
}
