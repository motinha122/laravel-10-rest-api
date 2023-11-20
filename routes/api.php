<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

//Route::apiResource('/users', UserController::class);

Route::delete('/users/{id}', [UserController::class, 'delete']);
Route::patch('/users/{id}', [UserController::class, 'update']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);

Route::get('/', function () {
    return response()->json([
        'success' => true
    ]);
});