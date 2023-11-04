<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Attribute extends Model
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

    protected $touches = ["attributeGroup"];

    public function attributeGroup(){
        return $this->belongsTo(AttributeGroup::class);
    }
}
