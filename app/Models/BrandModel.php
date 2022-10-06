<?php

namespace app\Models;

use CodeIgniter\Model;

class BrandModel extends Model
{
    protected $table = 'brand';
    protected $userTimestamps = true;
    protected $allowedFields = ['id_brand', 'nama_brand'];

    public function getBrandAll()
    {
        return $this->findAll();
    }
}
