<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = "laporan";
    protected $primarykey = "id_laporan";
    protected $useTimestamps = True;
}
