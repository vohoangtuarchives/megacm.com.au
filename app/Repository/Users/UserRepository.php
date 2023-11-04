<?php
namespace App\Repository\Users;

use App\Repository\BaseRepository;
use App\Models\User;

class UserRepository extends BaseRepository implements UserRepositoryContract{

    public function model(): string
    {
        return User::class;
    }
}
