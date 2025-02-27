<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\studentsController;
use App\Http\Controllers\parentsController;
use App\Http\Controllers\teachersController;
use App\Http\Controllers\gradesController;
use App\Http\Controllers\coursesController;
use App\Http\Controllers\classroomsController;
use App\Http\Controllers\classroom_studentsController;
use App\Http\Controllers\attendance__Controller;
use App\Http\Controllers\exam_typeController;
use App\Http\Controllers\exam_resultsController;
use App\Http\Controllers\classroom_exam_resultsController;

//examples
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