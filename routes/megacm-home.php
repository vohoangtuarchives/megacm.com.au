<?php

use App\Http\Controllers\Home\BlogController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\FaqController;
use App\Http\Controllers\Home\IndexController;
use App\Http\Controllers\Home\PricingController;
use App\Http\Controllers\Home\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::name("home.")->group(function (){
    Route::get("/", [IndexController::class, "index"])->name("index");
    Route::get("book-now", function (){
        return view("index.errors.comming");
    });
    Route::get("about-us", [IndexController::class, "aboutus"])->name("about");
    Route::get("careers", [IndexController::class, "index"])->name("career");
    Route::get("pricing", [IndexController::class, "index"])->name("pricing");
    Route::get("contact", [ContactController::class, "index"])->name("contact");
    Route::get("faq", [IndexController::class, "index"])->name("faq");
    Route::get("review", [IndexController::class, "index"])->name("review");
    Route::get("login", [IndexController::class, "index"])->name("login");


    Route::name("services.")->prefix("services")->group(function (){
        Route::get("/", [ServiceController::class, "index"])->name("index");
        Route::get("/{service}", [ServiceController::class, "service"])->name("service");
    });

    Route::name("faq.")->prefix("faq")->group(function (){
        Route::get("/", [FaqController::class, "index"])->name("index");
        Route::get("/faq-{newslist}", [FaqController::class, "index"])->name("newslist");
    });

    Route::name("blog.")->prefix("blog")->group(function (){
        Route::get("/", [BlogController::class, "index"])->name("index");
        Route::get("/{item}", [BlogController::class, "item"])->name("item");
        Route::get("/category/{category}", [BlogController::class, "category"])->name("category");
    });

    Route::name("cleaning.")->prefix("where-we-serve")->group(function (){
        Route::get("/", [IndexController::class, "allBranchs"])->name("whereWeServe");
        Route::get("house-cleaning-{branch}", [IndexController::class, "cleaningBranch"])->name("branch");
    });

    Route::name("pricing.")->prefix("pricing")->group(function (){
        Route::get("/", [PricingController::class, "index"])->name("index");
    });
});