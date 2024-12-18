<?php

namespace App\Controllers\Admin;


use App\Models\KategoriModel;
use App\Controllers\BaseController;

class kategori extends BaseController
{
    protected $kategorimodel;
    public function __construct()
    {
        $this->kategorimodel = new KategoriModel();
    }

    public function index()
    {
        $datakategori = $this->kategorimodel->findall();

        $data = [
            'kategori' => $datakategori
        ];

        return view("kategori/index", $data);
    }
}
