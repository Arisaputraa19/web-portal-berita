<?php

namespace App\Controllers;
use App\Models\GaleriModel;



class galeri extends BaseController
{

    public function __construct(){
        $this->galerimodel = new GaleriModel();

    }

    public function index()
    {

        $datagaleri = $this->galerimodel->findall();
        $data = [
            'galeri' => $datagaleri
        ];

        return view('blog/galeri', $data);
    }

        public function create()
    {

        return view('blog/creategaleri');
    }

    public function save()
    {
 
        

        //upload gambar
        $filegaleri = $this->request->getFile('nm_galeri');
        $filegaleri->move('img');
        $namagambar = $filegaleri->getName();


        $this->galerimodel->save([
            'nm_galeri' => $namagambar
        ]);
        session()->setFlashdata('pesan',"Artikel Berhasil di tambahkan");

        return redirect()->to('http://localhost:8080/galeri');

    }

}
