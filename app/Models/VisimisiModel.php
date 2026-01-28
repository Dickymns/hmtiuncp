<?php
namespace App\Models;

use CodeIgniter\Model;

class VisimisiModel extends Model
{
    protected $table = 'visi_misi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['visi', 'misi'];
}
