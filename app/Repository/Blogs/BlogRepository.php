<?php
namespace App\Repository\Blogs;

use App\Repository\BaseRepository;
use App\Models\Blog;

class BlogRepository extends BaseRepository implements BlogRepositoryContract{

    public function model(): string
    {
        return Blog::class;
    }
}
