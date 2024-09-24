<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ClientProjectController;

Route::get('/client_projects', [ClientProjectController::class, 'index']);
Route::post('/client_projects', [ClientProjectController::class, 'store']);
Route::get('/client_projects/{id}', [ClientProjectController::class, 'show']);
Route::put('/client_projects/{id}', [ClientProjectController::class, 'update']);
Route::delete('/client_projects/{id}', [ClientProjectController::class, 'delete']);


