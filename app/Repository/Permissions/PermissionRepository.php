<?php
namespace App\Repository\Permissions;

use App\Repository\BaseRepository;
use App\Models\Permission;

class PermissionRepository extends BaseRepository implements PermissionRepositoryContract{

    public function model(): string
    {
        return Permission::class;
    }
}
