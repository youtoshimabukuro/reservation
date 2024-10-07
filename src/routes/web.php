<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RepresentativeController;
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
    Route::get('/admin/register', [AdminController::class, 'getRegister']);
    Route::post('/admin/register', [AdminController::class, 'create']);
    Route::get('/representative/reservationConfirm', [RepresentativeController::class, 'reservationConfirm']);
    Route::get('/representative/addStore', [RepresentativeController::class, 'addStore']);
    Route::post('/representative/create', [RepresentativeController::class, 'create']);
    Route::post('/representative/update', [RepresentativeController::class, 'update']);
    Route::post('/search', [ReservationController::class, 'search']);
    Route::post('/favorite', [ReservationController::class, 'favorite']);
    Route::get('/mypage', [ReservationController::class, 'myPage']);
    Route::post('/mypage/favorite', [MypageController::class, 'favorite']);
    Route::post('/mypage/close', [MypageController::class, 'close']);
    Route::post('/mypage/update', [MypageController::class, 'update']);
    Route::get('/detail/{shop_id}', [ReservationController::class, 'detail']);
    Route::post('/reserve/reserve', [ReserveController::class, 'reserve']);
});

Route::get('/register', [AuthController::class, 'getRegister']);
Route::post('/register', [AuthController::class, 'postRegister']);

Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
;
Route::post('/login', [AuthController::class, 'postLogin']);
