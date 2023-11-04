<?php

$upload_const = 'upload';
$array_const = array('file', 'filemanager', 'sync', 'excel', 'seopage', 'photo', 'video', 'temp', 'user', 'product', 'color', 'news', 'tags');
foreach ($array_const as $ac){
    define("UPLOAD_".strtoupper($ac), public_path("$upload_const/$ac"));
    define("UPLOAD_".strtoupper($ac). "_L", UPLOAD_FILE);
}


use Illuminate\Support\Facades\Route;

Route::middleware([\App\Http\Middleware\Locale::class])
    ->namespace("\App\Http\Controllers\Home")->group(function(){

    Route::get("/", "HomeController@index")->name("home.index");

    Route::get('thumbs/{w}x{h}x{z}/{upload}/{folder}/{photo}', function ($w, $h, $z, $upload, $folder, $photo) {
        $func = new \App\Functions\Func();
        $src = "$upload\/$folder\/$photo";
        $func->createThumbNormal($w, $h, $z, $src, null, "thumbs");
        }, 'thumb');

    Route::get("locale/{locale}", function ($locale){
        \Illuminate\Support\Facades\Session::put("locale", $locale);
        return redirect()->intended("/");
    });

        Route::get("/{any}", "HomeController@any")->name("home.any");
});