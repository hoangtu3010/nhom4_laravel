<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\departmentsController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {return view('home');});

Route::get('/departments',[departmentsController::class ,"list"]);
Route::get('/departments/add',[departmentsController::class ,"add"]);
Route::post('/departments/save',[departmentsController::class ,"save"]);
Route::get('/departments/delete/{id}',[departmentsController::class ,"delete"]);
Route::get('/departments/edit/{id}',[departmentsController::class ,"edit"]);
Route::post('/departments/update/{id}',[departmentsController::class ,"update"]);

Route::get('/product/show',[ProductController::class ,"show"]);



