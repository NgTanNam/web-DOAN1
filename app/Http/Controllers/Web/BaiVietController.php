<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\BaiViet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BaiVietController extends Controller
{
    public function getBaiViet($id){
        $baiViet = BaiViet::find($id);
    //  return Auth::user();
        return view('User.layout_user',['baiViet'=>$baiViet,'idBaiViet'=>$id]);
    } 
}
