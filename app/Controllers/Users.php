<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\KamarModel;
class Users extends BaseController
{
    protected $kamarmodel;
    public function __construct()
    {
        // membuat construct Kamar
        $this->kamarmodel = new KamarModel();
    }
    public function index()
    {
        // Menampilkan Dashboard
        return view('users/dashboard');
    }

    public function pesan()
    {
        //menampilkan form pesan
        $data = [
            'title' => 'Pemesanan',
            'validation' => $this->validator == null ? [] : $this->validator->getErrors(),
            'kamar' => $this->kamarmodel->findAll()
        ];
        return view('users/pemesanan', $data);
    }

}
