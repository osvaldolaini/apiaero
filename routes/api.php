<?php

use App\Http\Controllers\Api\v1\AircraftsController;
use App\Http\Controllers\Api\v1\AirfieldsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('ensureTokenIsValid')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('ensureTokenIsValid')->prefix('v1')->group(function () {
    Route::get('/aeroportos', [AirfieldsController::class, 'index'])
        ->name('airfields');
    Route::get('/aeroportos/{codigoOaci}', [AirfieldsController::class, 'show'])
        ->name('airfield');
    Route::get('/aeronaves', [AircraftsController::class, 'index'])
        ->name('airfields');
    Route::get('/aeronaves/{prefix}', [AircraftsController::class, 'show'])
        ->name('airfield');
});
