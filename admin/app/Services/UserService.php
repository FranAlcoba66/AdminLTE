<?php

namespace App\Services;

use App\Models\RoleUser;
use App\Models\User;

class UserService
{
    private $user;
    private $roleUser;

    public function __construct(User $user, RoleUser $roleUser)
    {
        $this->user = $user;
        $this->roleUser = $roleUser;
    }

    public function editUser($params)
    {
        $this->editRoles($params['user_id'], $params['roles']);
    }

    private function editRoles($userId, $roleIds)
    {
        $user = $this->user->find($userId);

        if ($user) {
            $user->roles()->sync($roleIds);
        }
    }
}
