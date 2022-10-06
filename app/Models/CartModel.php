<?php

namespace app\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table = 'cart';
    protected $userTimestamps = true;
    protected $allowedFields = ['id_items', 'tipe', 'harga', 'foto', 'id'];



    public function cart()
    {
        return $this->where('id', user_id())->findAll();
    }
}
