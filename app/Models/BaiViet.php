<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiViet extends Model
{
    use HasFactory;
    const UPDATED_AT = null;
    protected $fillable = [
        'tenBV','maDM', 'maSK', 'trangThai', 'chiTietBaiViet', 'image', 'xaid','so_luot_binh_luan'
    ];
    protected $primaryKey = 'maBV';
    protected $table = 'baiviet';

    public function danhmuccon(){
        return $this->belongsTo('App\Models\DanhMucCon','maDM','id');
    }

    public function sukien(){
        return $this->belongsTo('App\Models\SuKien','maSK','maSuKien');
    }

    public function images(){
        return $this->hasMany(HinhANh::class,'maBV','maBV');
    }
    public function taiKhoanNguoiDung(){
        return $this->belongsTo(taiKhoanNguoiDung::class,'ma_nguoi_dung','maNguoiDung');
    }
    
}
