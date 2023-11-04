<?php

namespace Database\Seeders;

use App\Enums\Status;
use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FaqSeeder extends Seeder
{
    public function run()
    {
        $photo = 'https://via.placeholder.com/640x480.png/00aa22?text=officiis';


        /**
         * Faq Seeder
         */
        for ($i = 1; $i <= 20; $i++) {
            $name = fake()->realText(30);

            $list = FaqCategory::create([
                'name' => $name,
                'content' => fake()->realText(800),
                'desc' => fake()->realText(300),
                'slug' => Str::slug($name),
                'status' => implode(',', [Status::SHOW, Status::OUTSTANDING]),
                "photo" => $photo
            ]);
            for ($i = 1; $i <= 20; $i++) {
                $name = fake()->realText(30);

                Faq::create([
                    'name' => $name,
                    'content' => fake()->realText(800),
                    'desc' => fake()->realText(300),
                    'slug' => Str::slug($name),
                    'status' => implode(',', [Status::SHOW, Status::OUTSTANDING]),
                    "photo" => $photo,
                    "faq_category_id" => $list->id
                ]);
            }
        }
    }
}