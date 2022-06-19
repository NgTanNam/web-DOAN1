<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\taiKhoanNguoiDung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function show($id)
    {
        $customer = taiKhoanNguoiDung::find($id);
        return view('User.pages.account.show_account', compact('customer'));
    }

    public function update_account($id, Request $request)
    {
        $data = $request->all();
        $data['ho'] = $request->ho;
        $data['ten'] = $request->ten;
        $data['email'] = $request->email;
        $data['sdt'] = $request->sdt;
        $data['diaChi'] = $request->diaChi;
        $data['ngaySinh'] = $request->ngaySinh;
        $customer = taiKhoanNguoiDung::find($id);
        $customer->ho = $data['ho'];
        $customer->ten = $data['ten'];
        $customer->email = $data['email'];
        $customer->sdt = $data['sdt'];
        $customer->diaChi = $data['diaChi'];
        $customer->ngaySinh = $data['ngaySinh'];
        $customer->save();
        Session::put('message', 'Cập nhập thành công');
        return Redirect()->back();
    }
    public function show_password($id)
    {
        $customer = taiKhoanNguoiDung::find($id);
        return view('User.pages.account.change_password', compact('customer'));
    }
    public function update_password($id, Request $request)
    {
        $data = $request->all();
        $data['old_password'] = $request->old_password;
        $data['new_password'] = $request->new_password;
        $data['confirm_password'] = $request->confirm_password;
        $customer = taiKhoanNguoiDung::find($id);
        if ($customer->matKhau == $data['old_password']) {
            if ($data['new_password'] == $data['confirm_password']) {
                $customer->matkhau = $data['new_password'];
                $customer->save();
                Session::put('message', 'Đổi mật khẩu thành công');
                return Redirect()->back();
            } else {
                Session::put('message', 'Mật khẩu mới không khớp!');
                return Redirect()->back();
            }
        } else {
            Session::put('message', 'Mật khẩu cũ không khớp!');
            return Redirect()->back();
        }
    }
    public function login_user(Request $request)
    {
        return view('User.pages.login_signUp.dang_nhap');
    }

    public function login_customer(Request $request)
    {
        $email = $request->email_account;
        $password = $request->password_account;
        $result = taiKhoanNguoiDung::where('email', $email)->where('matKhau', $password)->first();
        if(!$result){
            $result = taiKhoanNguoiDung::where('sdt', $email)->where('matKhau', $password)->first();
        }
        if(!$result){
            $result = taiKhoanNguoiDung::where('tenNguoiDung', $email)->where('matKhau', $password)->first();
        }
        if ($result) {
            Session::put('maNguoiDung', $result->maNguoiDung);
            Session::put('tenNguoiDung', $result->tenNguoiDung);
            Session::put('ho', $result->ho);
            Session::put('ten', $result->ten);
            return Redirect('/');
        } else {
            return Redirect()->back()->with('error', 'Tài khoản đăng nhập không tồn tại');
        }
    }

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
    public function logout()
    {
        Session::forget('maNguoiDung');
        return Redirect('/');
    }
}
