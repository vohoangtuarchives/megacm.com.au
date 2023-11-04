<?php
namespace App\Repository\Attributes;

use App\Repository\BaseRepository;
use App\Models\Attribute;

class AttributeRepository extends BaseRepository implements AttributeRepositoryContract{

    public function model(): string
    {
        return Attribute::class;
    }
}
