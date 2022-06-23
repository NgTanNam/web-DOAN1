<?php

namespace App\Http\Controllers\Web;

use App\Events\MessageSent;
use App\Http\Controllers\Controller;
use App\Models\BaiViet;
use App\Models\BinhLuan;
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
        $binhLuan->destroy($request->input('comment_id'));
        broadcast(new MessageSent(auth()->user() ?? User::find(1), $request->input('idBaiViet'), $request->input('idBaiViet'), 'delete', $request->input('comment_id')));
        return $request->input('message');
    }
}
