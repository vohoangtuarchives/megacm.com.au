<?php

namespace Database\Seeders;
use App\Models\City;
use App\Repository\Cities\CityRepositoryContract;
use App\Repository\Districts\DistrictRepositoryContract;
use App\Repository\Wards\WardRepositoryContract;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;

class CitiesDistrictsWardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("cities")->truncate();
        $cityRepository = app(CityRepositoryContract::class);
        $districtRepository = app(DistrictRepositoryContract::class);
        $wardRepository = app(WardRepositoryContract::class);

        $city = \Illuminate\Support\Facades\DB::table('cities')->find(1);

        if (empty ($city)) {

            $client = new Client();
//            $body = $client->get('https://raw.githubusercontent.com/madnh/hanhchinhvn/master/dist/tree.json')->getBody();
            $body = File::get(resource_path("data/auCities.json"));
            $cities = json_decode($body);
            // Import cities
//            DB::table('cities')->truncate();
//            DB::table('districts')->truncate();
//            DB::table('wards')->truncate();


            foreach ($cities as $city) {
                $newCity = $cityRepository->create([
                    'name' => $city->city,
                    'lat' => $city->lat,
                    'lng' => $city->lng,
                    'admin_name' => $city->admin_name,
                    'capital' => $city->capital == 'primary' ? City::IS_CAPITAL_PRIMARY :($city->capital == 'admin'?
                        City::IS_CAPITAL_ADMIN: City::IS_NOT_CAPITAL ),
                ]);
                $this->command->getOutput()->writeln("city <info>" . $city->city . "</info> is created successfully");


            }
        }
    }
}