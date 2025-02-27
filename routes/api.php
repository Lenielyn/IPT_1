<?php

use App\Http\Controllers\ItemController;

Route::get('/items', [ItemController::class, 'index']);       // Get all items
Route::post('/items', [ItemController::class, 'store']);      // Create an item
Route::get('/items/{id}', [ItemController::class, 'show']);   // Get a single item
Route::put('/items/{id}', [ItemController::class, 'update']); // Update an item
Route::delete('/items/{id}', [ItemController::class, 'destroy']); // Delete an item
