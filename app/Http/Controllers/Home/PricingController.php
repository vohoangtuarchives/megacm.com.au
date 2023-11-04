<?php

namespace App\Http\Controllers\Home;


use App\Models\News;
use App\Models\ProductBrand;
use Illuminate\Support\Str;

class PricingController extends HomeController
{
    public function index(){
        return view("index.pricing");
    }

}
