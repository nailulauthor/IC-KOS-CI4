<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KamarModel;

use App\Models\PemesananModel;
use Faker\Extension\Helper;

class Admin extends BaseController
{
    protected $pemesananmodel;
    protected $kamarmodel;
    protected $helpers = ['form'];
    public function __construct()
    {
        $this->pemesananmodel = new PemesananModel();
        $this->kamarmodel = new KamarModel();
    }
    public function index()
    {
        //
    }

    public function simpan()
    {
        // Digunakan menyimpan Form pemesanan
        if (!$this->validate(
            [
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama Lengkap nama harus di isi.'
                    ]

                ],
                'nik' => [
                    'rules' => 'required|is_unique[pemesanan.nik]',
                    'errors' => [
                        'required' => 'NIK  harus di isi.',
                        'is_unique' => 'NIK  sudah terdaftar'
                    ]

                ],
                'alamat' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Alamat  harus di isi.'
                    ]


                ],
                'telepon' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Telepon harus di isi.'
                    ]


                ],
                'tanggal_masuk' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal Masuk harus di isi.',
                    ]


                ],
                'gambar_ktp' => [
                    'rules' => 'uploaded[gambar_ktp]|max_size[gambar_ktp,1024]|is_image[gambar_ktp]|mime_in[gambar_ktp,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => 'Gambar belum dipilih.',
                        'max_size' => 'Ukuran Gambar Terlalu Besar Max 1MB.',
                        'is_image' => 'Yang dipilih bukan gambar.',
                        'mime_in' => 'Format gambar tidak sesuai',
                    ]


                ],
                'id_kamar' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kelas Kamar Wajib dipilih.',
                    ],
                ],

            ]
        )) {
            //menampilkan pesan kesalahan
            $data = [
                'title' => 'Form Input',
                'kamar' => $this->kamarmodel->findAll(),
                'validation' => $this->validator->getErrors()
            ];
            return view('users/pemesanan', $data);
        }
        // mengambil file dari name gambar
        $fileGambar = $this->request->getFile('gambar_ktp');

        // mengirim gambar ke dalam folder assets/img
        $namaGambar = $fileGambar->getRandomName();
        $fileGambar->move('assets/img-ktp', $namaGambar);

        // Menghitung Tanggal Keluar
        $hari_sewa_kos = $this->request->getVar('tanggal_masuk');
        $tanggal_kedepan = date('Y-m-d', strtotime('+30 days', strtotime($hari_sewa_kos)));

        $this->pemesananmodel->insert(
            [
                'nik' => $this->request->getVar('nik'),
                'nama' => $this->request->getVar('nama'),
                'alamat' => $this->request->getVar('alamat'),
                'telepon' => $this->request->getVar('telepon'),
                'tanggal_masuk' => $this->request->getVar('tanggal_masuk'),
                'tanggal_keluar' => $tanggal_kedepan,
                'id_kamar' => $this->request->getVar('id_kamar'),
                'gambar_ktp' => $namaGambar
            ]
        );
        return redirect()->to('users/pesan');
    }
}
