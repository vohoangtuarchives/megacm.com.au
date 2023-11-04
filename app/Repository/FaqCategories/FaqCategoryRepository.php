<?php
namespace App\Repository\FaqCategories;

use App\Repository\BaseRepository;
use App\Models\FaqCategory;

class FaqCategoryRepository extends BaseRepository implements FaqCategoryRepositoryContract{

    public function model(): string
    {
        return FaqCategory::class;
    }
}
