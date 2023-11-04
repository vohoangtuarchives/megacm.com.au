<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public const NAME = "name";
    public const SLUG = "slug";
    public const CONTENT = "content";
    public const META_TITLE = "meta_title";
    public const META_DESCRIPTION = "meta_description";
    public const META_KEYWORDS = "meta_keywords";
    public const META_PHOTO = "meta_photo";
    public const META_OPTIONS = "meta_options";
    public const STATUS = "status";

    protected $fillable = [
        self::NAME,
        self::SLUG,
        self::CONTENT,
        self::META_TITLE,
        self::META_DESCRIPTION,
        self::META_KEYWORDS,
        self::META_PHOTO,
        self::META_OPTIONS,
        self::STATUS
    ];

    protected $touches = ["blogCategory"];

    public function blogCategory(){
        return $this->belongsTo(BlogCategory::class);
    }
}
