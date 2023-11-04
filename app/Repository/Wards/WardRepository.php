<?php
namespace App\Repository\Wards;

use App\Repository\BaseRepository;
use App\Models\Ward;

class WardRepository extends BaseRepository implements WardRepositoryContract{

    public function model(): string
    {
        return Ward::class;
    }
}
