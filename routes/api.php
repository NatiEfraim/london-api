<?php

use App\Http\Controllers\CarBookingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(CarBookingController::class)->prefix('car-bookings')->group(function() {

    Route::post('/',[CarBookingController::class, 'store']);

});