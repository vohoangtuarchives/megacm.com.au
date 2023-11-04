<?php

namespace App\Http\Controllers\Home;


use App\Enums\Status;
use App\Models\News;
use App\Models\NewsList;
use App\Models\ProductBrand;
use App\Repository\FaqCategories\FaqCategoryRepository;
use App\Repository\Faqs\FaqRepositoryContract;
use Illuminate\Support\Str;

class FaqController extends HomeController
{

    public function __construct(public FaqCategoryRepository $faqCategory, public FaqRepositoryContract $faq)
    {
    }

    public function index($newslist = null){
        $faqLists = $this->faqCategory->with("faqs")
            ->whereRaw("FIND_IN_SET ('".Status::SHOW."', status)")
            ->get();
        if($newslist){
            $list = $faqLists->where("slug", "=",$newslist)->first();
        }else{
            $list = $faqLists->first();
        }

            $newsItems = $list->faqs ?? null;


        return view("index.faq", [
            'faqLists' => $faqLists,
            'newsList' => $list,
            'newsItems' => $newsItems
        ]);
    }

}
