<?php

use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/get/employee/list', 
        [EmployeesController::class, 'getEmployeeList'])->name('employee.list');

Route::get('/get/individual/employee/details', 
        [EmployeesController::class, 'getEmployeeDetails'])->name('employee.details');

Route::post('/get/individual/employee/details',
        [EmployeesController::class, 'getEmployeeDetails'])->name('employee.details');

Route::post('/update/employee/data',        
        [EmployeesController::class, 'updateEmployeeData']);

Route::delete('/delete/employee/data/{employee}', 
        [EmployeesController::class, 'destroy']);

Route::post('/store/employee/data', 
        [EmployeesController::class, 'store']);
