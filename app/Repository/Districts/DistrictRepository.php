<?php
namespace App\Repository\Districts;

use App\Repository\BaseRepository;
use App\Models\District;

class DistrictRepository extends BaseRepository implements DistrictRepositoryContract{

    public function model(): string
    {
        return District::class;
    }
}
