<?php
namespace App\Repository\UserPermissions;

use App\Repository\BaseRepository;
use App\Models\UserPermission;

class UserPermissionRepository extends BaseRepository implements UserPermissionRepositoryContract{

    public function model(): string
    {
        return UserPermission::class;
    }
}
