<?php
namespace App;

use App\Models\Location;
use App\Models\News;
use App\Models\ProductBrand;
use App\Models\Setting;

class MegaCMManager{

    public function title(){
        return '';
    }
    public function optsetting(){
        return json_decode($this->setting()->options, 1);
    }
    public function locations(){

        return Location::all();
    }
    public function checklist(){
        return config('megacm.checklist', []);
    }
    public function strip_attributes($text){
        return preg_replace("/<([a-z][a-z0-9]*)[^>]*?(\/?)>/si",'<$1$2>', $text);
    }

    public function lastestFAQs(){
        return [];
        return News::where("type", "=", "faq")->whereRaw("FIND_IN_SET('hienthi',status) and FIND_IN_SET('noibat',status)")->take(15)->get();
    }
    public function hotBranch(){
//        return ProductBrand::where("type", "=", "service")->whereRaw("FIND_IN_SET('hienthi',status) and FIND_IN_SET('noibat',status)")->take(15)->get();
        return [];
    }


    public function additionServices(){
        return [
            [
                'name' => 'Dusting',
                'general_cleaning' => true,
                'deep_clean' => true,
                'move_in_out' => true
            ],
            [
                'name' => 'Empty Trash Can(s)',
                'general_cleaning' => true,
                'deep_clean' => true,
                'move_in_out' => true
            ],
            [
                'name' => 'Vacuum Carpet',
                'general_cleaning' => true,
                'deep_clean' => true,
                'move_in_out' => true
            ],
            [
                'name' => 'Sweep & Mop Floors',
                'general_cleaning' => true,
                'deep_clean' => true,
                'move_in_out' => true
            ],
            [
                'name' => 'Clean Mirrors',
                'general_cleaning' => true,
                'deep_clean' => true,
                'move_in_out' => true
            ],
            [
                'name' => 'Clean Window Glass (Interior)',
                'general_cleaning' => false,
                'deep_clean' => false,
                'move_in_out' => true
            ],
            [
                'name' => 'Cobweb Removal',
                'general_cleaning' => false,
                'deep_clean' => true,
                'move_in_out' => true
            ],
        ];
    }

    public function additionServices_WetArea(){
        return [
            [
                'name' => 'Dust Cabinet Doors',
                'general_cleaning' => true,
                'deep_clean' => true,
                'move_in_out' => true
            ],
            [
                'name' => 'Clean Countertops',
                'general_cleaning' => true,
                'deep_clean' => true,
                'move_in_out' => true
            ],
            [
                'name' => 'Vacuum Area Rugs',
                'general_cleaning' => true,
                'deep_clean' => true,
                'move_in_out' => true
            ],
            [
                'name' => 'Polish Cabinet Doors',
                'general_cleaning' => false,
                'deep_clean' => true,
                'move_in_out' => true
            ]
        ];
    }

    public function additionServices_kitchen(){
        return [
            [
                'name' => 'Stove Top and Rangehood',
                'general_cleaning' => true,
                'deep_clean' => true,
                'move_in_out' => true
            ],
            [
                'name' => 'Clean Microwave',
                'general_cleaning' => true,
                'deep_clean' => true,
                'move_in_out' => true
            ],
            [
                'name' => 'Wipe Large Kitchen Appliances',
                'general_cleaning' => true,
                'deep_clean' => true,
                'move_in_out' => false
            ],
            [
                'name' => 'Counter-Top Appliances',
                'general_cleaning' => true,
                'deep_clean' => true,
                'move_in_out' => false
            ],
            [
                'name' => 'Run & Fill Dishwasher',
                'general_cleaning' => true,
                'deep_clean' => true,
                'move_in_out' => true
            ],
            [
                'name' => 'Wipe Laundry Appliances',
                'general_cleaning' => true,
                'deep_clean' => true,
                'move_in_out' => true
            ],

        ];
    }

    public function additionServices_bathrooms(){
        return [
            [
                'name' => 'Scrub & Clean Toilets',
                'general_cleaning' => true,
                'deep_clean' => true,
                'move_in_out' => true
            ],
            [
                'name' => 'Scrub & Clean Showers & Tubs',
                'general_cleaning' => true,
                'deep_clean' => true,
                'move_in_out' => true
            ],
            [
                'name' => 'Scrub & Clean Sinks',
                'general_cleaning' => true,
                'deep_clean' => true,
                'move_in_out' => true
            ]
        ];
    }

    public function additionServices_livingAreas(){
        return [
            [
                'name' => 'Vacuum Closet Space',
                'general_cleaning' => false,
                'deep_clean' => true,
                'move_in_out' => false
            ],
            [
                'name' => 'Dust Furniture & Decorations',
                'general_cleaning' => true,
                'deep_clean' => true,
                'move_in_out' => false
            ],
            [
                'name' => 'Vacuum Couch & Chairs',
                'general_cleaning' => true,
                'deep_clean' => true,
                'move_in_out' => false
            ],
            [
                'name' => 'Make Up Bed',
                'general_cleaning' => true,
                'deep_clean' => true,
                'move_in_out' => false
            ],
            [
                'name' => 'Dusting Ceiling Fans',
                'general_cleaning' => false,
                'deep_clean' => true,
                'move_in_out' => true
            ]
        ];
    }

}