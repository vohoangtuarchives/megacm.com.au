<?php

namespace App\Http\Controllers\Api;

use App\Models\Faq;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class FaqController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected $faqRepository;

    public function __construct()
    {
    }

    public function getOne(){
        try {

        }catch (\Exception $exception){

        }
    }
    public function getAll(){}
}
