<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\SalaryController;

// Halaman utama diarahkan ke data departemen
Route::get('/', function () {
    return redirect()->route('departments.index');
});

// CRUD Department
Route::resource('departments', DepartmentController::class);

// CRUD Position
Route::resource('positions', PositionController::class);

// CRUD Employee
Route::resource('employees', EmployeeController::class);

// CRUD Attendance
Route::resource('attendance', AttendanceController::class);

// CRUD Salary
Route::resource('salaries', SalaryController::class);
