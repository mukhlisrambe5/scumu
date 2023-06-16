<?php
namespace App\Models;

use CodeIgniter\Model;

class UmkmModel extends Model 
{
    public function all_data()
    {
        return $this->db->table('tb_umkm')->get()->getResultArray();
    }
}