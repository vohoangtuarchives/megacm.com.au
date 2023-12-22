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
        $serviceItem = [];

        $services = json_decode(
            file_get_contents(resource_path("data/items.json")), true
        );
        $priceItem = [
            117 => [
                "id" => 117,
                "name" => "1 Bedroom apartment - $125",
                "price" => 125,
            ],
            118 => [
                "id" => 118,
                "name" => "2 Bedroom apartment/house - $145",
                "price" => 145,
            ],
            119 => [
                "id" => 119,
                "name" => "3 Bedrooms apartment/house - $180",
                "price" => 180,
            ],
            101 => [
                "id" => 101,
                "name" => "4 Bedroom house - $220",
                "price" => 220,
            ],
            104 => [
                "id" => 104,
                "name" => "5 Bedroom house - $260",
                "price" => 260,
            ],
            105 => [
                "id" => 105,
                "name" => "6 Bedroom house - $298",
                "price" => 298,
            ],
            106 => [
                "id" => 106,
                "name" => "1 Bedroom apartment - $208",
                "price" => 208,
            ],
            120 => [
                "id" => 120,
                "name" => "2 Bedroom apartment/house - $248",
                "price" => 248,
            ],
            121 => [
                "id" => 121,
                "name" => "3 Bedroom apartment/house - $298",
                "price" => 298,
            ],
            122 => [
                "id" => 122,
                "name" => "4 Bedroom house - $358",
                "price" => 358,
            ],
            114 => [
                "id" => 114,
                "name" => "5 Bedrooms house - $398",
                "price" => 398,
            ],
            113 => [
                "id" => 113,
                "name" => "6 Bedroom house - $427",
                "price" => 427,
            ],
            112 => [
                "id" => 112,
                "name" => "1 Bedroom - $308",
                "price" => 308,
            ],
            111 => [
                "id" => 111,
                "name" => "2 Bedroom apartment/house - $398",
                "price" => 398,
            ],
            110 => [
                "id" => 110,
                "name" => "3 Bedrooms apartment/house - $498",
                "price" => 498,
            ],
            109 => [
                "id" => 109,
                "name" => "4 Bedrooms house - $598",
                "price" => 598,
            ],
            108 => [
                "id" => 108,
                "name" => "5 Bedrooms house - $698",
                "price" => 698,
            ],
            99 => [
                "id" => 99,
                "name" => "6 Bedroom house - $1040",
                "price" => 1040,
            ],
            71 => [
                "id" => 71,
                "name" => "Hourly Service",
                "price" => 61,
            ],
        ];
        foreach ($services['services'] as $stt => $item){
            if(isset($priceItem[$item['id']])){
                $services['services'][$stt]['name'] = $priceItem[$item['id']]['name'];
                $services['services'][$stt]['price'] = $priceItem[$item['id']]['price'];
            }
        }
        return response()->json($services);
    }
}
