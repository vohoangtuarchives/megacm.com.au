<?php

namespace App\Http\Controllers\Home;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

abstract class HomeController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
