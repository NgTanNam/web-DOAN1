<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinNhan extends Model
{
    use HasFactory;
    protected $fillable = [
        'ma_nguoi_dung',
        'ma_nguoi_nhan',
        'noi_dung',
        'trang_thai_doc',
        'trang_thai'
    ];
    protected $primaryKey = 'id';
    protected $table = 'tin_nhans';
}
