<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\taiKhoanNguoiDung;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Models\Roles;
use App\Models\roles_tai_khoan_nguoi_dung;

class UserController extends Controller
{
    public function show($id)
    {
        $customer = taiKhoanNguoiDung::find($id);
        return view('User.pages.account.show_account', compact('customer'));
    }

    public function index()
    {
        $account = taiKhoanNguoiDung::with('roles')->orderBy('maNguoiDung', 'DESC')->paginate(5);
        // dd($account);
        return view('admin.taiKhoanNguoiDung.index')->with(compact('account'));
    }

    public function edit($id)
    {
        echo ('edit');
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
        if ($customer->matKhau == md5($data['old_password']) ) {
            if ($data['new_password'] == $data['confirm_password']) {
                $customer->matkhau = md5($data['new_password']);
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
        $password = md5($request->password_account);
        $result = Auth::attempt(['email' => $email,'matKhau' => $password]);
        // if(!$result){
        //     $result = Auth::attempt(['tenNguoiDung' => $email,'matKhau' => md5($password)]);
        // }
        // if(!$result){
        //     $result = Auth::attempt(['sdt' => $email,'matKhau' => md5($password)]);
        // }
        if ($result){
            return redirect('/');
        }else{
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
        //     Auth::attempt(['email' => $result->email,'matKhau' => md5($password)]);
        //     return Redirect('/');
            
        // } else {
        //     return Redirect()->back()->with('error', 'Tài khoản đăng nhập không tồn tại');
        // }
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
            $data['matKhau'] = md5($request->matKhau);
            $customer_id = taiKhoanNguoiDung::insertGetId($data);
            Session::put('maNguoiDung', $customer_id);
            Session::put('tenNguoiDung', $request->tenNguoiDung);
            Session::put('ho', $request->ho);
            Session::put('ten', $request->ten);

            $roles_user = new roles_tai_khoan_nguoi_dung();
            $roles_user->roles_id_roles = '3';
            $roles_user->tai_khoan_nguoi_dung_maNguoiDung = $customer_id;
            $roles_user->save();

            return Redirect('/');
        } else {
            return Redirect()->back()->with('error', 'Mật khẩu không khớp!');
        }
    }
    public function validation($request)
    {
        return $this->validate($request, [
            'tenNguoiDung' => 'required|unique|max:255',
            'ho' => 'required|max:255',
            'ten' => 'required|max:255',
            'email' => 'email|max:255',
            'matKhau' => 'required|unique|max:255',
        ]);
    }

    public function logout()
    {
        // Session::forget('maNguoiDung');
        Auth::logout();
        return Redirect('/');
    }

    public function assign_roles(Request $request)
    {
        if (Auth::id() == $request->admin_id) {
            return redirect()->back()->with('message', 'Bạn không được phân quyền chính mình');
        }
        $data = $request->all();
        $user = taiKhoanNguoiDung::where('email', $data['admin_email'])->first();
        $user->roles()->detach();
        if ($request['author_role']) {
            $user->roles()->attach(Roles::where('name', 'CTV')->first());
        }
        if ($request['user_role']) {
            $user->roles()->attach(Roles::where('name', 'User')->first());
        }
        if ($request['admin_role']) {
            $user->roles()->attach(Roles::where('name', 'Admin')->first());
        }
        return redirect()->back()->with('message', 'Phân quyền thành công');
    }
}
