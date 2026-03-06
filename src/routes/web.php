<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\StampCorrectionRequestController;
use App\Http\Controllers\AdminAttendanceController;
use App\Http\Controllers\AdminStaffController;
use App\Http\Controllers\AdminStampCorrectionRequestController;

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

/*
|--------------------------------------------------
| 未ログイン
|--------------------------------------------------
*/

// 会員登録
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

// 一般ログイン
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);

// 管理者ログイン
Route::get('/admin/login', [AuthController::class, 'showAdminLogin']);
Route::post('/admin/login', [AuthController::class, 'adminLogin']);

/*
|--------------------------------------------------
| 一般ユーザ
|--------------------------------------------------
*/

// Route::middleware(['auth', 'role:user'])->group(function () {

    // 打刻画面
    Route::get('/attendance', [AttendanceController::class, 'index']);

    // 勤怠一覧
    Route::get('/attendance/list', [AttendanceController::class, 'list']);

    // 勤怠詳細
    Route::get('/attendance/detail/{id}', [AttendanceController::class, 'show']);

    // 修正申請一覧
    Route::get(
        '/stamp_correction_request/list',
        [StampCorrectionRequestController::class, 'list']
    );

    // 修正申請送信
    Route::post(
        '/stamp_correction_request/{attendance}',
        [StampCorrectionRequestController::class, 'store']
    );
// });

/*
|--------------------------------------------------
| 管理者
|--------------------------------------------------
*/

// Route::prefix('admin')
//     ->middleware(['auth', 'role:admin'])
//     ->group(function () {

        // 勤怠一覧
        Route::get(
            '/attendance/list',
            [AdminAttendanceController::class, 'list']
        );

        // 勤怠詳細
        Route::get(
            '/attendance/{id}',
            [AdminAttendanceController::class, 'show']
        );

        // スタッフ一覧
        Route::get(
            '/staff/list',
            [StaffController::class, 'index']
        );

        // スタッフ別勤怠一覧（月次）
        Route::get(
            '/attendance/staff/{id}',
            [AdminAttendanceController::class, 'staffAttendance']
        );

        // 修正申請一覧
        Route::get(
            '/stamp_correction_request/list',
            [AdminStampCorrectionRequestController::class, 'list']
        );

        // 修正申請承認
        Route::post(
            '/stamp_correction_request/approve/{request}',
            [AdminStampCorrectionRequestController::class, 'approve']
        );
// });