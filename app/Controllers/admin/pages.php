<?php

namespace App\Controllers\Admin;


use App\Models\BarangModel;
use App\Controllers\BaseController;

class pages extends BaseController
{
    protected $barangmodel;
    public function __construct()
    {
        $this->barangmodel = new BarangModel();
    }

    public function barang()
    {
        $databarang = $this->barangmodel->findall();

        $data = [
            'barang' => $databarang
        ];

        return view("pages/barang", $data);
    }

    public function kategori()
    {
        return view("pages/kategori");
    }

    public function laporan_transaksi()
    {
        return view("pages/laporan_transaski");

    }
}
