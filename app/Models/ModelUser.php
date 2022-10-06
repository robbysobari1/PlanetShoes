<?php

namespace app\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table = 'users';
    protected $userTimestamps = true;
    protected $allowedFields = ['id', 'email', 'username', 'nama', 'foto'];

    public function getUser()
    {
        $id = user_id();
        return $this->where('id', $id)->first();
    }


    public function getUsersRole()
    {
        return $this->select('*')->distinct()
            ->from('auth_groups')
            ->join('auth_groups_users', 'auth_groups.id = auth_groups_users.group_id')
            ->where('users.id = auth_groups_users.user_id')
            ->findAll();
    }

    public function getDetail($id)
    {
        return $this->where(['id_users' => $id])->first();
    }
}
