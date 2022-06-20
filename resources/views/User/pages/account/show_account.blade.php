@extends('User.pages.account.profile')
@section('account')

<div class="row">
    <div class="col-md-12">
        <h4>Thông Tin Tài Khoản</h4>
        <hr>
    </div>
</div>
<?php

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

$message = Session::get('message');
if ($message) {
    echo $message;
    Session::put('message', null);
}
?>
<div class="row">
    <div class="col-md-12">
        <form role="form" method="POST" action="{{URL::to('/update-account/'.$customer->maNguoiDung)}}">
            @csrf
            <div class="form-group row">
                <label for="username" class="col-4 col-form-label">Họ<span class="request">*</span></label>
                <div class="col-8">
                    <input id="ho" name="ho" placeholder="Họ" value="{{$customer->ho}}" class="form-control here" required="required" type="text">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-4 col-form-label">Tên<span class="request">*</span></label>
                <div class="col-8">
                    <input id="ten" name="ten" placeholder="Tên" value="{{$customer->ten}}" class="form-control here" required="required" type="text">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="ten" name="email" placeholder="Email" value="{{$customer->email}}" class="form-control here" type="text">
                </div>
            </div>
            <div class="form-group row">
                <label for="lastname" class="col-4 col-form-label">Số điện thoại</label>
                <div class="col-8">
                    <input id="sdt" name="sdt" value="{{$customer->sdt}}" placeholder="03768xxxx" class="form-control here" type="text">
                </div>
            </div>
            <div class="form-group row">
                <label for="lastname" class="col-4 col-form-label">Ngày Sinh</label>
                <div class="col-8">
                    <input type="date" id="start" name="ngaySinh" value="{{$customer->ngaySinh}}" class="form-control" min="1999-01-01" max="2022-12-31">
                </div>
            </div>
            <div class="form-group row">
                <label for="select" class="col-4 col-form-label">Quê Quán</label>
                <div class="col-8">
                    <select id="select" name="diaChi" class="form-control">
                        <option value="{{$customer->diaChi}}">{{$customer->diaChi}}</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection