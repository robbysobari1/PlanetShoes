<?php

namespace App\Controllers;

use \App\Models\ModelUser;

class User extends BaseController
{
    public function __construct()
    {
        $this->userModel = new ModelUser();
    }
    public function index()
    {
        $data = [
            'title' => 'Profile',
            'user' => $this->userModel->getUser()
        ];
        return view('users/profile', $data);
    }

    public function update()
    {
        $data = [
            'title' => 'Update Profile',
            'user' => $this->userModel->getUser()
        ];
        return view('users/editProfile', $data);
    }

    public function updateProfile()
    {
        //ambil foto
        $foto = $this->request->getFile('foto');
        if ($foto->getError() == 4) {
            $namafoto = $this->request->getVar('fotoLama');
        } else {
            //generate nama
            $namafoto = $foto->getRandomName();
            //pindahkan file ke img
            $foto->move('img/profile', $namafoto);
        }

        $this->userModel->where('id', user_id())
            ->set([
                'nama' => $this->request->getVar('nama'),
                'email' => $this->request->getVar('email'),
                'username' => $this->request->getVar('username'),
                'foto' => $namafoto
            ])
            ->update();
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/profile');
    }

    public function deleteProfile()
    {
        //cari gambar berdasarkan id
        $user = $this->userModel->find(user_id());
        if (!(empty($user['foto']) || $user['foto'] == 'default.png')) {
            //hapus gambar
            unlink('img/profile/' . $user['foto']);
        }
        $this->userModel->delete($user);
        return redirect()->to('/logout');
    }
    //--------------------------------------------------------------------
}
