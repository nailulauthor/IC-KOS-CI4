<?php

namespace App\Models;

use CodeIgniter\Model;

class KamarModel extends Model
{
    protected $table            = 'kamar';
    protected $primaryKey       = 'id_kamar';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_kamar', 'nama_kamar', 'fasilitas', 'deskripsi', 'harga', 'link', 'gambar'];

    public function getkamar($nama_kamar = null)
    {
     
        if ($nama_kamar == null) {
            return $this->findAll();
        }
        return $this->where(['nama_kamar',$nama_kamar])->first();
    }
}
