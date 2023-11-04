<?php
namespace App\Repository\Cities;

use App\Repository\BaseRepository;
use App\Models\City;

class CityRepository extends BaseRepository implements CityRepositoryContract{

    public function model(): string
    {
        return City::class;
    }
}
