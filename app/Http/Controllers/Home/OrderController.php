<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

class OrderController extends HomeController
{
    public function services(){
        $services = json_decode(
            file_get_contents(resource_path("data/items.json")), true
        );
        return response()->json($services);
    }
    public function book(){

        return view("index.orders.book-now");

    }
}