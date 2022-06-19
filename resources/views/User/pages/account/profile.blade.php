@extends('User.layout')
@section('content')
<link href="{{asset('frontend/khanh/css/bootstrap.min.css')}}" rel="stylesheet">
<script src="{{asset('frontend/khanh/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/khanh/js/bootstrap.min.js')}}"></script>

<main>
    <div class="">
        <div id="profile-upper">
            <div id="profile-banner-image">
                <img src="{{asset('frontend/khanh/template/images/header-bg.jpg')}}" alt="Banner image">
            </div>
            <div id="profile-d">
                <div id="profile-pic">
                    <img src="https://imagizer.imageshack.com/img921/3072/rqkhIb.jpg">
                </div>
                <div id="u-name">
                    <?php
                    echo $customer->ho . ' ' . $customer->ten
                    ?>
                </div>
            </div>
            <div id="black-grd"></div>
        </div>
        <div id="main-footer">
            <div class="tb">
            </div>
        </div>
    </div>

</main>
<section>
    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-3" style="margin-right:10px;  box-shadow: 0px 0px 30px #1d2d4f;;border-radius: 10px; ">
                <div class="left-sidebar">
                    <h2 class="text-center" style="margin-top: 13px;">Thông tin</h2>
                    <div class="list-group ">
                        <a href="{{URL::to('tai-khoan/'.$customer->maNguoiDung)}}" class="list-group-item list-group-item-action active">Thông Tin Tài Khoản</a>
                        <a href="{{URL::to('tai-khoan/cap-nhat-mat-khau/'.$customer->maNguoiDung)}}" class="list-group-item list-group-item-action">Đổi Mật Khẩu</a>
                        <a href="#" class="list-group-item list-group-item-action">Sở Thích</a>
                        <a href="{{URL::to('/dang-xuat')}}" class="list-group-item list-group-item-action">Đăng Xuất</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 padding-right" style="flex: 0 0 74%;max-width:74%; border-radius: 10px;box-shadow: 0px 0px 30px #1d2d4f;border-radius: 10px; ">
                <div class="card">
                    <div class="card-body">
                        @yield('account')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    :root {
        --green: #1ec6b6;
        --light-grey: #f7f7f7;
        --dark: #0e1010;
        --trans: all 0.3s ease-in-out;
    }

    html,
    body {
        font-family: 'Open Sans', sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Raleway', sans-serif;
    }

    a {
        color: var(--dark);
        text-decoration: none;
    }

    ul {
        list-style-type: none;
    }

    button,
    input[type="submit"] {
        font-size: 1.31rem;
        cursor: pointer;
        font-family: 'Raleway', sans-serif;
    }

    .container {
        max-width: 1320px;
        padding: 0 1rem;
        margin: 0 auto;
    }

    .flex {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .nav-link:hover{
        color: var(--green);
    }
    .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        /* background-color: transparent; */
        padding: 1rem 0;
        z-index: 999;
    }

    .navbar .container {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }

    .site-brand {
        color: #fff;
        font-size: 2.4rem;
        font-family: 'Raleway', sans-serif;
        font-weight: 600;
        opacity: 0.95;
    }
    .site-brand span {
        font-weight: 300;
    }
    
    .site-brand:hover{
        color: #fff;
        font-size: 2.4rem;
        font-family: 'Raleway', sans-serif;
        font-weight: 600;
        opacity: 0.95;
        text-decoration: none;
    }
    .site-brand:hover span{
        font-weight: 300;
    }
    #navbar-show-btn {
        background: transparent;
        color: #fff;
        font-size: 2rem;
        opacity: 0.9;
        -webkit-transition: var(--trans);
        -o-transition: var(--trans);
        transition: var(--trans);
        border: none;
    }

    #navbar-show-btn:hover {
        opacity: 1;
    }

    /* navbar side menu */
    #navbar-collapse {
        background-color: var(--green);
        position: fixed;
        top: 0;
        right: 0;
        width: 300px;
        height: 100%;
        padding: 2rem;
        -webkit-transform: translateX(100%);
        -ms-transform: translateX(100%);
        transform: translateX(100%);
        -webkit-transition: var(--trans);
        -o-transition: var(--trans);
        transition: var(--trans);
    }

    .navbar-collapse-rmw {
        /* js related */
        -webkit-transform: translateX(0) !important;
        -ms-transform: translateX(0) !important;
        transform: translateX(0) !important;
    }

    #navbar-close-btn {
        background: none;
        color: #fff;
        width: 35px;
        height: 35px;
        border-radius: 0.2rem;
        font-size: 2rem;
        -webkit-transition: var(--trans);
        -o-transition: var(--trans);
        transition: var(--trans);
        position: absolute;
        right: 1rem;
        top: 2rem;
        border: none;
    }

    #navbar-close-btn:hover {
        background-color: #fff;
        color: var(--green);
    }

    .navbar-nav {
        margin-top: 5rem;
    }

    .nav-item {
        margin: 1.6rem 0;
    }

    .nav-link {
        color: #fff;
        font-size: 1.2rem;
        -webkit-transition: var(--trans);
        -o-transition: var(--trans);
        transition: var(--trans);
        padding: 0;
        font: inherit;
    }

    .nav-link:hover {
        opacity: 0.8;
    }

    @media screen and (min-width: 992px) {
        .header-title h1 {
            font-size: 4rem;
        }

        .header-form form {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
        }

        .header-form .form-control,
        .header-form .btn {
            margin: 0 0.5rem;
        }

        /* navbar */
        #navbar-show-btn {
            display: none;
        }

        #navbar-collapse {
            display: block !important;
            background-color: transparent;
            -webkit-transform: translateX(0);
            -ms-transform: translateX(0);
            transform: translateX(0);
            height: auto;
            padding: 0;
            position: static;
            width: 75%;
        }

        #navbar-close-btn {
            display: none;
        }

        .navbar-nav {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            margin: 0;
        }

        .nav-item {
            margin: 0;
            margin-left: 2rem;
        }

        /* change on scroll */
        .navbar-cng .navbar-nav .nav-link {
            color: var(--dark);
        }

        .test-row,
        .about-row,
        .contact-row {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .popular-row,
        .blog-row {
            grid-template-columns: repeat(3, 1fr);
        }

        .about-row {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .about-left {
            margin: 0;
        }

        .facts-row {
            grid-template-columns: repeat(4, 1fr);
        }

        .contact-row {
            row-gap: 0;
        }

        .contact-form .form-control {
            margin-left: 0;
        }

        .contact-form .form-control:nth-child(1) {
            margin-top: 0;
        }

        .contact-right {
            margin: 0;
        }

        .contact-form .btn {
            margin-left: 0;
        }

        .contact-icon {
            width: 45px;
            height: 45px;
            font-size: 1.4rem;
            margin: 0 1rem;
        }

        .contact-item {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            text-align: left;
        }

        .contact-item:nth-child(1) {
            margin-top: 0;
        }
    }

    main {
        margin: 0 auto;
        background-color: #e9ebee;
        box-shadow: 0px 0px 30px #1d2d4f;
        border-radius: 0 0 10px 10px;
        overflow: hidden;
    }

    #profile-upper {
        position: relative;
    }

    #profile-d {
        position: absolute;
        left: 59px;
        bottom: 0px;
        right: 0px;
        height: 180px;
        z-index: 2;
    }

    #profile-banner-image {
        height: 360px;
        overflow: hidden;
        z-index: 1;
    }

    #profile-banner-image img {
        width: 100%;
        margin-top: -20%;
    }

    #profile-pic {
        width: 180px;
        height: 180px;
        border-radius: 90px;
        margin-top: 70px;
        overflow: hidden;
        box-shadow: 0 0 0 5px #fff;
    }

    #profile-pic img {
        width: 100%;
    }

    #u-name {
        position: absolute;
        top: 180px;
        left: 208px;
        color: black;
        font-size: 36px;
        font-weight: bold;
    }

    #main-footer {
        padding: 80px 0px 0px 55px;
    }

    .request {
        color: red;
    }

    /* 
    body {
        background: #F0F2F5;
    } */
</style>
@endsection