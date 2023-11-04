<?php
namespace App\Repository\BlogCategories;

use App\Repository\BaseRepository;
use App\Models\BlogCategory;

class BlogCategoryRepository extends BaseRepository implements BlogCategoryRepositoryContract{

    public function model(): string
    {
        return BlogCategory::class;
    }
}
