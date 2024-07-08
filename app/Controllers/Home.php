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

    public function send()
    {
        $request = \Config\Services::request();

        $name = $request->getPost('name');
        $email = $request->getPost('email');
        $mobile = $request->getPost('mobile');
        $service = $request->getPost('service');
        $message = $request->getPost('message');
        $wa = $request->getPost('wa');

        $text = "Name: $name\nEmail: $email\nMobile: $mobile\nService: $service\nMessage: $message";

        $url = "https://wa.me/$wa?text=" . urlencode($text);

        return redirect()->to($url);
    }
    
    // Menampilkan Halaman Contact
    public function contact()
    {
        return view('landing/contact');
    }
}
