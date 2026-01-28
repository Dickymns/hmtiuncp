<?php
// File: app/Models/StrukturPengurusModel.php

namespace App\Models;

use CodeIgniter\Model;

class StrukturPengurusModel extends Model
{
    protected $table = 'struktur_pengurus';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'nim', 'jabatan', 'foto'];
}
