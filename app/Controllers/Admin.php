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
    public function __construct()
    {
        $this->pemesananmodel = new PemesananModel();
        $this->kamarmodel = new KamarModel();
    }
    public function index()
    {
        //
    }

  
}
