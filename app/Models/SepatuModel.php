<?php

namespace app\Models;

use CodeIgniter\Model;

class SepatuModel extends Model
{
    protected $table = 'sepatu';
    protected $userTimestamps = true;
    protected $allowedFields = ['id_sepatu', 'tipe', 'jenis','warna', 'harga', 'foto1', 'foto2', 'foto3', 'foto4', 'id_brand'];

    public function getSepatu($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id_sepatu' => $id])->first();
    }


    public function getJenisSepatu($jenis)
    {
        return $this->where(['jenis' => $jenis])->findAll();
    }

    public function getDetail($id)
    {
        return $this->where(['id_sepatu' => $id])->first();
    }

    public function getBrand($id)
    {
        return $this->from('brand AS b, sepatu AS s')
            ->where('b.id_brand = s.id_brand')
            ->where('s.id_sepatu', $id)->first();
    }
    
    public function search($keyword){
        return $this->table('sepatu')->like('tipe', $keyword)->orLike('jenis', $keyword)->orLike('warna', $keyword)->orLike('harga', $keyword);

    }
}
