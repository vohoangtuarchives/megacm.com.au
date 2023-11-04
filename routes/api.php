<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix("v1")->group(function (){

    Route::get("/cities", [AddressController::class, "cities"]);
    Route::get("/cities/{id}", [AddressController::class, "city"]);
    Route::get("/cities/{id}/districts", [AddressController::class, "cityDistricts"]);

    Route::get("/districts", [AddressController::class, "districts"]);
    Route::get("/districts/{id}", [AddressController::class, "district"]);
    Route::get("/districts/{id}/wards", [AddressController::class, "districtWards"]);

    Route::get("/wards", [AddressController::class, "wards"]);
    Route::get("/wards/{id}", [AddressController::class, "ward"]);

});