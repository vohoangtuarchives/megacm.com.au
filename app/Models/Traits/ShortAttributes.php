<?php
namespace App\Models\Traits;

trait ShortAttributes{

    public function getNameAttribute(){
        return $this->{"name". app()->getLocale()};
    }

    public function getContentAttribute(){
        return $this->{"content". app()->getLocale()};
    }

    public function getDescAttribute(){
        return $this->{"desc". app()->getLocale()};
    }

    public function getSlugAttribute(){
        return $this->{"slug". app()->getLocale()};
    }
}