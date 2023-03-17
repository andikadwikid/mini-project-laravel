<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ReportController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(DivisionController::class)->group(function () {
    Route::middleware('auth')->prefix('dashboard')->group(function () {
        Route::get('/division', 'index')->name('division.index');
        Route::get('/division/create', 'create')->name('division.create');
    });
});

Route::controller(EmployeeController::class)->group(function () {
    Route::middleware('auth')->prefix('dashboard')->group(function () {
        Route::get('/employee', 'index')->name('employee.index');
        Route::get('/employee/create', 'create')->name('employee.create');
    });
});

Route::controller(ReportController::class)->group(function () {
    Route::middleware('auth')->prefix('dashboard')->group(function () {
        Route::get('/report', 'index')->name('report.index');
    });
});

Route::controller(AttendanceController::class)->group(function () {
    Route::middleware('auth')->prefix('dashboard')->group(function () {
        Route::get('/attendance', 'index')->name('attendance.index');
        Route::get('/attendance/create', 'create')->name('attendance.create');
    });
});
