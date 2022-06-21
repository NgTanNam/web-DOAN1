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
    public function getBaiViet($id){
        $baiViet = BaiViet::find($id);
    //  return Auth::user();
        return view('User.layout_user',['baiViet'=>$baiViet,'idBaiViet'=>$id]);
    } 

    public function postBinhLuan(Request $request){
        $binhLuan = new BinhLuan();
        $binhLuan->noidung =  $request->message;
        $binhLuan->user_id = auth()->user()->id;
        $binhLuan->baiviet_id = $request->input('idBaiViet');
        $binhLuan->save();
    
        broadcast(new MessageSent(auth()->user() ?? User::find(1), $binhLuan, $request->input('idBaiViet'), 'create', $binhLuan->id));
        return $request->input('message');
    } 
}
