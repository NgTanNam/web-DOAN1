<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThongBao extends Model
{
    use HasFactory;
    protected $fillable = [
        'noi_dung', 'image', 'loai_thong_bao', 'fk_id', 'ma_nguoi_dung','tieu_de'
    ];
    protected $primaryKey = 'id';
    protected $table = 'thong_baos';

    function taiKhoanNguoiDung(){
        return $this->belongsTo(taiKhoanNguoiDung::class,'fk_id','maNguoiDung');
    }
}
