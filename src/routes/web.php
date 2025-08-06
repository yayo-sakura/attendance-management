<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\UserController;

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

Route::post('/register', [UserController::class, 'register.store']);
Route::post('/login', [UserController::class, 'login.store']);
Route::post('/admin/login', [UserController::class, 'admin_login.store']);

Route::middleware('auth')->group(function () {
    Route::get('/attendance',[AttendanceController::class, 'show']);
    Route::post('/attendance', [AttendanceController::class, 'store'])->name('attendance.store');
    Route::patch('/attendance', [AttendanceController::class, 'update'])->name('attendance.update');
    Route::get('/attendance/list', [AttendanceController::class, 'attendance_list']);
    Route::get('/attendance/{id}', [AttendanceController::class, 'showAttendance_detail']);
    Route::post('/attendance/{id}', [AttendanceController::class, 'attendance_detail']);
    Route::get('/admin/attendance/list', [AttendanceController::class, 'admin_attendance_list']);
    Route::get('/admin/attendance/{id}', [AttendanceController::class, 'showAdmin_attendance_detail']);
    Route::post('/admin/attendance/{id}', [AttendanceController::class, 'admin_attendance_detail']);
    Route::get('/admin/staff/list', [UserController::class, 'staff_list']);
    Route::get('/admin/attendance/staff/{id}', [AttendanceController::class, 'showStaff_attendance_list']);
    Route::post('/admin/attendance/staff/{id}', [AttendanceController::class, 'staff_attendance_list']);
    Route::get('/stamp_correction_request/list', [RequestController::class, 'correction_request_list']);
    Route::get('/stamp_correction_request/approve/{attendance_correct_request}', [RequestController::class, 'correction_request_approve']);
    Route::post('/stamp_correction_request/approve/{attendance_correct_request}', [RequestController::class, 'updateCorrection_request_approve']);
});