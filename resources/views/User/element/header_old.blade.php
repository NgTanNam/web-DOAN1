<?php
use Illuminate\Support\Facades\Auth;
use App\Models\ThongBao;

$thongBaos = ThongBao::where('ma_nguoi_dung', auth()->user()->maNguoiDung)
    ->orderBy('updated_at', 'DESC')
    ->get();
?>
<link rel="stylesheet" href="frontend/style/header.css" type="text/css" />
<div id="thong_bao">
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
                        <a onclick="changeColor()"  class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">&nbsp; <i
                               
                                class="fa-brands fa-rocketchat"></i>
                        </a>
                        <ul id="thongbao_dropdown" class="dropdown-menu" style="width: 400px"
                            aria-labelledby="navbarScrollingDropdown">

                            @foreach ($thongBaos as $thongBao)
                                <li id="dong_thongbao_{{ $thongBao->id }}" class="dong_thong_bao">
                                    <a class="dropdown-item"
                                        href="{{ route('postChat') }}?chatbox={{ $thongBao->fk_id }}">
                                        <div class="box_content_thongbao">
                                            <div> <img id="avatar_personale" class="image_thongbao"
                                                    src="  {{ optional($thongBao->taiKhoanNguoiDung)->avt }}"
                                                    alt="">
                                            </div>
                                            <div class="content_thongbao">
                                                <div class="title_thongbao">
                                                    {{ optional($thongBao->taiKhoanNguoiDung)->ten }} đã nhắn tin cho
                                                    bạn
                                                </div>
                                                <div id="text_content_thongbao_{{ $thongBao->id }}"
                                                    class="text_content_thongbao">
                                                    {{ optional($thongBao)->noi_dung }}</div>
                                            </div>
                                            <div
                                                style=" display: flex;
                                        flex-wrap: nowrap;">
                                                <p id="time_thongbao_{{ $thongBao->id }}"
                                                    style=" margin-top: auto; 
                                            margin-bottom: auto; font-size: 14px ">
                                                    {{ date_format($thongBao->updated_at, 'H:i') }}</p>
                                            </div>
                                        </div>

                                    </a>

                                </li>
                            @endforeach





                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('postChat') }}">Xem trong họp Chat</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown nav-item-icon">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-square-envelope"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Action <i
                                        class="fa-solid fa-circle-dot"></i></a>
                            </li>
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

                        <li class="nav-item  nav-item-icon ">
                            <img class="icon_socical" src="frontend/image/header/facebook-app-symbol.png"
                                alt="">
                        </li>
                        <li class="nav-item  nav-item-icon ">
                            <img class="icon_socical" src="frontend/image/header/twitter.png" alt="">
                        </li>
                        <li class="nav-item  nav-item-icon ">
                            <img class="icon_socical" src="frontend/image/header/instagram.png" alt="">
                        </li>



                    </ul>
                </div>



                <div style="background-color: #C82B2B;height: 100%;padding: 3px;border-radius:10px 0px 0px 10px;">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 nl" style="--bs-scroll-height: 100px;">
                        <li class="nav-item personal_item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #fff">

                                <img id="avatar_personale" src="  {{ optional(auth()->user())->avt }}"
                                    alt=""
                                    style="  vertical-align: middle;
                                    width: 50px;
                                    height: 50px;
                                    border-radius: 50%;">

                                {{ optional(auth()->user())->ten }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                {{-- <li><a class="dropdown-item" href="#">Action</a></li> --}}
                                <li><a class="dropdown-item"
                                        href="{{ URL::to('/tai-khoan/' . Auth::user()->maNguoiDung) }}">Tài khoản cá
                                        nhân</a></li>
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


    let searchParams = new URLSearchParams(window.location.search)

    if (searchParams.has('chatbox')) {
        let param = searchParams.get('chatbox')
        console.log(param);
        setTimeout(() => {
            document.getElementById("chatBox_" + param).click();
        }, 50);

    }

    function changeColor(){
        $('.fa-brands.fa-rocketchat')[0].style.color = 'rgba(0,0,0,.55)';}
</script>
<script>
    var thongBao_vue =
        new Vue({
            el: "#thong_bao",
            data() {
                return {
                    id: {{ auth()->user()->maNguoiDung }},
                    users: [],
                }
            },
            methods: {
                hienThiThongBao(event) {
                    var dongThongBaos = $('#thongbao_dropdown')[0];

                    console.log(event);
                    var dongThongBao = $('#dong_thongbao_' + event.thongBao.id);
                    console.log(dongThongBao);
                    $(".fa-brands.fa-rocketchat")[0].style.color = '#C82B2B';
                    if (dongThongBao.length != 0) {
                        dongThongBao.hide(250, function() {
                            $("#text_content_thongbao_" + event.thongBao.id)
                            $("#text_content_thongbao_" + event.thongBao.id)[0].innerHTML = event
                                .thongBao.noi_dung;
                            let date = new Date(event.thongBao.updated_at);
                            $("#time_thongbao_" + event.thongBao.id)[0].innerHTML = date.getHours() + ':' +
                                date.getMinutes();


                            dongThongBao.remove();
                            dongThongBaos.insertBefore(dongThongBao[0], dongThongBaos.childNodes[0])
                            dongThongBao.show(250);
                        })

                    } else {
                        var dongThongBaos = $('#thongbao_dropdown')[0];
                        console.log(123);
                        dongThongBao = document.createElement('li');
                        dongThongBao.id = "dong_thongbao_" + event.thongBao.id;
                        dongThongBao.className = "dong_thong_bao";
                        dongThongBao.innerHTML =
                            '<a class="dropdown-item" href="#"> <div class="box_content_thongbao"> <div> <img id="avatar_personale" class="image_thongbao" src="' +
                            event.thongBao.image +
                            '" alt=""> </div> <div class="content_thongbao"> <div class="title_thongbao"> ' + event
                            .thongBao.tai_khoan_nguoi_dung.ten +
                            ' đã nhắn tin cho bạn </div> <div id="text_content_thongbao_' + event.thongBao.id +
                            '" class="text_content_thongbao"> noi dung</div> </div> <div style=" display: flex; flex-wrap: nowrap;"> <p id="time_thongbao_' +
                            event.thongBao.id +
                            '" style=" margin-top: auto; margin-bottom: auto; font-size: 14px "> thoi gian</p> </div> </div> </a>'
                        dongThongBao.style.display = "none";
                        dongThongBaos.insertBefore(dongThongBao, dongThongBaos.childNodes[0])
                        dongThongBao = $('#dong_thongbao_' + event.thongBao.id);

                        $("#text_content_thongbao_" + event.thongBao.id)[0].innerHTML = event
                            .thongBao.noi_dung;
                        let date = new Date(event.thongBao.updated_at);
                        $("#time_thongbao_" + event.thongBao.id)[0].innerHTML = date.getHours() + ':' +
                            date.getMinutes();
                        dongThongBao.show(250);


                    }
                }
            },
            mounted() {
                var echo = new Echo({
                    broadcaster: "socket.io",
                    host: window.location.hostname + ':6001'
                })

                echo.join('thongbao.{{ auth()->id() }}')
                    .here((users) => {
                        this.users = users
                    })
                    .listen('ThongBaoEvent', (event) => {

                        this.hienThiThongBao(event);

                    });
            },
        })
</script>
