<?php

namespace App\Models;
use CodeIgniter\Model;

class ProfilModel extends Model
{
    protected $table = 'profil_hmti';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'deskripsi'];
    public $timestamps = false;
}
