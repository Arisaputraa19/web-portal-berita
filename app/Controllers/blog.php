<?php

namespace App\Controllers;
use App\Models\BlogModel;
use App\Models\KblogModel;

class blog extends BaseController
{
    protected $blogmodel;

    public function __construct()
    {
        $this->blogmodel = new BlogModel();
        $this->kblogmodel = new KblogModel();
    }

    public function index()
    {
        // $datablog = $this->blogmodel->findall();
        $datakatagoriblog = $this->kblogmodel->findall();

        $data = [
            'blog' =>$this->blogmodel->getBlog(),
            'kategori' => $datakatagoriblog
        ];
        return view('blog/index', $data);
    }

    public function post($id)
    {
        $data = [
            'blog' => $this->blogmodel->getBlog($id)
        ];

        // jika tidak ada 
        if(empty($data['blog'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Ga ada');
        }

        return view("blog/post", $data);
    }

    public function create()
    {


        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('blog/create',$data);
    }

    public function save()
    {
        // validasi 
        if(!$this->validate([
            'judul_blog' => 'required',
            'gambar' => 'uploaded[gambar]'
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to("/blog/create")->withInput()->with('validation', $validation);
        }

        //upload gambar
        $filegambar = $this->request->getFile('gambar');
        $filegambar->move('img');
        $namagambar = $filegambar->getName();


        $this->blogmodel->save([
            'judul_blog' => $this->request->getVar('judul_blog'),
            'subjudul_blog' => $this->request->getVar('subjudul_blog'),
            'isi_blog' => $this->request->getVar('isi_blog'),
            'gambar' => $namagambar,
            'penulis_blog' => $this->request->getVar('penulis_blog')
        ]);
        session()->setFlashdata('pesan',"Artikel Berhasil di tambahkan");

        return redirect()->to('http://localhost:8080/blog');

    }


}
