<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\Web\BaiVietController;
use App\Models\BinhLuan;
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

Route::get('baiviet/{id}', [BaiVietController::class, 'getViewBaiVietController']);
Route::post('binhluan',[BaiVietController::class, 'postBinhLuan'])->name('postBinhLuan');;
Route::patch('binhluan',[BaiVietController::class, 'patchBinhluan']);
Route::delete('binhluan', [BaiVietController::class, 'deleteBinhluan']);

Route::get('chat',[ChatController::class,'getChat']);
Route::post('messages',[ChatController::class,'getMessages'])->name('messages');
Route::post('chat',[ChatController::class,'postChat'])->name('postChat');