<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriModel extends Model
{
    protected $table = "galeri";
    protected $primarykey = "id_galeri";
    protected $useTimestamps = True;
    protected $allowedFields = ['nm_galeri'];
}