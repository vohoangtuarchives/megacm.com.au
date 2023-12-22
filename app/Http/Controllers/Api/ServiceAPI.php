<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class ServiceAPI extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function __construct()
    {
    }

    public function services(){
        $items = DB::table("service_items")->get();

        $services = json_decode(
            file_get_contents(resource_path("data/items.json")), true
        );
        return response()->json($services);
    }
}
