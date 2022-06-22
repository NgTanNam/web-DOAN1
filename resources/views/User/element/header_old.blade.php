<?php
use Illuminate\Support\Facades\Auth;

?>

<div>
    <nav id="navbar_main" class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('') }}">
                <img src="frontend/image/header/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 nl" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Trang Chủ</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Danh Mục
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bài viết</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                    <li class="nav-item">
                        <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                    </li>
                    <li class="nav-item dropdown nav-item-icon">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"> <i class="fa-brands fa-rocketchat"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                        <li class="nav-item dropdown nav-item-icon">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-square-envelope"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="#">Action <i class="fa-solid fa-circle-dot"></i></a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                </ul>


                <div>
                    <ul class="navbar-nav me-auto my-2 my-lg-0 nl" style="--bs-scroll-height: 100px;">
                       
                        <li class="nav-item  nav-item-icon">
                           
                        </li>
                        <li class="nav-item  nav-item-icon">
                            <img src="frontend/image/header/facebook-app-symbol.png" alt="">
                        </li>
                        <li class="nav-item  nav-item-icon">
                            <img src="frontend/image/header/twitter.png" alt="">
                        </li>
                        <li class="nav-item  nav-item-icon">
                            <img src="frontend/image/header/instagram.png" alt="">
                        </li>


                       
                    </ul>
                </div>



                <div style="background-color: #C82B2B;height: 100%;padding: 3px;border-radius:10px 0px 0px 10px;">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 nl" style="--bs-scroll-height: 100px;">
                        <li class="nav-item personal_item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" style="color: #fff">

                                <img id="avatar_personale" src="  {{ optional(auth()->user())->avt }}" alt=""
                                    style="  vertical-align: middle;
                                    width: 50px;
                                    height: 50px;
                                    border-radius: 50%;">

                                {{ optional(auth()->user())->ten}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                {{-- <li><a class="dropdown-item" href="#">Action</a></li> --}}
                                <li><a class="dropdown-item" href="{{URL::to('/tai-khoan/'.Auth::user()->maNguoiDung)}}">Tài khoản cá nhân</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>
</div>

<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            // var el = document.getElementById("navbar_main");
            // el.style.animationName = "example2"
            // document.getElementById("navbar_main").style.top = "0";
            // $("#navbar_main").animate({top: '0px'});
            $("#navbar_main").slideDown();
        } else {
            var el = document.getElementById("navbar_main");

            $("#navbar_main").slideUp();
            // el.style.top = "-72px";

            el
        }
        prevScrollpos = currentScrollPos;
    }
  
</script>