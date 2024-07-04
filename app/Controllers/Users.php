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
    protected $helpers = ['form'];
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
                    'rules' => 'required|max_length[16]|min_length[16]|regex_match[[0-9]]',
                    'errors' => [
                        'required' => 'NIK harus di isi.',
                        // 'is_unique' => 'NIK sudah terdaftar',
                        'max_length' => 'NIK kelebihan karakter',
                        'min_length' => 'Panjang NIK 16 karakter',
                        'regex_match' => 'Input NIK dengan angka'
                    ]

                ],
                'alamat' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Alamat  harus di isi.'
                    ]


                ],
                'telepon' => [
                    'rules' => 'required|max_length[13]|min_length[13]|regex_match[[0-9]]',
                    'errors' => [
                        'required' => 'Telepon harus di isi.',
                        'max_length' => 'Telepon kelebihan karakter',
                        'min_length' => 'Panjang Telepon 16 karakter',
                        'regex_match' => 'Input Telepon dengan angka'
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
        return redirect()->to('users/bayar');
    }
    public function delete($id)
    {   
        // Untuk menghapus file
        unlink('assets/img-ktp/'. $this->pemesananmodel->find($id)['gambar_ktp']);

        $this->pemesananmodel->delete($id);
        return redirect()->to('users/bayar');
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
