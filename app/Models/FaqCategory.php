<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class FaqCategory extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public const NAME = "name";
    public const CONTENT = "content";
    public const META_TITLE = "meta_title";
    public const META_DESCRIPTION = "meta_description";
    public const META_KEYWORDS = "meta_keywords";
    public const META_PHOTO = "meta_photo";
    public const META_OPTIONS = "meta_options";

    protected $fillable = [
        self::NAME,
        self::CONTENT,
        self::META_TITLE,
        self::META_DESCRIPTION,
        self::META_KEYWORDS,
        self::META_PHOTO,
        self::META_OPTIONS,
    ];

    protected $touches = ["faqs"];

    public function faqs(){
        return $this->hasMany(Faq::class);
    }


}
