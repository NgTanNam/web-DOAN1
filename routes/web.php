<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\Web\BaiVietController;
use App\Models\BinhLuan;
use App\Models\roles_tai_khoan_nguoi_dung;
use App\Models\taiKhoanNguoiDung;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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
Route::group(['middleware' => 'auth'], function () {

    Route::get('baiviet/{id}', [BaiVietController::class, 'getViewBaiVietController'])->name('bai_viet');
    Route::prefix('binhluan')->group(function () {
        Route::post('', [BaiVietController::class, 'postBinhLuan'])->name('postBinhLuan');
        Route::patch('', [BaiVietController::class, 'patchBinhluan']);
        Route::delete('', [BaiVietController::class, 'deleteBinhluan']);
    });


    Route::get('chat', [ChatController::class, 'getChat']);
    Route::post('messages', [ChatController::class, 'getMessages'])->name('messages');
    Route::post('chat', [ChatController::class, 'postChat'])->name('postChat');
    Route::delete('chat', [ChatController::class, 'deleteChat'])->name('deleteChat');
    Route::patch('chat', [ChatController::class, 'patchChat']);
});
Route::get('redirect', function () {
    return Socialite::driver('google')->redirect();
})->name("loginRedirect");

Route::get('callback', function () {
    $user = Socialite::driver('google')->user();
    // dd($user);
    // return $user->user['family_name'];

    $userDB = taiKhoanNguoiDung::where('email', $user->email)->first();

    if ($userDB) {
        Auth::login($userDB);
        return redirect('/');
    } else {
        $newUser = taiKhoanNguoiDung::create([
            'tenNguoiDung' => $user->name,
            'ho' =>$user->user['family_name'],
            'ten' =>$user->user['given_name'],
            'email' => $user->email,
            'sdt' => null,
            'matKhau' => bcrypt('123456'),
            'ngaySinh' => '2001-1-1',
            'avt' =>$user->user['picture'],
            'diaChi'=> "Việt Nam",


        ]);

        // return $newUser;

        $newUser_role = roles_tai_khoan_nguoi_dung::create([
            'roles_id_roles'=> 3,
            'tai_khoan_nguoi_dung_maNguoiDung'=>  $newUser->maNguoiDung
        ]);
        Auth::login($newUser);
        return redirect('/');
    }


    // $user->token
});

Route::get('get',function(){
    return getHostByName(getHostName());
});
