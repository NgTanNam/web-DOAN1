@extends('User.layout_web')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css"
rel="stylesheet"> 
<link href="{{ asset('frontend/style/chat/style.css') }}" type="text/css" rel="stylesheet">
<div style="padding-top:95px"></div>
<div>
<div id="app" class="">
    <h3 class=" text-center">Messaging </h3>
    <div class="messaging">
        <div class="inbox_msg">
            <div class="inbox_people">
                <div class="inbox_chat">

                    @foreach ($person_received as $user)
                        <div onclick="onClickChatBoxUser({{ $user->ma_nguoi_nhan }},'{{ $user->avt }}','{{ $user->ho.' '.$user->ten }}')"
                            class="chat_list" id="chatBox_{{ $user->ma_nguoi_nhan }}">
                            <div class="chat_people">
                                <div class="chat_img" style="border-radius: 50%;overflow: hidden;"> <img
                                        src="{{ $user->avt }}" alt="sunil"> </div>
                                <div class="chat_ib">
                                    <h5>{{ $user->ho.' '.$user->ten }} <span class="chat_date">Dec 25</span></h5>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
            <div class="mesgs">
                <div class="msg_history">
                    <div class="line_message" v-for="message in messages">
                        <div v-if="message.ma_nguoi_gui!== id" class="incoming_msg">
                            <div style="border-radius: 50%;overflow: hidden;" class="incoming_msg_img"> <img
                                    :src="avtChatBox" alt="sunil">
                            </div>
                            <div class="received_msg">
                                <div class="received_withd_msg" style="margin-bottom: 20px">

                                    <p>@{{ message.noi_dung }}</p>
                                    <span class="time_date"> 11:01 AM | June 9
                                        <i class="fa fa-pencil text-success"></i>
                                        <i class="fa-solid fa-trash-can text-danger"></i></span>

                                </div>
                            </div>
                        </div>
                        <div v-else class="outgoing_msg">
                            <div class="sent_msg">
                                <p>@{{ message.noi_dung }}</p>
                                <span class="time_date"> <i class="fa fa-pencil text-success"></i>
                                    <i class="fa-solid fa-trash-can text-danger"></i> 11:01 AM | June 9</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="type_msg">
                    <div class="input_msg_write">
                        <input v-model="message" @keyup.enter="sendMessage" type="text" class="write_msg"
                            placeholder="Type a message" />
                        <button @click="sendMessage" class="msg_send_btn" type="button"><i
                                class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="public_vue"></div>
<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {

            $("#navbar_main").slideDown();
        } else {
            var el = document.getElementById("navbar_main");

            $("#navbar_main").slideUp();

     
        }
        prevScrollpos = currentScrollPos;
    }
    $("textarea").each(function() {
        this.setAttribute("style", "height:" + (this.scrollHeight) + "px;overflow-y:hidden;");
    }).on("input", function() {
        this.style.height = "auto";
        this.style.height = (this.scrollHeight) + "px";
    });


    function updateListMessages(data) {
        data.forEach(function(mess) {
            personal_vue.messages.push(mess);
        })
        setTimeout(function() {
         
                    $(".msg_history").animate({
                        scrollTop:   $(".msg_history")[0].scrollHeight
                    },500);
                
        }, 10)


        // personal_vue.messages.push()
    }

    function getMessagesByIdUser(user_id) {
        axios.post('{{ route('messages') }}', {
            user_id: user_id
        }).then(function(res) {
            console.log(res.data)
            updateListMessages(res.data);

        })

    }

    function onClickChatBoxUser(user_id, avtChatBox, nameChatBox) {
        personal_vue.messages = [];
        personal_vue.avtChatBox = avtChatBox;
        personal_vue.nameChatBox = nameChatBox;
        personal_vue.user_id = user_id;
        getMessagesByIdUser(user_id);

    }
</script>
<script>
    var personal_vue =
        new Vue({
            el: "#app",
            data() {
                return {
                    id: {{ auth()->user()->maNguoiDung }},
                    user_id: null,
                    message: "",
                    users: [],
                    messages: [],
                    avtChatBox: "",
                    nameChatBox: ""
                }
            },
            methods: {
                sendMessage() {
                    axios.post('{{route('postChat')}}', {
                        message: this.message,
                        user_id: this.user_id
                    })
                    this.message = ""
                },
                scrollToBottom() {
                    $(".msg_history").animate({
                        scrollTop:   $(".msg_history")[0].scrollHeight
                    },500);
                },
                pushMessage(event) {
                    this.messages.push(event.message);
                    setTimeout(() => {
                        this.scrollToBottom(), 50
                    })
                }
            },
            mounted() {
                var echo = new Echo({
                    broadcaster: "socket.io",
                    host: window.location.hostname + ':6001'
                })

                echo.join('chat.{{ auth()->id() }}')
                    .here((users) => {
                        this.users = users
                    })
                    .listen('ChatEvent', (event) => {
                        console.log(event.status);
                        console.log(this.user_id);

                        if (event.type == 'create') {
                            if (event.message.ma_nguoi_nhan == this.user_id || event.message
                                .ma_nguoi_gui == this.user_id) {
                                this.pushMessage(event);
                            }
                        }
                    });
            },
        })
</script>

@endsection