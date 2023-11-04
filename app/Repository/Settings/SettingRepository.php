<?php
namespace App\Repository\Settings;

use App\Repository\BaseRepository;
use App\Models\Setting;

class SettingRepository extends BaseRepository implements SettingRepositoryContract{

    public function model(): string
    {
        return Setting::class;
    }
}
