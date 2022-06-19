<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\taiKhoanNguoiDung;
use App\Models\Roles;
use Illuminate\Support\Facades\Session;


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

}
