<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Đăng Nhập</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="{{ asset('frontend/khanh/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/khanh/css/fontawsom-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/khanh/css/style.css') }}" rel="stylesheet">
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
            <form action="{{ URL::to('/login-customer') }}" method="POST">
                {{ csrf_field() }}
                <h1>Đăng Nhập</h1>
                @if (\Session::has('error'))
                    <div class="alert alert-danger">{{ \Session::get('error') }}</div>
                    {{ \Session::forget('error') }}
                @endif
                <div class="form-row">
                    <label for="">Tên đăng nhập<span class="request">*</span></label>
                    <input type="text" placeholder="trankhanh" name="email_account"
                        class="form-control form-control-sm">
                </div>
                <div class="form-row">
                    <label for="">Mật khẩu<span class="request">*</span></label>
                    <input type="password" placeholder="Mật khẩu" name="password_account"
                        class="form-control form-control-sm">
                </div>
                <div class="form-row row skjh">
                    <div class="col-5">
                        <span> <a href="">Quên mật khẩu?</a></span>
                    </div>
                </div>
                <div class="form-row dfr">
                    <button type="submit" class="btn btn-sm btn-success">Đăng Nhập</button>
                </div>
            </form>
            <div class="form-row dfr">
                <a href="{{ URL::to('/dang-ky') }}" class="btn btn-sm btn-info">Đăng Ký</a>
            </div>

            <div class="ord-v">
                <a href="or login with"></a>
            </div>

            <div class="soc-det">
                <ul>
                    <li style="background-color: #E34133"><a href="{{ route('loginRedirect') }}"><i class="fa-brands fa-google-plus-g"></i>
                        </a></li>

                    <li class="facebook"><a href=""><i class="fab fa-facebook-f"></i></a></li>
                    <li class="twitter"><i class="fab fa-twitter"></i></li>
                    <li class="pin"><i class="fab fa-pinterest-p"></i></li>
                    <li class="link"><i class="fab fa-linkedin-in"></i></li>
                </ul>
            </div>
        </div>
        <div class="copyco">
            <p>Copyrigh 2019 @ smarteyeapps.com</p>
        </div>
    </div>
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>

<!-- <label for="start">Start date:</label>

<input type="date" id="start" name="trip-start"
       value="2022-07-22"
       min="2022-01-01" max="2018-12-31"> -->

</html>
