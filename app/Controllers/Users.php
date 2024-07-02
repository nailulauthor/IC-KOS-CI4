<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\KamarModel;
use App\Models\PemesananModel;
class Users extends BaseController
{
    protected $kamarmodel;
    protected $pemesananmodel;
    public function __construct()
    {
        // membuat construct Kamar
        $this->kamarmodel = new KamarModel();
        $this->pemesananmodel = new PemesananModel();
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

    public function bayar()
    {
        // Menampilkan bayar
        $data = [ 
            'title' => 'Pembayaran',
            'bayar' => $this->pemesananmodel->joinToKamar()->findAll()
        ];
        return view('users/pembayaran', $data);
    }

}
