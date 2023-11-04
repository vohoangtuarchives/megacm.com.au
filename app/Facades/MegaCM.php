<?php
namespace App\Facades;

use App\MegaCMManager;
use Illuminate\Support\Facades\Facade;

/* @see MegaCMManager */

class MegaCM extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'megacm';
    }
}