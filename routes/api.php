<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\ApplicationController;

Route::get('/data', [ExampleController::class, 'index']);
Route::apiResource('items', ApplicationController::class);