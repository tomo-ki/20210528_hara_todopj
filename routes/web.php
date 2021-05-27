<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;


Route::get('/',[TodoController::class,'index']);
Route::post('/todo/create',[TodoController::class,'create']);
Route::post('/todo/update',[TodoController::class,'update']);
Route::post('/todo/delete',[TodoController::class,'delete']);