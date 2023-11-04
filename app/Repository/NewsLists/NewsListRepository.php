<?php
namespace App\Repository\NewsLists;

use App\Repository\BaseRepository;
use App\Models\NewsList;

class NewsListRepository extends BaseRepository implements NewsListRepositoryContract{

    public function model(): string
    {
        return NewsList::class;
    }
}
