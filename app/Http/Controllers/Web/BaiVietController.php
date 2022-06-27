<?php

namespace App\Http\Controllers\Web;

use App\Events\MessageSent;
use App\Events\ThongBaoEvent;
use App\Http\Controllers\Controller;
use App\Models\BaiViet;
use App\Models\BinhLuan;
use App\Models\ThongBao;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BaiVietController extends Controller
{
    //

    function getViewBaiVietController($id){
        // return Auth::user()->nguoiDung;
        $baiViet = BaiViet::find($id);
        return view('User.pages.BaiViet.bai_viet', ['baiViet' => $baiViet, 'idBaiViet' => $id]);
    }


    function postBinhLuan (Request $request) {
        $binhLuan = new BinhLuan();
        $binhLuan->noi_dung =  $request->message;
        $binhLuan->ma_nguoi_dung = auth()->user()->maNguoiDung;
        $binhLuan->bai_viet_id = $request->input('idBaiViet');
        $binhLuan->save();
    
        $baiViet = $binhLuan->baiViet;
        $baiViet->so_luot_binh_luan+= 1;
        $baiViet->save();

        $thongBaos = ThongBao::where('ma_nguoi_dung', $baiViet->ma_nguoi_dung)
        ->where('fk_id',$request->input('idBaiViet'))
        ->where('loai_thong_bao', 2)->get();
    var_dump($thongBaos);
    if (count($thongBaos)  != 0) {
        $thongBao = $thongBaos[0];
        $thongBao->noi_dung = "Đã có ". $baiViet->so_luot_binh_luan." lượt bình luận";
        $thongBao->save();
        // $thongBao->tieu_de = "bài viết ".$baiViet->tenBV;
    } else {
        $thongBao = new ThongBao();

       
        $thongBao->loai_thong_bao =2;
        $thongBao->fk_id = $request->input('idBaiViet');
        $thongBao->ma_nguoi_dung =  $baiViet->ma_nguoi_dung;
        $thongBao->image = $baiViet->image;
        $thongBao->tieu_de = "bài viết ".$baiViet->tenBV;
        $thongBao->noi_dung = "Đã có ". $baiViet->so_luot_binh_luan." lượt bình luận";

        $thongBao->save();


    }




    broadcast(new ThongBaoEvent($baiViet->ma_nguoi_dung, $thongBao));


        broadcast(new MessageSent(auth()->user() ?? User::find(1), $binhLuan, $request->input('idBaiViet'), 'create', $binhLuan->id));
        return $request->input('message');
    }

    function patchBinhLuan(Request $request){
        $binhLuan = BinhLuan::find($request->input('comment_id'));
        $binhLuan->noi_dung =  $request->input('message');
        $binhLuan->save();
        broadcast(new MessageSent(auth()->user() ?? User::find(1), $binhLuan, $request->input('idBaiViet'), 'update', $binhLuan->id));
        return $request->input('message');
    }

    function deleteBinhLuan(Request $request){
        $binhLuan = BinhLuan::find($request->input('comment_id'));
        $baiViet = $binhLuan->baiViet;
        $baiViet->so_luot_binh_luan-= 1;
        $baiViet->save();
        $binhLuan->destroy($request->input('comment_id'));
        broadcast(new MessageSent(auth()->user() ?? User::find(1), $request->input('idBaiViet'), $request->input('idBaiViet'), 'delete', $request->input('comment_id')));
      
      

      
        return $request->input('message');
    }
}
