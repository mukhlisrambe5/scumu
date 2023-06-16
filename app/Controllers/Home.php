<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UmkmModel;

class Home extends BaseController
{
    public function __construct(){

        $this->UmkmModel = new UmkmModel();
    }
    public function index()
    {
        $data = [
            'umkm' => $this->UmkmModel->all_data()
        ];
        return view('home', $data);
    }
}
