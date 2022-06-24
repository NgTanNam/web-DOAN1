@extends('User.layout_web')
@section('content')
<link rel="stylesheet" href="frontend/css/style.css">
<link rel="stylesheet" href="frontend/style/home/style.css">
<base href="{{ asset('public') }}">

    <div style="padding-top:95px"></div>
    <div>
        <div class="container" id="bai_viet" style="top:80px;padding-top:10px">
            <!-- Tác Giả và thông tin toihwiof giand ăng -->
            <div id="author_inf">

                <div id="avt_author">
                    <a class="nav-link " href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle=""
                        aria-expanded="false" style="color: #000000;font-size: 19px;">

                        <img id="avatar_personale"
                            src="https://cdnb.artstation.com/p/assets/images/images/019/697/901/large/wl-op-36s2.jpg?1564628205"
                            alt=""
                            style="  vertical-align: middle;
                width: 50px;
                height: 50px;
                border-radius: 50%;">
                    </a>
                </div>
                <div id="name_and_time">
                    <div id="name_author">{{ optional(auth()->user())->ho }} {{ optional(auth()->user())->ten }}</div>
                    <p id="time_postion" style="display: inline">Ngày {{ $baiViet->created_at }}</p><br>

                </div>

            </div>

            <h2 style="text-align: center;font-weight: bold">{{$baiViet->tenBV}}</h3>
            <section class="ftco-section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="featured-carousel owl-carousel">

                                @foreach ($baiViet->images as $item)
                                    <div class="item">
                                        <div class="work">
                                            <div class="img d-flex align-items-center justify-content-center rounded"
                                                style="background-image: url(http://localhost/web-DOAN1/public/uploads/images/{{ $item->hinhAnh }});">
                                                <a href="#"
                                                    class="icon d-flex align-items-center justify-content-center">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </a>
                                            </div>
                                            <div class="text pt-3 w-100 text-center">
                                                {{-- <h3><a href="#">Work 01</a></h3>
                                                <span>Web Design</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach



                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div style="margin: 20px" id="chi_tiet_bai_viet">


                {!! html_entity_decode($baiViet->chiTietBaiViet) !!}





            </div>
            <div style="margin: 20px"><img src="frontend/image/BaiViet/not-favorite-yet.png" width="30px" alt="">
                1280
                <img src="frontend/image/BaiViet/bookmark.png" width="30px" alt="">
            </div>
            <hr>



            <div id="app">
                <label style="display: none;" id="trang-thai-cmt" for="">Đang sửa bình luận ...<button type="button"
                        @click="changeTypeToCreate" class="btn btn-light"><img src="frontend/image/BaiViet/close.png"
                            width="15px" alt=""></button>
                </label>
                <div id="comment_uer">
                    <div id="avt_author_cmt" class="row md-8">
                        <a class="nav-link " href="#" id="a_avatar" role="button" data-bs-toggle=""
                            aria-expanded="false" style="color: #000000;font-size: 19px;">

                            <img id="avatar_personale" src="    {{ optional(auth()->user())->avt }}" alt=""
                                style="  vertical-align: middle;
        width: 45px;
        height: 45px;
        border-radius: 50%;">
                        </a>
                    </div>
                    <div id="input_cmt">
                        <textarea v-model="message" @keyup.enter="sendMessage" aria-label="With textarea" style="" rows="1"></textarea>
                    </div>
                    <button type="button" class="btn btn-light"><img src="frontend/image/BaiViet/attachment.png"
                            width="25px" alt=""></button>

                    <button @click="sendMessage" type="button" class="btn btn-light"><img
                            src="frontend/image/BaiViet/send-message.png" width="25px" alt=""></button>
                </div>

                <div>
                    <link rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    <div id='list_comment' class="comment-widgets m-b-20">
                        @foreach (App\Models\BinhLuan::orderBy('id', 'DESC')->get() as $item)
                            <div id="comment_id_{{ $item->id }}" class="d-flex flex-row comment-row ">
                                <div class="p-2"><span class="round"><img src="{{ $item->nguoiDung->avt }}"
                                            alt="user" width="50"></span></div>
                                <div class="comment-text active w-100">
                                    <h5>{{ $item->nguoiDung->ho . ' ' . $item->nguoiDung->ten }}</h5>
                                    <div class="comment-footer">
                                        <span class="date">{{ date_format($item->created_at, 'H:i d-m-Y') }}</span>
                                        <span class="action-icons active">
                                            @if (auth()->user()->maNguoiDung == $item->ma_nguoi_dung)
                                                <p
                                                    @click="changeTypeToUpdate({{ $item->id }},'{{ $item->noi_dung }}')">
                                                    <i class="fa fa-pencil"></i>
                                                </p>
                                                <p @click="deleteMessage({{ $item->id }})" href="#"
                                                    data-abc="true"><i class="fa-solid fa-trash-can text-danger"></i></p>
                                            @endif

                                            <p href="#" data-abc="true"><i class="fa fa-heart text-danger"></i></p>
                                            <a href="#" data-abc="true"
                                                style="display: flex; float: right; text-decoration-line: none;"><i
                                                    class="fa fa-heart"
                                                    style="text-decoration-line: none; margin-top: 4px;margin-right: 5px"></i>0</a>
                                        </span>
                                    </div>
                                    
                                    <p id='comment_content_{{ $item->id }}'  class="m-b-5 m-t-10">
                                        {!! $item->noi_dung !!}</p>
                                </div>
                            </div>
                        @endforeach
                        <div class="d-flex flex-row comment-row">
                            <div class="p-2"><span class="round"><img
                                        src="https://cdnb.artstation.com/p/assets/images/images/019/697/901/large/wl-op-36s2.jpg?1564628205"
                                        alt="user" width="50"></span></div>
                            <div class="comment-text w-100">
                                <h5>Samso Nagaro</h5>
                                <div class="comment-footer">
                                    <span class="date">April 14, 2019</span>
                                    <span class="label label-info">Pending</span> <span class="action-icons">

                                        <a style="display:flex;float:right;text-decoration-line: none;" href="#"
                                            data-abc="true"><i style="text-decoration-line: none;margin-top: 4px;"
                                                class="fa fa-heart"></i>0</a>
                                    </span>
                                </div>
                                <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s,
                                    when an unknown printer took a galley of type and scrambled it</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row comment-row ">
                            <div class="p-2"><span class="round"><img src="https://i.imgur.com/tT8rjKC.jpg"
                                        alt="user" width="50"></span></div>
                            <div class="comment-text active w-100">
                                <h5>Jonty Andrews</h5>
                                <div class="comment-footer">
                                    <span class="date">March 13, 2020</span>
                                    <span class="label label-success">Approved</span> <span class="action-icons active">
                                        <a href="#" data-abc="true"><i class="fa fa-pencil"></i></a>
                                        <a href="#" data-abc="true"><i
                                                class="fa fa-rotate-right text-success"></i></a>
                                        <a href="#" data-abc="true"><i class="fa fa-heart text-danger"></i></a>
                                    </span>
                                </div>
                                <p class="m-b-5 m-t-10">Contrary to popular belief, Lorem Ipsum is not simply random
                                    text.
                                    It has roots in a piece of classical Latin literature from 45 BC, making it over
                                    2000
                                    years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                                    Virginia,
                                    looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum
                                    passage,
                                    and going through the cites</p>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

        </div>
    </div>


    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>


   
    <script>
        // var modal = document.getElementById("myModal");

        // // Get the image and insert it inside the modal - use its "alt" text as a caption
        // var img = document.getElementById("myImg");
        // var modalImg = document.getElementById("img01");

        // img.onclick = function() {
        //     console.log(this.style.backgroundImage.toString());
        //     modal.style.display = "block";
        //     modalImg.src = this.style.backgroundImage.toString().slice(5, -2);

        // }

        // // Get the <span> element that closes the modal
        // var span = document.getElementsByClassName("close")[0];

        // // When the user clicks on <span> (x), close the modal
        // span.onclick = function() {
        //     modal.style.display = "none";
        // }

        function deleteMessage(id) {
            vue.deleteMessage(id);
        }

        function changeTypeToUpdate(comment_id, mess) {
            vue.changeTypeToUpdate(comment_id, mess);
        }



        var vue = new Vue({
            el: "#app",
            data() {
                return {
                    id: {{ auth()->id() ?? 1 }},
                    message: "",
                    users: [],
                    messages: [],
                    typeOfMessage: "create",
                    comment_id_update: null,
                    echo: null
                }
            },
            methods: {
                sendMessage() {
                    if (this.typeOfMessage == 'create') {
                        this.sendMessageCreate(null);
                    } else {
                        this.sendMessageCreate('PATCH');
                    }
                    this.changeTypeToCreate();



                },
                sendMessageCreate(method) {
                    var data = {
                        // _method: method,
                        idBaiViet: {{ $idBaiViet }},
                        message: this.message,
                        comment_id: this.comment_id_update
                    }

                    if (method != null) {
                        data._method = method;
                    }
                    axios.post("{{ route('postBinhLuan') }}", data)
                },
                deleteMessage(id) {
                    this.comment_id_update = id;
                    console.log(id);
                    this.sendMessageCreate('DELETE')
                },
                removeComment(id) {
                    $('#comment_id_' + id).hide(500);
                    setTimeout(() => {
                        document.getElementById('comment_id_' + id).remove();

                    }, 500);


                },
                changeTypeToCreate() {
                    this.typeOfMessage = 'create';
                    this.comment_id_update = null;
                    document.getElementById('trang-thai-cmt').style.display = 'none';
                    this.message = ""
                },
                changeTypeToUpdate(comment_id, mess) {
                    this.message = mess
                    this.typeOfMessage = "update"
                    document.getElementById('trang-thai-cmt').style.display = 'inline';

                    this.comment_id_update = comment_id;
                    document.querySelector('#trang-thai-cmt').scrollIntoView({
                        behavior: 'smooth',
                        block: "center"
                    });


                },

                appendComment(user, message, comment_id) {
                    var div = document.createElement('div')
                    var date = new Date(message.created_at);
                    var dateString = (date.getHours()) + ':' + date.getMinutes() + ' ' + date.getDate() + '/' + (
                        date.getMonth() + 1) + '/' + (1900 + date.getYear());


                    var head = '<div id="comment_id_' + message.id +
                        '" class="d-flex flex-row comment-row "> <div class="p-2"><span class="round"><img src="' +
                        user.avt +
                        '" alt="user" width="50"></span></div> <div class="comment-text active w-100"> <h5>' + user
                        .ho + ' ' + user.ten + '</h5> <div class="comment-footer"> <span class="date"> ' +
                        dateString + ' </span> <span class="action-icons active">';
                    var check = '<p onclick="changeTypeToUpdate( ' + message.id + ',\'' + message.noi_dung +
                        '\')"> <i class="fa fa-pencil"></i></p> <p onclick="deleteMessage(' + message.id +
                        ')" href="#" data-abc="true"><i class="fa-solid fa-trash-can text-danger"></i></p>';
                    var boot =
                        '<p href="#" data-abc="true"><i class="fa fa-heart text-danger"></i></p> <a href="#" data-abc="true" style="display: flex; float: right; text-decoration-line: none;"><i class="fa fa-heart" style="text-decoration-line: none; margin-top: 4px;margin-right: 5px"></i>0</a> </span> </div> <p id="comment_content_' +
                        message.id + '" class="m-b-5 m-t-10">' + message.noi_dung + '</p> </div> </div>'

                    div.innerHTML = head + ((message.ma_nguoi_dung == {{ auth()->id() }}) ? check : '') + boot;




                    let listComment = document.getElementById('list_comment');
                    listComment.insertBefore(div, listComment.childNodes[0]);
                },
                updateComment(message) {
                    document.getElementById('comment_content_' + message.id).innerHTML = message.noi_dung;
                    if ({{ auth()->user()->maNguoiDung }} == message.ma_nguoi_dung) {
                        document.querySelector('#comment_content_' + message.id).scrollIntoView({
                            behavior: 'smooth',
                            block: "center"
                        });
                    }
                    $('#comment_id_' + message.id).animate({
                        opacity: '0'
                    }, 700, function() {
                        $('#comment_id_' + message.id).animate({
                            opacity: '1'
                        });

                    })
                }

            },
            mounted() {
                var echo = new Echo({
                    broadcaster: "socket.io",
                    host: window.location.hostname + ':6001'
                })
                echo.join('baiviet.{{ $idBaiViet }}')
                    .here((users) => {
                        this.users = users
                    })
                    .listen('MessageSent', (event) => {
                        console.log(event);
                        if (event.type == 'create') {
                            this.appendComment(event.user, event.message);
                        } else if (event.type == 'update') {
                            this.updateComment(event.message);
                        } else {
                            this.removeComment(event.comment_id);
                        }
                        // this.messages.push(event);
                    });
            },

        })
    </script>
@endsection
