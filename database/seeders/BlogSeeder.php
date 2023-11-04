<?php

namespace Database\Seeders;

use App\Enums\Status;
use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    public function run()
    {
        $photo = 'https://via.placeholder.com/640x480.png/00aa22?text=officiis';

        /**
         * BLog seeder
         */
        for ($i = 1; $i <= 20; $i++) {
            $name = fake()->realText(30);
            $list = \App\Models\BlogCategory::create([
                'name' => $name,
                'content' => fake()->realText(800),
                'desc' => fake()->realText(300),
                'slug' => Str::slug($name),
                'status' => implode(',', [Status::SHOW, Status::OUTSTANDING]),
                "photo" => $photo
            ]);
            for ($i = 1; $i <= 20; $i++) {
                $name = fake()->realText(30);
                \App\Models\Blog::create([
                    'name' => $name,
                    'content' => fake()->realText(800),
                    'desc' => fake()->realText(300),
                    'slug' => Str::slug($name),
                    'status' => implode(',', [Status::SHOW, Status::OUTSTANDING]),
                    "photo" => $photo,
                    "blog_category_id" => $list->id
                ]);
            }
        }
    }
}