<?php

namespace App\Controllers\Admin;


use App\Models\LaporanModel;
use App\Controllers\BaseController;

class laporan extends BaseController
{
    protected $laporanmodel;
    public function __construct()
    {
        $this->laporanmodel = new LaporanModel();
    }

    public function index()
    {
        $datalaporan = $this->laporanmodel->findall();

        $data = [
            'laporan' => $datalaporan
        ];

        return view("laporan/index", $data);
    }
}
