<?php

use Illuminate\Support\Facades\Session;
?>
<div class="container flex">
    <a href="{{URL::to('/')}}" class="site-brand">
        Du Lịch<span> Đà Thành</span>
    </a>
    <button type="button" id="navbar-show-btn" class="flex">
        <i class="fas fa-bars"></i>
    </button>
    <div id="navbar-collapse">
        <button type="button" id="navbar-close-btn" class="flex">
            <i class="fas fa-times"></i>
        </button>
        <div class="w3-bar navbar-nav ">
            <a href="{{URL::to('/')}}"class="nav-link"><button class="w3-button">Trang Chủ</button></a>
            <a href="{{URL::to('/bo-suu-tap')}}"class="nav-link"><button class="w3-button">Bộ Sưu Tập</button></a>
            <a href="{{URL::to('/blog')}}" class="nav-link">
                <div class="w3-dropdown-hover">
                    <button class="w3-button">Blog</button>
                    <div class="w3-dropdown-content w3-bar-block">
                        <a href="{{URL::to('/')}}" class="w3-bar-item w3-button w3-mobile">Danh Mục 1</a>
                        <a href="{{URL::to('/')}}" class="w3-bar-item w3-button w3-mobile">Danh Mục 2</a>
                    </div>
                </div>
            </a>
            <a href="{{URL::to('/lien-he')}}"class="nav-link"><button class="w3-button">Liên Hệ</button></a>
            @if (Session::get('maNguoiDung'))
            <a href="{{URL::to('/tai-khoan/'.Session::get('maNguoiDung'))}}" class="nav-link">
                <div class="w3-dropdown-hover">
                    <button class="w3-button"><?php echo (Session::get('ho') . ' ' . Session::get('ten')) ?></button>
                    <div class="w3-dropdown-content w3-bar-block">
                        <a href="{{URL::to('/tai-khoan/'.Session::get('maNguoiDung'))}}" class="w3-bar-item w3-button w3-mobile">Tài khoản cá nhân</a>
                        <a href="{{URL::to('/dang-xuat')}}" class="w3-bar-item w3-button w3-mobile">Đăng xuất</a>
                    </div>
                </div>
            </a>
            @else
            <a href="{{URL::to('/dang-nhap')}}" class="w3-bar-item w3-button w3-mobile">Đăng Nhập</a>
            @endif
        </div>
    </div>
    <!-- <ul class="navbar-nav">
        <li class="nav-item">
            <a href="{{URL::to('/')}}" class="nav-link">Trang Chủ</a>
        </li>
        <li class="nav-item">
            <a href="gallery.html" class="nav-link">Danh Mục</a>
        </li>
        <li class="nav-item">
            <a href="blog.html" class="nav-link">Liên Hệ</a>
        </li>
        <li class="nav-item">
            @if (Session::get('maNguoiDung'))
            <a href="{{URL::to('/tai-khoan/'.Session::get('maNguoiDung'))}}" class="nav-link ">
                <div class="w3-dropdown-hover">
                    <button class="w3-button"><?php echo (Session::get('ho') . ' ' . Session::get('ten')) ?></i></button>
                    <div class="w3-dropdown-content w3-bar-block">
                        <a href="#" class="w3-bar-item w3-button w3-mobile">Link 1</a>
                        <a href="#" class="w3-bar-item w3-button w3-mobile">Link 2</a>
                        <a href="#" class="w3-bar-item w3-button w3-mobile">Link 3</a>
                    </div>
                </div>
            </a>
            @else
            <a href="{{URL::to('/dang-nhap')}}" class="nav-link">
                Đăng Nhập
            </a>
            @endif
        </li>
    </ul> -->
</div>
</div>
