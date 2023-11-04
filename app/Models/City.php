<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class City extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public const TABLE = "cities";

    public const NAME = "name";

    public const LAT = "lat";

    public const LNG = "lng";

    public const CAPITAL = "capital";

    public const ADMIN_NAME = "admin_name";

    public const IS_CAPITAL_ADMIN = 1;
    public const IS_CAPITAL_PRIMARY = 0;
    public const IS_NOT_CAPITAL = 2;

    protected $fillable = [
        self::NAME,
        self::LAT,
        self::LNG,
        self::CAPITAL,
        self::ADMIN_NAME
    ];

    protected $visible = [
        self::NAME,
        self::LAT,
        self::LNG,
        self::CAPITAL,
        self::ADMIN_NAME
    ];

}
