<?php

namespace App\Controllers\Beranda;

use App\Controllers\BaseController;
use App\Models\SejarahModel;

class SejarahController extends BaseController
{
    public function index()
    {
        $model = new SejarahModel();
        $profil = $model->first();

        // Jika data kosong/null → kasih fallback
        if (!$profil) {
            $profil = [
                'deskripsi' => 'Belum ada data sejarah yang ditambahkan.'
            ];
        }

        return view('beranda/sejarah', [
            'profil' => $profil
        ]);
    }
}
