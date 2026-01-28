<?php

namespace App\Models;

use CodeIgniter\Model;

class SejarahModel extends Model
{
    protected $table = 'sejarah';
    protected $primaryKey = 'id';
    protected $allowedFields = ['deskripsi'];
    public $timestamps = false;
}
