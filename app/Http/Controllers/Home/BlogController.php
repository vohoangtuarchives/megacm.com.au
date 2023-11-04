<?php

namespace App\Http\Controllers\Home;


use App\Enums\Status;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\News;
use App\Models\NewsList;
use App\Models\ProductBrand;
use App\Repository\BlogCategories\BlogCategoryRepositoryContract;
use App\Repository\Blogs\BlogRepository;
use App\Repository\Blogs\BlogRepositoryContract;

class BlogController extends HomeController
{
    public function __construct(public BlogCategoryRepositoryContract $blogCategory, public BlogRepositoryContract $blog)
    {
    }

    public function index(){
        $newsLists = $this->blogCategory->with("blogs")
            ->whereRaw("FIND_IN_SET ('".Status::SHOW."', status) and FIND_IN_SET ('".Status::OUTSTANDING."', status)")
            ->get();

        $newestBlog = Blog::with("blogCategory")->orderByDesc("id")->first();

        $blogs = Blog::with("blogCategory")->whereRaw("FIND_IN_SET ('".Status::SHOW."', status)")->paginate(12);

        return view("index.blog", [
            'newsLists' => $newsLists,
            'newestBlog' => $newestBlog,
            'blogs' => $blogs
        ]);
    }

    public function category($category){
        $newsLists = $this->blogCategory->with("blogs")
            ->whereRaw("FIND_IN_SET ('".Status::SHOW."', status) and FIND_IN_SET ('".Status::OUTSTANDING."', status)")
            ->get();

        $category = $this->blogCategory->with("blogs")
            ->where("slug", "=", $category)
            ->whereRaw("FIND_IN_SET ('".Status::SHOW."', status)")->first();

        $blogs = Blog::with("blogCategory")
            ->where("blog_category_id", "=", $category->id)
            ->whereRaw("FIND_IN_SET ('".Status::SHOW."', status)")
            ->paginate(12);

        return view("index.blog.category", [
            'newsLists' => $newsLists,
            'blogs' => $blogs
        ]);
    }


    public function item($blog){

        $blog = $this->blog->with("blogCategory")
            ->whereRaw("FIND_IN_SET ('".Status::SHOW."', status)")
            ->where("slug", "=", $blog)
            ->first();

        return view("index.blog.detail", [
            'blog' => $blog,
        ]);
    }
}
