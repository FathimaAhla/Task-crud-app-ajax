<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TodoController::class,'index']);
Route::post('/add', [TodoController::class,'add']);
Route::post('/update/{id}', [TodoController::class,'update']);
Route::get('delete/{id}',[TodoController::class,'delete']);
Route::get('/done/{id}', [TodoController::class,'done']);
