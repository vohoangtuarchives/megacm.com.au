<?php
namespace App\Repository\Campaigns;

use App\Repository\BaseRepository;
use App\Models\Campaign;

class CampaignRepository extends BaseRepository implements CampaignRepositoryContract{

    public function model(): string
    {
        return Campaign::class;
    }
}
