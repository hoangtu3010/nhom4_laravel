<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentsController;
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

Route::get('/departments',[DepartmentsController::class ,"list"]);
Route::get('/departments/add',[DepartmentsController::class ,"add"]);
Route::post('/departments/save',[DepartmentsController::class ,"save"]);
Route::get('/departments/delete/{id}',[DepartmentsController::class ,"delete"]);
Route::get('/departments/edit/{id}',[DepartmentsController::class ,"edit"]);
Route::post('/departments/update/{id}',[DepartmentsController::class ,"update"]);




