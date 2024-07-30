<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\DeskController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/desks', [DeskController::class, 'index']);

Route::apiResources([
    'desks' => DeskController::class,
]);
