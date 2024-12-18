<?php

namespace App\Controllers\Admin;


use App\Models\BarangModel;
use App\Controllers\BaseController;

class barang extends BaseController
{
    protected $barangmodel;
    public function __construct()
    {
        $this->barangmodel = new BarangModel();
    }

    public function index()
    {
        $databarang = $this->barangmodel->findall();

        $data = [
            'barang' => $databarang
        ];

        return view("barang/index", $data);
    }

    public function create()
    {
        return view("barang/create");
    }

    public function simpan()
    {
        dd($this->request->getVar());
        
    }
}
