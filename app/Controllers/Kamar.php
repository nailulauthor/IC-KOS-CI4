<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\KamarModel;
use App\Models\PeraturanModel;

class Kamar extends BaseController
{
    protected $kamarmodel;
    protected $peraturanmodel;

    public function __construct()
    {
        $this->kamarmodel = new KamarModel();
        $this->peraturanmodel = new PeraturanModel();
    }
    public function index()
    {
        //Menampilkan Peraturan
        $tampildata = $this->peraturanmodel->findAll();
        $data = [
            'tampil' => $tampildata,
            'title' => 'Peraturan Kos'
        ];
        return view('users/peraturan',$data);

    }

   
    public function details(){
        // menampilkan kelas kamar dan detail
        $data = [
            'tampil' => $this->kamarmodel->getkamar(),
            'title' => 'Kelas Kamar'
        ];
        return view("users/kamar", $data);
    }

}
