<?php

namespace App\Models;

use CodeIgniter\Model;

class PemesananModel extends Model
{
    protected $table            = 'pemesanan';
    protected $primaryKey       = 'id_pemesanan';
    protected $useAutoIncrement = true;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_pemesanan', 'nama', 'nik', 'alamat', 'telepon', 'gambar_ktp', 'tanggal_masuk', 'tanggal_keluar', 'created_at','updated_at', 'id_kamar'];

   

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function joinToKamar()
    {
        $this->join('kamar', 'kamar.id_kamar = pemesanan.id_kamar')->select('pemesanan.*, kamar.harga');
    }

}
