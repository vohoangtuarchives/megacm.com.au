<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MegaCMSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        DB::table("table_product")->truncate();
        DB::table("table_news")->truncate();
        DB::table("table_news_list")->truncate();

        DB::table("table_product_brand")->truncate();
        File::cleanDirectory(resource_path("views/index/cleaning/branch"));
        foreach ([
                     'Suburbs',
                     'Penrith City',
                     'Berkshire Park',
                     'Cambridge Park',
                     'Castlereagh',
                     'Agnes Banks',
                     'Claremont Meadows',
                     'Colyton',
                     'Cranebrook',
                     'Emu Heights',
                     'Emu Plains',
                     'Erskine Park',
                     'Glenmore Park',
                     'Jamisontown',
                     'Jordan Springs',
                     'Kingswood',
                     'Leonay',
                     'Llandilo',
                     'Londonderry',
                     'Luddenham',
                     'Wallacia',
                     'Mount Vernon',
                     'Kemps Creek',
                     'Mulgoa',
                     'North St Marys',
                     'Orchard Hills',
                     'Oxley Park',
                     'Penrith',
                     'Regentville',
                     'South Penrith',
                     'St Clair',
                     'St Marys',
                     'Werrington',
                     'Black town',
                     'Parrammata',
                     'lLverpool',
                     'Baulkham Hills',
                     'Schofied',
                     'Riverstone',
                     'Rouse Hill',
                     'Box Hill',
                     'Glenbrook',
                     'Valley Hights',
                     'Springwood',
                     'Cranbrook',
                     'Jordan Spring',
                     'Windsor',
                     'Richmond',
                     'Marden Park',
                     'Quaker Hill',
                     'Seven Hill',
                     'Wentworthville'
                 ] as $chinhanh){
            \App\Models\ProductBrand::create([
                'nameen' => $chinhanh,
                'contenten' => fake()->realText(800),
                'descen' => fake()->realText(300),
                'slugen' => Str::slug($chinhanh),
                'status' => 'hienthi,noibat',
                'type' => 'service',
                'date_created' => time()
            ]);
        }

//        foreach ([      "House Cleaning",
//                     "Apartment Cleaning",
//                     "Estate Cleaning",
//                     "Office Cleaning",
//                     "End of Lease Cleaning",
//                     "Regular Cleaning",
//                     "Deep Cleaning",
//                     "Construction Cleaning",
//                     "NDIS Cleaning",
//                     "Oven Cleaning",
//                     "Residential Window Cleaning",
//                     "Tile Cleaning",
//                     "Strata Cleaning",
//                     "Pressure Washing",
//                     "Carpet Cleaning"
//                 ] as $service){
//            \App\Models\Product::create([
//                'nameen' => $service,
//                'slugen' => Str::slug($service),
//                'contenten' => fake()->realText(800),
//                'descen' => fake()->realText(300),
//                'status' => 'hienthi,noibat',
//                'type' => 'service',
//                'date_created' => time(),
//                'size' => '',
//                'color' => '',
//                'xuatxu' => ''
//            ]);
//
//            for ($i = 1;$i <= 20; $i ++){
//                $name = fake()->realText(30);
//                $photo = fake()->imageUrl;
//                $list = \App\Models\NewsList::create([
//                    'nameen' => $name,
//                    'contenten' => fake()->realText(800),
//                    'descen' => fake()->realText(300),
//                    'slugen' => Str::slug($name),
//                    'status' => 'hienthi,noibat',
//                    'type' => 'faq',
//                    'date_created' => time(),
//                    "photo" => $photo
//                ]);
//                for ($i = 1;$i <= 20; $i ++){
//                    $name = fake()->realText(30);
//                    $photo = fake()->imageUrl;
//                    \App\Models\News::create([
//                        'nameen' => $name,
//                        'contenten' => fake()->realText(800),
//                        'descen' => fake()->realText(300),
//                        'slugen' => Str::slug($name),
//                        'status' => 'hienthi,noibat',
//                        'type' => 'faq',
//                        'date_created' => time(),
//                        "photo" => $photo,
//                        "id_list" => $list->id
//                    ]);
//                }
//                $name = fake()->realText(30);
//                $photo = fake()->imageUrl;
//                $list = \App\Models\NewsList::create([
//                    'nameen' => $name,
//                    'contenten' => fake()->realText(800),
//                    'descen' => fake()->realText(300),
//                    'slugen' => Str::slug($name),
//                    'status' => 'hienthi,noibat',
//                    'type' => 'blog',
//                    'date_created' => time(),
//                    "photo" => $photo
//                ]);
//                for ($i = 1;$i <= 20; $i ++){
//                    $name = fake()->realText(30);
//                    $photo = fake()->imageUrl;
//                    \App\Models\News::create([
//                        'nameen' => $name,
//                        'contenten' => fake()->realText(800),
//                        'descen' => fake()->realText(300),
//                        'slugen' => Str::slug($name),
//                        'status' => 'hienthi,noibat',
//                        'type' => 'blog',
//                        'date_created' => time(),
//                        "photo" => $photo,
//                        "id_list" => $list->id
//                    ]);
//                }
//
//            }
//        }

    }
}
