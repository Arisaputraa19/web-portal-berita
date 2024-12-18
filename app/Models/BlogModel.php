<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = "blog";
    protected $primarykey = "id_blog";
    protected $useTimestamps = True;
    protected $allowedFields = ['judul_blog','subjudul_blog','isi_blog','gambar','penulis_blog'];

    public function getBlog($id = false)
    {
        if($id == false){
            return $this->findall();
        }

        return $this->where(['id_blog' => $id])->first();
    }
    
}