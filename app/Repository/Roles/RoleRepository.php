<?php
namespace App\Repository\Roles;

use App\Repository\BaseRepository;
use App\Models\Role;

class RoleRepository extends BaseRepository implements RoleRepositoryContract{

    public function model(): string
    {
        return Role::class;
    }
}
