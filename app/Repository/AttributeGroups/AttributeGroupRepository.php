<?php
namespace App\Repository\AttributeGroups;

use App\Repository\BaseRepository;
use App\Models\AttributeGroup;

class AttributeGroupRepository extends BaseRepository implements AttributeGroupRepositoryContract{

    public function model(): string
    {
        return AttributeGroup::class;
    }
}
