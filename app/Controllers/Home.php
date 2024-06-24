<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('landing/index');
    }

    // Menampilkan Halaman About
    public function about()
    {
        return view('landing/about');
    }
    
    // Menampilkan Halaman Contact
    public function contact()
    {
        return view('landing/contact');
    }
}
