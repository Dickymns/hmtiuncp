<?php

namespace App\Controllers\Beranda;

use App\Controllers\BaseController;
use App\Models\ProfilModel;

class ProfilController extends BaseController
{
    public function index()
    {
        $profilModel = new ProfilModel();
        $profil = $profilModel->findAll(); // ambil 1 profil (asumsi hanya 1)

        return view('beranda/profil', ['profil' => $profil]);
    }
}
