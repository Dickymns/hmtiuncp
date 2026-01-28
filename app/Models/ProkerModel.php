<?php

namespace App\Models;

use CodeIgniter\Model;

class ProkerModel extends Model
{
    protected $table = 'proker';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_kegiatan', 'deskripsi', 'tanggal_pelaksanaan', 'foto'];
}
