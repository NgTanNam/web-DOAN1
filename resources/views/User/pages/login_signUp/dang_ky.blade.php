<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đăng Ký</title>
    <link href="{{asset('frontend/khanh/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/khanh/css/fontawsom-all.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/khanh/css/style.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid conya">
        <div class="side-left">
            <div class="sid-layy">
                <div class="row slid-roo">
                    <div class="data-portion">
                    </div>
                </div>
            </div>
        </div>
        <div class="side-right">
            <form action="{{URL::to('/add-customer')}}" method="POST">
                {{ csrf_field() }}
                <h1>Đăng Ký</h1>
                @if(\Session::has('error'))
                <div class="alert alert-danger">{{ \Session::get('error') }}</div>
                {{ \Session::forget('error') }}
                @endif
                <div class="form-row">
                    <div class="col" style="text-align: left; padding-left:0">
                        <label for="">Họ<span class="request">*</span></label>
                        <input type="text" name="ho" class="form-control" required placeholder="Họ">
                    </div>
                    <div class="col" style="text-align: left;">
                        <label for="">Tên<span class="request">*</span></label>
                        <input type="text" name="ten" class="form-control" required placeholder="Tên">
                    </div>
                </div>
                <div class="form-row">
                    <label for="">Tên Đăng Nhập<span class="request">*</span></label>
                    <input type="text" required placeholder="trankhanh" name="tenNguoiDung" class="form-control form-control-sm">
                </div>
                <div class="form-row">
                    <label for="">Email</label>
                    <input type="email" placeholder="yourname@gmail.com" name="email" class="form-control form-control-sm">
                </div>
                <div class="form-row">
                    <label for="">Số Điện Thoại</label>
                    <input type="text" placeholder="03768xxx" name="sdt" class="form-control form-control-sm">
                </div>
                <div class="form-row">
                    <div class="col" style="text-align: left; padding-left:0">
                        <label for="">Mật khẩu<span class="request">*</span></label>
                        <input type="password" required placeholder="Mật khẩu" name="matKhau" class="form-control form-control-sm">

                    </div>
                    <div class="col" style="text-align: left;">
                        <label for="">Xác Nhận Mật khẩu<span class="request">*</span></label>
                        <input type="password" required placeholder="Mật khẩu" name="password_confirm" class="form-control form-control-sm">
                    </div>
                </div>
                <!-- <div class="form-row">
                    <label for="">Mật khẩu</label>
                    <input type="password" required placeholder="Mật khẩu" name="matKhau" class="form-control form-control-sm">
                </div>
                <div class="form-row">
                    <label for="">Xác Nhận Mật khẩu</label>
                    <input type="password" required placeholder="Mật khẩu" name="password_confirm" class="form-control form-control-sm">
                </div> -->
                <div class="form-row">
                    <div class="col" style="text-align: left; padding-left:0">
                        <label for="">Ngày Sinh<span class="request">*</span></label>
                        <input type="date" id="start" name="ngaySinh" value="2022-07-22" class="form-control" min="2022-01-01" max="2022-12-31">
                    </div>
                    <div class="col" style="text-align: left;">
                        <label for="">Quê Quán<span class="request">*</span></label>
                        <select id="inputState" name="diaChi" class="form-control">
                            <option selected>Đà Nẵng</option>
                            <option>...</option>
                        </select>
                    </div>
                </div>
                <div class="form-row dfr">
                    <button type="submit" class="btn btn-sm btn-success">Đăng Ký</button>
                </div>
            </form>
            <div class="form-row dfr">
                <a href="{{URL::to('/dang-nhap')}}" class="btn btn-sm btn-info">Đăng Nhập</a>
            </div>
            <div class="ord-v">
                <a href="or login with"></a>
            </div>
        </div>
        <div class="copyco">
            <!-- <p>Copyrigh 2019 @ smarteyeapps.com</p> -->
        </div>
    </div>
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>


</html>