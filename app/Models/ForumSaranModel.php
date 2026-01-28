<?php

namespace App\Models;

use CodeIgniter\Model;

class ForumSaranModel extends Model
{
    protected $table = 'forum_saran';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'saran', 'tanggal'];
    public $timestamps = false;
}
