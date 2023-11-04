<?php
namespace App\Models\Traits;

trait ScopeAttribute{
    public function scopeBranch($query, $branch){
        $query->where("type", "=", "service")->where("slug".app()->getLocale(), "=", $branch);
        return $query;
    }
}