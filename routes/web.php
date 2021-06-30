<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\LeadController;
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

Route::get('/customers',[CustomerController::class ,"list"]);
Route::get('/customers/add',[CustomerController::class ,"add"]);
Route::post('/customers/save',[CustomerController::class ,"save"]);
Route::get('/customers/delete/{id}',[CustomerController::class ,"delete"]);
Route::get('/customers/edit/{id}',[CustomerController::class ,"edit"]);
Route::post('/customers/update/{id}',[CustomerController::class ,"update"]);

Route::get('/lead',[LeadController::class ,"list"]);






