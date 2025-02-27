<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\StudentController;

Route::get('/items', [ItemController::class, 'index']);       // Get all items
Route::post('/items', [ItemController::class, 'store']);      // Create an item
Route::get('/items/{id}', [ItemController::class, 'show']);   // Get a single item
Route::put('/items/{id}', [ItemController::class, 'update']); // Update an item
Route::delete('/items/{id}', [ItemController::class, 'destroy']); // Delete an item

Route::apiResource('students', studentsController::class);
Route::apiResource('parents', parentsController::class);
Route::apiResource('teachers', teachersController::class);
Route::apiResource('grades', gradesController::class);
Route::apiResource('courses', coursesController::class);
Route::apiResource('classrooms', classroomsController::class);
Route::apiResource('classroom-students', classroom_studentsController::class);
Route::apiResource('attendances', attendanceController::class);
Route::apiResource('exam-types', exam_typeController::class);
Route::apiResource('exams',classroom_exam_resultsController::class);
Route::apiResource('exam-results', exam_resultsController::class);
