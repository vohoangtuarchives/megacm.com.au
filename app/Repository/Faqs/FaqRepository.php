<?php
namespace App\Repository\Faqs;

use App\Repository\BaseRepository;
use App\Models\Faq;

class FaqRepository extends BaseRepository implements FaqRepositoryContract{

    public function model(): string
    {
        return Faq::class;
    }
}
