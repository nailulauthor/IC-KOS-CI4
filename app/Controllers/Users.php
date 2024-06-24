<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
    public function index()
    {
        // Menampilkan Dashboard
        return view('users/dashboard');
    }

    public function pesan()
    {
        //menampilkan form pesan
        return view('users/pemesanan');
    }
}
