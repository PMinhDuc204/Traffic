<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntersectionController;
use App\Http\Controllers\TrafficLightController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LightStateController;


Route::get('/intersections', [IntersectionController::class, 'index']);
Route::post('/events', [EventController::class, 'store']);
Route::get('/lightstates', [LightStateController::class, 'index']);
Route::get('/trafficlights', [TrafficLightController::class, 'index']);

