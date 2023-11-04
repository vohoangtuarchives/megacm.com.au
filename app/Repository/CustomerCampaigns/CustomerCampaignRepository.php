<?php
namespace App\Repository\CustomerCampaigns;

use App\Repository\BaseRepository;
use App\Models\CustomerCampaign;

class CustomerCampaignRepository extends BaseRepository implements CustomerCampaignRepositoryContract{

    public function model(): string
    {
        return CustomerCampaign::class;
    }
}
