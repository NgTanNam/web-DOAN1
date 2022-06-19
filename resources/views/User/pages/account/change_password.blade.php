@extends('User.pages.account.profile')
@section('account')
<div class="row">
    <div class="col-md-12">
        <h4>Đổi Mật Khẩu</h4>
        <hr>
    </div>
</div>
<?php

use Illuminate\Support\Facades\Session;

$message = Session::get('message');
if ($message) {
    echo $message;
    Session::put('message', null);
}
?>
<div class="row">
    <div class="col-md-12">
        <form role="form" method="POST" action="{{URL::to('/update-password/'.$customer->maNguoiDung)}}">
            @csrf
            <div class="form-group row">
                <label for="username" class="col-4 col-form-label">Mật khẩu cũ<span class="request">*</span></label>
                <div class="col-8">
                    <input id="old_password" name="old_password" placeholder="Mật khẩu cũ" class="form-control here" required="required" type="password">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-4 col-form-label">Mật khẩu mới<span class="request">*</span></label>
                <div class="col-8">
                    <input id="new_password" name="new_password" placeholder="Mật khẩu mới" class="form-control here" required="required" type="password">
                </div>
            </div>
            <div class="form-group row">
                <label for="lastname" class="col-4 col-form-label">Nhập lại mật khẩu mới<span class="request">*</span></label>
                <div class="col-8">
                    <input id="confirm_password" name="confirm_password" placeholder="Nhập lại mật khẩu mới" required="required"  class="form-control here" type="password">
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