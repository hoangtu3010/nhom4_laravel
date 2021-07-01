<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\Admin\Auth\LoginController;

//Route::match(["get", "post"], "login", [LoginController::class, "login"])->name("login");

Route::middleware("auth:admin")->group(function (){

    Route::middleware("admin")->group(function (){
        Route::get('/', function () {
            return view('home');
        });
        Route::get('/calender', function () {
            return view("calender");
        });
    });

    Route::get('/departments', [DepartmentsController::class, "list"]);
    Route::get('/departments/add', [DepartmentsController::class, "add"]);
    Route::post('/departments/save', [DepartmentsController::class, "save"]);
    Route::get('/departments/delete/{id}', [DepartmentsController::class, "delete"]);
    Route::get('/departments/edit/{id}', [DepartmentsController::class, "edit"]);
    Route::post('/departments/update/{id}', [DepartmentsController::class, "update"]);

    Route::get('/customers', [CustomerController::class, "list"]);
    Route::get('/customers/add', [CustomerController::class, "add"]);
    Route::post('/customers/save', [CustomerController::class, "save"]);
    Route::get('/customers/delete/{id}', [CustomerController::class, "delete"]);
    Route::get('/customers/edit/{id}', [CustomerController::class, "edit"]);
    Route::post('/customers/update/{id}', [CustomerController::class, "update"]);

    Route::get('/lead', [LeadController::class, "list"]);
    Route::get('/lead/add', [LeadController::class, "add"]);
    Route::post('/lead/save', [LeadController::class, "save"]);
    Route::get('/lead/delete/{id}', [LeadController::class, "delete"]);
    Route::get('/lead/edit/{id}', [LeadController::class, "edit"]);
    Route::post('/lead/update/{id}', [LeadController::class, "update"]);
});
