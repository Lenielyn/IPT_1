<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return "hello from api";
});

//example 

Route::apiResource('users', UserController::class);


Route::apiResource('user', UserController::class);
Route::get('/user', [UserController::class, 'view']);
Route::post('/user', [UserController::class, 'add']);
Route::put('/user', [UserController::class, 'update']);
Route::delete('/user', [UserController::class, 'delete']);


