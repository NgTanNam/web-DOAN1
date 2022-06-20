<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;



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
    return view('User.pages.trangchu');
});

// Route::get('/bo-suu-tap', function () {
//     return view('User.pages.boSuuTap');
// });


//UserController
// Route::get('/dang-nhap', [UserController::class, 'login_user']);
Route::get('/dang-xuat', [UserController::class, 'logout']);
// Route::get('/dang-ky', [UserController::class, 'signUp']);
// Route::post('/login-customer', [UserController::class, 'login_customer']);
// Route::post('/add-customer', [UserController::class, 'create']);
Route::get('/tai-khoan/{id}', [UserController::class, 'show']);
Route::get('/tai-khoan/cap-nhat-mat-khau/{id}', [UserController::class, 'show_password']);
Route::post('/update-account/{id}', [UserController::class, 'update_account']);
Route::post('/update-password/{id}', [UserController::class, 'update_password']);

//HomeController
Route::get('/bo-suu-tap', [HomeController::class, 'boSuuTap']);
Route::get('/blog', [HomeController::class, 'getAllblog']);
Route::get('/lien-he', [HomeController::class, 'contact']);

//Authentication roles
Route::get('/dang-ky', [AuthController::class, 'signUp']);
Route::post('/add-customer', [AuthController::class, 'create']);
Route::get('/dang-nhap', [AuthController::class, 'login_user']);
Route::post('/login-customer', [AuthController::class, 'login_customer']);


