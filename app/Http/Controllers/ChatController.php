<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\Models\TinNhan;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    //
    function getChat()
    {
        $user_id  = Auth::user()->maNguoiDung;

        $db = DB::table('tin_nhans')->where('ma_nguoi_gui',$user_id)
        ->select('ma_nguoi_nhan','ten','ho','avt')->groupBy( 'ma_nguoi_nhan','ten','ho','avt')
        ->join('taikhoannguoidung', 'taikhoannguoidung.maNguoiDung', '=', 'tin_nhans.ma_nguoi_nhan')
        ->get();

        return view('User.pages.chat', ['person_received' => $db]);
    }


    function getMessages(Request $request) {
        $personal_id  = Auth::user()->maNguoiDung;
        $user_id = $request->input('user_id');
        $db = DB::select(
            'select * FROM tin_nhans WHERE (ma_nguoi_gui = ? AND ma_nguoi_nhan = ?) OR (ma_nguoi_gui = ? AND ma_nguoi_nhan = ?) order by id  desc  LIMIT 10 ',
            [$personal_id,$user_id,$user_id,$personal_id]
        );
        $temp =  array();
        foreach($db as $mess){
            array_unshift($temp,$mess);
        }
        return $temp;
    }
    function postChat(Request $request){
        $personal_id  = Auth::user()->maNguoiDung;
        $user_id = $request->input('user_id');
        $mess = new TinNhan();
        $mess->noi_dung = $request->input('message');
        $mess->ma_nguoi_gui = $personal_id;
        $mess->ma_nguoi_nhan = $user_id;
        $mess->save();
    
        broadcast(new ChatEvent($mess,'create',$personal_id));
        broadcast(new ChatEvent($mess,'create',$user_id));
    }

}
