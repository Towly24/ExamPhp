<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/list', [App\Http\Controllers\StudentController::class,"listAll"]);
Route::get('/create',[App\Http\Controllers\StudentController::class,"create"]);
Route::post('/create',[App\Http\Controllers\StudentController::class,'store']);
