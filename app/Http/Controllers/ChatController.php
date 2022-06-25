<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\Events\ThongBaoEvent;
use App\Models\ThongBao;
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

        $db = DB::table('tin_nhans')->where('ma_nguoi_gui', $user_id)
            ->select('ma_nguoi_nhan', 'ten', 'ho', 'avt')->groupBy('ma_nguoi_nhan', 'ten', 'ho', 'avt')
            ->join('taikhoannguoidung', 'taikhoannguoidung.maNguoiDung', '=', 'tin_nhans.ma_nguoi_nhan')
            ->get();

        return view('User.pages.chat', ['person_received' => $db]);
    }


    function getMessages(Request $request)
    {
        $personal_id  = Auth::user()->maNguoiDung;
        $user_id = $request->input('user_id');
        $db = DB::select(
            'select * FROM tin_nhans WHERE (trang_thai = 1 and ma_nguoi_gui = ? AND ma_nguoi_nhan = ?) OR (trang_thai = 1 and ma_nguoi_gui = ? AND ma_nguoi_nhan = ?)    order by id  desc  LIMIT 10 ',
            [$personal_id, $user_id, $user_id, $personal_id]
        );
        $temp =  array();
        foreach ($db as $mess) {
            array_unshift($temp, $mess);
        }
        return $temp;
    }
    function postChat(Request $request)
    {
        $personal_id  = Auth::user()->maNguoiDung;
        $user_id = $request->input('user_id');
        $mess = new TinNhan();
        $mess->noi_dung = $request->input('message');
        $mess->ma_nguoi_gui = $personal_id;
        $mess->ma_nguoi_nhan = $user_id;
        $mess->save();


        $thongBaos = ThongBao::where('ma_nguoi_dung', $user_id)
            ->where('fk_id', $personal_id)
            ->where('loai_thong_bao', 1)->get();
        var_dump($thongBaos);
        if (count($thongBaos)  != 0) {
            $thongBao = $thongBaos[0];
            $thongBao->noi_dung = $request->input('message');
            $thongBao->save();
        } else {
            $thongBao = new ThongBao();

            $thongBao->noi_dung = $request->input('message');
            $thongBao->loai_thong_bao =1;
            $thongBao->fk_id =  $personal_id;
            $thongBao->ma_nguoi_dung = $user_id;
            $thongBao->image = "image";
            $thongBao->save();

            $thongBao->image = $thongBao->taiKhoanNguoiDung->avt;
            $thongBao->save();
            $thongBao->ten_nguoi_gui = $thongBao->taiKhoanNguoiDung->ten;
        }




        broadcast(new ThongBaoEvent($user_id, $thongBao));
        broadcast(new ChatEvent($mess, 'create', $personal_id));
        broadcast(new ChatEvent($mess, 'create', $user_id));
    }


    function deleteChat(Request $request)
    {
        $personal_id  = Auth::user()->maNguoiDung;
        $user_id = $request->input('user_id');
        $mess  = TinNhan::find($request->id_tin_nhan);
        $mess->trang_thai = 0;
        $mess->save();
        // return $mess;
        broadcast(new ChatEvent($mess, 'delete', $personal_id));
        broadcast(new ChatEvent($mess, 'delete', $user_id));
    }

    function patchChat(Request $request)
    {
        $personal_id  = Auth::user()->maNguoiDung;
        $user_id = $request->input('user_id');
        $mess = TinNhan::find($request->idMessUpdate);
        $mess->noi_dung = $request->message;
        $mess->save();

        broadcast(new ChatEvent($mess, 'update', $personal_id));
        broadcast(new ChatEvent($mess, 'update', $user_id));
    }
}
