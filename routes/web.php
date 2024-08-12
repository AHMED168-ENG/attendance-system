<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;

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

// Route to display attendance records
Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');

// Route to show form for marking attendance
Route::get('/attendance/create', [AttendanceController::class, 'create'])->name('attendance.create');

// Route to store new attendance record
Route::post('/attendance', [AttendanceController::class, 'store'])->name('attendance.store');

Route::get('/attendance/export', [AttendanceController::class, 'export'])->name('attendance.export');
