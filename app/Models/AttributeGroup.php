<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class AttributeGroup extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public const CODE = "code";
    public const NAME = "name";
    public const TYPE = "type";


    protected $fillable = [
        self::CODE,
        self::NAME,
        self::TYPE
    ];

    protected $touches = ["attributes"];

    public function attributes(){
        return $this->hasMany(Attribute::class);
    }
}
