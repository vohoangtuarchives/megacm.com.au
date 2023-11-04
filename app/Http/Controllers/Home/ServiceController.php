<?php

namespace App\Http\Controllers\Home;


use App\Models\News;
use App\Models\ProductBrand;
use Illuminate\Support\Str;

class ServiceController extends HomeController
{
    public function index(){
        return view("index.services");
    }

    public function service($service){

        if(view()->exists("index.services.$service")){
            return view("index.services.$service", [
                'service' => $service
            ]);
        }
        return view("index.services", [
            'service' => $service
        ]);
    }

}
