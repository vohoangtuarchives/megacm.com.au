<?php

namespace App\Http\Controllers\Home;

use App\Models\StaticModel;

class ContactController extends HomeController
{
    public function index(){
//        $contact = StaticModel::
//            where("type", "=", "lienhe")
//            ->whereRaw("FIND_IN_SET('hienthi',status)")
//            ->first();
        return view("index.contact");
    }

}
