<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntersectionController;
use App\Http\Controllers\TrafficLightController;
use App\Http\Controllers\EventTrafficController;
use App\Http\Controllers\LightStateController;


Route::get('intersections', [IntersectionController::class, 'index']);
Route::get('lightstates', [LightStateController::class, 'index']);
Route::post('lightstates', [LightStateController::class, 'store']);
Route::get('trafficlights', [TrafficLightController::class, 'index']);
Route::post('intersections', [IntersectionController::class, 'store']);
Route::post('events', [EventTrafficController::class, 'store']);

