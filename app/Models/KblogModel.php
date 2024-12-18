<?php

namespace App\Models;

use CodeIgniter\Model;

class KblogModel extends Model
{
    protected $table = "kategori_blog";
    protected $primarykey = "id_kblog";
    protected $useTimestamps = True;

    
}