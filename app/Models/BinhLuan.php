<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'noi_dung', 'ma_nguoi_dung', 'bai_viet_id', 'created_at', 'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'binh_luans';

    public function nguoiDung()
    {
        return $this->belongsTo(taiKhoanNguoiDung::class, 'ma_nguoi_dung', 'maNguoiDung');
    }

    function user()
    {
        return $this->belongsTo(User::class, 'ma_nguoi_dung', 'id');
    }
    public function baiViet()
    {
        return $this->belongsTo(BaiViet::class, 'bai_viet_id', 'maBV');
    }
}
