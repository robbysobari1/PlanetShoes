<?php

namespace app\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table = 'auth_groups_users';
    protected $userTimestamps = true;
    protected $allowedFields = ['user_id', 'group_id'];

    public function getRole()
    {
        return $this->findAll();
    }
}
