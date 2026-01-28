<?php

namespace App\Controllers\Beranda;

use App\Controllers\BaseController;
use App\Models\VisimisiModel;

class VisimisiController extends BaseController
{
    public function index()
    {
        $model = new VisimisiModel();
        $visimisi = $model->first();

        // Kalau tabel kosong, kasih default agar tidak error di view
        if (!$visimisi) {
            $visimisi = [
                'visi' => 'Belum ada data visi.',
                'misi' => 'Belum ada data misi.'
            ];
        }

        return view('beranda/visimisi', [
            'visimisi' => $visimisi
        ]);
    }
}
