<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(taiKhoanNguoiDung::class, 'ma_nguoi_dung', 'maNguoiDung');
    }

    
}