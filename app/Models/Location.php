<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public const NAME = "name";

    public const SLUG = "slug";

    protected $fillable = [
        self::NAME
    ];
}
