<?php
use Illuminate\Support\Facades\Route;

Route::get('/carts-items', [\App\Http\Controllers\Dashboard\CartItemController::class, "show"])
    ->permission("Items Manage")
    ->name("cart.items.index");


Route::get('/faqs', [\App\Http\Controllers\Dashboard\FaqController::class, "show"])
    ->permission("Faqs Manage")
    ->name("faqs.items.index");

