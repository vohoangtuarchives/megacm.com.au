<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class PermissionSeeder extends Seeder
{
    protected $dev;


    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call("permission:reload");
    }
}
