<?php
namespace App\Repository\UserRoles;

use App\Repository\BaseRepository;
use App\Models\UserRole;

class UserRoleRepository extends BaseRepository implements UserRoleRepositoryContract{

    public function model(): string
    {
        return UserRole::class;
    }
}
