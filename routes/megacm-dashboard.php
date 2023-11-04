<?php

use App\Http\Controllers\Dashboard\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::prefix("dashboard")->name("dashboard.")->group(function(){
    Route::middleware(['auth'])->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::get('/', [\App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('index');

        Route::get('/cities', [\App\Http\Controllers\Dashboard\CitiesController::class, "show"])
            ->permission("View Cities")
            ->name("cities.index");

        Route::get('/locations', [\App\Http\Controllers\Dashboard\LocationController::class, "show"])
            ->permission("View Locations")
            ->name("locations.index");

        Route::get('/settings', [\App\Http\Controllers\Dashboard\SettingController::class, "show"])
            ->permission("View Settings")
            ->name("settings.index");

        Route::post('/settings', [\App\Http\Controllers\Dashboard\SettingController::class, "store"])
            ->permission("Change Settings")
            ->name("settings.store");

        foreach ([
                     'campaign',
                     'role',
                     'user',
                     'customer'
                 ] as $keytmp) {
            $key = \Illuminate\Support\Str::plural($keytmp);

            Route::controller("\\App\\Http\\Controllers\\Dashboard\\" . ucfirst($keytmp) . "Controller")->group(function () use ($key) {
                Route::get("{$key}",'show')
                    ->permission("Show ".ucfirst($key))
                    ->name("{$key}.index");

                Route::get("{$key}/edit/{id}",'edit')
                    ->permission("Edit ".ucfirst($key))
                    ->name("{$key}.edit");
                Route::get("{$key}/create",'create')
                    ->permission("Create ".ucfirst($key))
                    ->name("{$key}.create");

                Route::put("{$key}/edit/{id}",'update')
                    ->permission("Update ".ucfirst($key))
                    ->name("{$key}.update");

                Route::put("{$key}",'store')
                    ->permission("Store ".ucfirst($key))
                    ->name("{$key}.store");

                Route::delete("{$key}/delete",'delete')
                    ->permission("Delete ".ucfirst($key))
                    ->name("{$key}.delete");
            });
        }
        Route::get('users/update-password', [UserController::class, "updatePassword"])->name('users.update-password');
        Route::post('users/update-password', [UserController::class, "updateStorePassword"])->name('users.update-password.update');

        Route::get('/register_campaigns', [\App\Http\Controllers\Dashboard\CampaignController::class, "showCampaignRegister"])
            ->permission("View Register Campaigns")
            ->name("campaigns.register.index");


        Route::post('/register_campaigns', [\App\Http\Controllers\Dashboard\CampaignController::class, "verifyPaymentCampaign"])
            ->permission("Verify Payment for Register Campaigns")
            ->name("campaigns.register.make-payment");

        Route::get('/reports/kol-revenue', [\App\Http\Controllers\Dashboard\ReportController::class, "showKolRevenue"])
            ->permission("Show Kol Revenue")
            ->name("reports.kols.revenue");

        Route::get('/reports/kol-revenue/export', [\App\Http\Controllers\Dashboard\ReportController::class, "exportKolRevenue"])
            ->permission("Export Kol Revenue")->name("reports.kols.revenue.export");

    });

    require __DIR__.'/auth.php';
    require __DIR__.'/megacm.php';
});