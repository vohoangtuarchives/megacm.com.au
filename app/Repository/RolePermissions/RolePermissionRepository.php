<?php
namespace App\Repository\RolePermissions;

use App\Repository\BaseRepository;
use App\Models\RolePermission;

class RolePermissionRepository extends BaseRepository implements RolePermissionRepositoryContract{

    public function model(): string
    {
        return RolePermission::class;
    }
}
