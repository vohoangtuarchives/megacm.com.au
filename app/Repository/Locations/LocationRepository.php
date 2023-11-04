<?php
namespace App\Repository\Locations;

use App\Repository\BaseRepository;
use App\Models\Location;

class LocationRepository extends BaseRepository implements LocationRepositoryContract{

    public function model(): string
    {
        return Location::class;
    }
}
