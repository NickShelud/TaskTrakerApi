<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DeskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/desks', [DeskController::class, 'index']);
