<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DanhMucController;
use App\Http\Controllers\Admin\DanhMucConController;
use App\Http\Controllers\Admin\BaiVietController;
use App\Http\Controllers\Admin\SuKienController;
use App\Http\Controllers\Admin\HinhAnhController;
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

Route::group(['middleware' => 'auth.roles', 'auth.roles' => ['Admin','CTV']], function () {
    Route::resource('/ql', DanhMucController::class);
    Route::resource('/ql-danhmuc', DanhMucController::class);
    Route::resource('/ql-danhmuccon', DanhMucConController::class);
    Route::resource('/ql-baiviet', BaiVietController::class);
    Route::resource('/ql-sukien', SuKienController::class);
    Route::resource('/ql-hinhanh', HinhAnhController::class);
    Route::post('/select-delivery', [BaiVietController::class, 'select_delivery']);   
});
