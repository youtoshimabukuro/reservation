<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\MypageController;

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

Route::middleware('auth')->group(function () {
    Route::get('/', [ReservationController::class, 'index']);
    Route::post('/reservation/search', [ReservationController::class, 'search']);
    Route::post('/favorite', [ReservationController::class, 'favorite']);
    Route::get('/mypage', [ReservationController::class, 'myPage']);
    Route::post('/mypage/favorite', [MypageController::class, 'favorite']);
    Route::post('/detail/{shop_id}', [ReservationController::class, 'shopDetail']);
    Route::post('/reserve/confirm', [ReserveController::class, 'confirm']);
    Route::get('/reserve/confirm', [ReserveController::class, 'getConfirm']);
    Route::post('/reserve/reserve', [ReserveController::class, 'reserve']);
});

Route::get('/register', [AuthController::class, 'getRegister']);
Route::post('/register', [AuthController::class, 'postRegister']);

Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
;
Route::post('/login', [AuthController::class, 'postLogin']);
