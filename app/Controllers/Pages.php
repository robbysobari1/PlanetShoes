<?php

namespace App\Controllers;

use \App\Models\SepatuModel;
use \App\Models\CartModel;

class Pages extends BaseController
{

    public function __construct()
    {
        $this->sepatuModel = new SepatuModel();
        $this->cartModel = new CartModel();
    }

    // index page
    public function index()
    {

        $data = [
            'title' => 'Planet Shoes ID',
            'cart'      => $this->cartModel->cart()
        ];
        return view('pages/home', $data);
    }

    // shoes page
    public function shoes()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $sepatu = $this->sepatuModel->search($keyword);
        } else {
            $sepatu = $this->sepatuModel;
        }

        $data = [
            'title'     => 'Shoes',
            'sepatu'    => $this->sepatuModel->getSepatu(),
            'cart'      => $this->cartModel->cart()
        ];
        return view('pages/shoes', $data);
    }

    public function shoesJenis($jenis)
    {
        $data = [
            'title'     => 'Shoes',
            'sepatu'    => $this->sepatuModel->getJenisSepatu($jenis),
            'cart'      => $this->cartModel->cart()
        ];
        return view('pages/shoes', $data);
    }

    //detail page
    public function detail($id)
    {
        $data = [
            'title'     => 'Detail',
            'brand'     => $this->sepatuModel->getBrand($id),
            'sepatu'    => $this->sepatuModel->getDetail($id),
            'cart'      => $this->cartModel->cart()
        ];
        return view('pages/detail', $data);
    }

    // cart page
    public function addtocart()
    {
        $id = $this->request->getVar('id_sepatu');
        $data = [
            'tipe' => $this->request->getVar('tipe'),
            'harga' => $this->request->getVar('harga'),
            'foto' => $this->request->getVar('foto'),
            'id' => user_id()
        ];
        $this->cartModel->insert($data);
        session()->setFlashdata('pesan', 'Berhasil tambah ke cart!');
        return redirect()->to('/shoes');
    }


    public function cart()
    {
        $data = [
            'title'     => 'Cart',
            'cart'      => $this->cartModel->cart(),
            'subtotal'  => 0,
            'tax'       => 0,
            'total'     => 0
        ];
        return view('pages/detailcart', $data);
    }


    public function deleteCart($id)
    {
        $this->cartModel->where('id_item', $id)->delete();
        session()->setFlashdata('pesan', 'Barang berhasil dihapus dari keranjang');
        return redirect()->to('/cart');
    }


    // payment page
    public function payment()
    {
        $data = [
            'title' => 'Payment',
            'cart'      => $this->cartModel->cart()
        ];
        return view('pages/payment', $data);
    }

    public function paymentSuccess()
    {
        $data = [
            'title' => 'Thank You!'
        ];
        return view('pages/paymentsuccess', $data);
    }

    public function done($id)
    {
        $this->cartModel->where('id', $id)->delete();
        return redirect()->to('/paymentsuccess');
    }
    //--------------------------------------------------------------------

}
