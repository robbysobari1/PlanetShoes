<?php

namespace App\Controllers;

use \App\Models\SepatuModel;
use \App\Models\BrandModel;
use \App\Models\ModelUser;
use \App\Models\RoleModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->sepatuModel = new SepatuModel();
        $this->brandModel = new BrandModel();
        $this->userModel = new ModelUser();
        $this->roleModel = new RoleModel();
    }

    public function catalogue()
    {
        $keyword = $this->request->getVar('keyword');
        if($keyword){
            $sepatu = $this->sepatuModel->search($keyword);
        }else{
            $sepatu = $this->sepatuModel;
        }

        $data = [
            'title' => 'Admin Catalogue',
            'brand'     => $this->brandModel->getBrandAll(),
            'sepatu'    => $this->sepatuModel->getSepatu()
        ];
        return view('admin/catalogue', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form tambah data',
            'brand' => $this->brandModel->getBrandAll(),
            'sepatu' => $this->sepatuModel->getSepatu(),
            'validation' => \config\Services::validation()
        ];
        return view('admin/create', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'foto1' => [
                'rules' => 'max_size[foto1,1024]|is_image[foto1]|mime_in[foto1,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar!',
                    'is_image' => 'Upload file gambar!',
                    'mime_in' => 'Upload file gambar!'
                ]
            ],
            'foto2' => [
                'rules' => 'max_size[foto2,1024]|is_image[foto2]|mime_in[foto2,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar!',
                    'is_image' => 'Upload file gambar!',
                    'mime_in' => 'Upload file gambar!'
                ]
            ],
            'foto3' => [
                'rules' => 'max_size[foto3,1024]|is_image[foto3]|mime_in[foto3,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar!',
                    'is_image' => 'Upload file gambar!',
                    'mime_in' => 'Upload file gambar!'
                ]
            ],
            'foto4' => [
                'rules' => 'max_size[foto4,1024]|is_image[foto4]|mime_in[foto4,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar!',
                    'is_image' => 'Upload file gambar!',
                    'mime_in' => 'Upload file gambar!'
                ]
            ]
        ])) {

            return redirect()->to('/admin/create')->withInput();
        }


        //ambil foto 1
        $foto1 = $this->request->getFile('foto1');
        if ($foto1->getError() == 4) {
            $namaFoto1 = 'defaultSepatu.jpg';
        } else {
            //generate nama
            $namaFoto1 = $foto1->getRandomName();
            //pindahkan file ke img
            $foto1->move('img/shoes', $namaFoto1);
        }

        // ambil foto 2
        $foto2 = $this->request->getFile('foto2');
        if ($foto2->getError() == 4) {
            $namaFoto2 = 'defaultSepatu.jpg';
        } else {
            //generate nama
            $namaFoto2 = $foto2->getRandomName();
            //pindahkan file ke img
            $foto2->move('img/shoes', $namaFoto2);
        }

        //ambil foto 3
        $foto3 = $this->request->getFile('foto3');
        if ($foto3->getError() == 4) {
            $namaFoto3 = 'defaultSepatu.jpg';
        } else {
            //generate nama
            $namaFoto3 = $foto3->getRandomName();
            //pindahkan file ke img
            $foto3->move('img/shoes', $namaFoto3);
        }

        //ambil foto 4
        $foto4 = $this->request->getFile('foto4');
        if ($foto4->getError() == 4) {
            $namaFoto4 = 'defaultSepatu.jpg';
        } else {
            //generate nama
            $namaFoto4 = $foto4->getRandomName();
            //pindahkan file ke img
            $foto4->move('img/shoes', $namaFoto4);
        }

        $this->sepatuModel->save([
            'id_sepatu' => substr(md5(uniqid(rand(), true)), 16, 16),
            'tipe' => $this->request->getVar('tipe'),
            'jenis' => $this->request->getVar('jenis'),
            'warna' => $this->request->getVar('warna'),
            'harga' => $this->request->getVar('harga'),
            'foto1' => $namaFoto1,
            'foto2' => $namaFoto2,
            'foto3' => $namaFoto3,
            'foto4' => $namaFoto4,
            'id_brand' => $this->request->getVar('id_brand')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/admin/catalogue');
    }

    public function update($id)
    {
        $data = [
            'title' => 'Form edit data',
            'brand' => $this->brandModel->getBrandAll(),
            'selected_brand' => $this->sepatuModel->getBrand($id),
            'sepatu' => $this->sepatuModel->getSepatu($id)
        ];
        return view('/admin/update', $data);
    }

    public function updateSepatu($id)
    {

       
       //validasi input
        if (!$this->validate([
            'foto1' => [
                'rules' => 'max_size[foto1,1024]|is_image[foto1]|mime_in[foto1,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar!',
                    'is_image' => 'Upload file gambar!',
                    'mime_in' => 'Upload file gambar!'
                ]
            ],
            'foto2' => [
                'rules' => 'max_size[foto2,1024]|is_image[foto2]|mime_in[foto2,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar!',
                    'is_image' => 'Upload file gambar!',
                    'mime_in' => 'Upload file gambar!'
                ]
            ],
            'foto3' => [
                'rules' => 'max_size[foto3,1024]|is_image[foto3]|mime_in[foto3,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar!',
                    'is_image' => 'Upload file gambar!',
                    'mime_in' => 'Upload file gambar!'
                ]
            ],
            'foto4' => [
                'rules' => 'max_size[foto4,1024]|is_image[foto4]|mime_in[foto4,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar!',
                    'is_image' => 'Upload file gambar!',
                    'mime_in' => 'Upload file gambar!'
                ]
            ]
        ])) {

            return redirect()->to('/admin/update')->withInput();
        }
        
        //ambil foto 1
        $foto1 = $this->request->getFile('foto1');
        if ($foto1->getError() == 4) {
            $namaFoto1 = $this->request->getVar('foto1Lama');
        } else {
            //generate nama
            $namaFoto1 = $foto1->getRandomName();
            //pindahkan file ke img
            $foto1->move('img/shoes', $namaFoto1);
        }

        // ambil foto 2
        $foto2 = $this->request->getFile('foto2');
        if ($foto2->getError() == 4) {
            $namaFoto2 = $this->request->getVar('foto2Lama');
        } else {
            //generate nama
            $namaFoto2 = $foto2->getRandomName();
            //pindahkan file ke img
            $foto2->move('img/shoes', $namaFoto2);
        }

        //ambil foto 3
        $foto3 = $this->request->getFile('foto3');
        if ($foto3->getError() == 4) {
            $namaFoto3 = $this->request->getVar('foto3Lama');
        } else {
            //generate nama
            $namaFoto3 = $foto3->getRandomName();
            //pindahkan file ke img
            $foto3->move('img/shoes', $namaFoto3);
        }

        //ambil foto 4
        $foto4 = $this->request->getFile('foto4');
        if ($foto4->getError() == 4) {
            $namaFoto4 = $this->request->getVar('foto4Lama');
        } else {
            //generate nama
            $namaFoto4 = $foto4->getRandomName();
            //pindahkan file ke img
            $foto4->move('img/shoes', $namaFoto4);
        }

        $this->sepatuModel->where('id_sepatu', $id)
            ->set([
                'tipe' => $this->request->getVar('tipe'),
                'jenis' => $this->request->getVar('jenis'),
                'warna' => $this->request->getVar('warna'),
                'harga' => $this->request->getVar('harga'),
                'foto1' => $namaFoto1,
                'foto2' => $namaFoto2,
                'foto3' => $namaFoto3,
                'foto4' => $namaFoto4,
                'id_brand' => $this->request->getVar('id_brand')
            ])
            ->update();
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/admin/catalogue');
    }


    public function deleteSepatu($id)
    {
        //cari gambar berdasarkan id
        $sepatu = $this->sepatuModel->where('id_sepatu', $id)->first();
        if ($sepatu['foto1'] != 'default.jpg') {
            //hapus gambar
            unlink('img/shoes/' . $sepatu['foto1']);
        } if ($sepatu['foto2'] != 'default.jpg') {
            //hapus gambar
            unlink('img/shoes/' . $sepatu['foto2']);
        } if ($sepatu['foto3'] != 'default.jpg') {
            //hapus gambar
            unlink('img/shoes/' . $sepatu['foto3']);
        } if ($sepatu['foto4'] != 'default.jpg') {
            //hapus gambar
            unlink('img/shoes/' . $sepatu['foto4']);
        }

        $this->sepatuModel->where('id_sepatu',  $id)->delete();
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/admin/catalogue');
    }

    //--------------------------------------------------------------------
    //untuk edit user
    public function users()
    {
        $data = [
            'title' => 'Users',
            'users' => $this->userModel->getUsersRole()
        ];
        return view('admin/users', $data);
    }

    public function updateUsers($id)
    {
        $this->roleModel->where('user_id', $id)
            ->set([
                'group_id' => $this->request->getVar('group_id')
            ])
            ->update();
        session()->setFlashdata('pesan', 'Berhasil ubah role!');
        return redirect()->to('/admin/users');
    }

    public function deleteUser($id)
    {
        $this->userModel->delete($id);
        session()->setFlashdata('pesan', 'User berhasil dihapus!');
        return redirect()->to('/admin/users');
    }
}
