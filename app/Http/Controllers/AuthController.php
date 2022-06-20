<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\taiKhoanNguoiDung;
use App\Models\Roles;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function signUp()
    {
        return view('User.pages.login_signUp.dang_ky');
    }

    public function create(Request $request)
    {
        $data = array();
        $data['tenNguoiDung'] = $request->tenNguoiDung;
        $data['ho'] = $request->ho;
        $data['ten'] = $request->ten;
        $data['email'] = $request->email;
        $data['sdt'] = $request->sdt;
        $data['matKhau'] = $request->matKhau;
        $data['diaChi'] = $request->diaChi;
        $data['ngaySinh'] = $request->ngaySinh;
        $xacNhanMatKhau = $request->password_confirm;
        if ($data['matKhau'] ==  $xacNhanMatKhau) {
            $customer_id = taiKhoanNguoiDung::insertGetId($data);
            Session::put('maNguoiDung', $customer_id);
            Session::put('tenNguoiDung', $request->tenNguoiDung);
            Session::put('ho', $request->ho);
            Session::put('ten', $request->ten);
            return Redirect('/');
        } else {
            return Redirect()->back()->with('error', 'Mật khẩu không khớp!');
        }
    }

    public function validation($request){
        return $this->validate($request,[
            'tenNguoiDung' => 'required|unique|max:255',
            'ho' => 'required|max:255',
            'ten' => 'required|max:255',
            'email' => 'email|max:255',
            'matKhau' => 'required|unique|max:255',
        ]);
    }

    public function login_user()
    {
        return view('User.pages.login_signUp.dang_nhap');
    }
    public function login_customer(Request $request)
    {
        $email = $request->email_account;
        $password = $request->password_account;
        if (Auth::attempt(['email' => $email,'matKhau' => md5($password)])){
            // echo (Auth::attempt(['email' => $request->email_account,'matKhau' => $request->password_account]));
            return redirect('/');
        }else{
            // echo (Auth::attempt(['email' => $request->email_account,'matKhau' => $request->password_account]));
            return redirect('/dang-nhap')->with('message', 'Tài khoản đăng nhập không tồn tại!');
        }

        // $result = taiKhoanNguoiDung::where('email', $email)->where('matKhau', $password)->first();
        // if(!$result){
        //     $result = taiKhoanNguoiDung::where('sdt', $email)->where('matKhau', $password)->first();
        // }
        // if(!$result){
        //     $result = taiKhoanNguoiDung::where('tenNguoiDung', $email)->where('matKhau', $password)->first();
        // }
        // if ($result) {
        //     Session::put('maNguoiDung', $result->maNguoiDung);
        //     Session::put('tenNguoiDung', $result->tenNguoiDung);
        //     Session::put('ho', $result->ho);
        //     Session::put('ten', $result->ten);
        //     return Redirect('/');
        // } else {
        //     return Redirect()->back()->with('error', 'Tài khoản đăng nhập không tồn tại');
        // }
    }
}
