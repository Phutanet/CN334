<?php

use App\Http\Controllers\API\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/projects', [ProjectController::class, 'store']);
Route::get('/projects', [ProjectController::class, 'index']);

Route::get('/projects/{id}', [ProjectController::class, 'read']);
Route::put('/projects/{id}', [ProjectController::class, 'edit']);
Route::delete('/projects/{id}', [ProjectController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
