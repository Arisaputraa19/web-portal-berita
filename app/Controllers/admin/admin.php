<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class admin extends BaseController
{
    public function barang()
    {
        return view("pages/barang");
    }
}
