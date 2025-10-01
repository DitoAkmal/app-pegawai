<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

// Halaman utama (opsional, redirect ke employees)
Route::get('/', function () {
    return redirect('/employees');
});

// Resource route untuk CRUD employee
Route::resource('employees', EmployeeController::class);
