<?php

use App\Http\Controllers\Web\BaiVietController;
use Facade\FlareClient\View;
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
Route::get('baiviet/{id}',[BaiVietController::class,'getBaiViet']);
Route::post('binhluan', function (Request $request) {

    $binhLuan = new BinhLuan();
    $binhLuan->noidung =  $request->message;
    $binhLuan->user_id = auth()->user()->id;
    $binhLuan->baiviet_id = $request->input('idBaiViet');
    $binhLuan->save();

    broadcast(new MessageSent(auth()->user() ?? User::find(1), $binhLuan, $request->input('idBaiViet'), 'create', $binhLuan->id));
    return $request->input('message');
});
