<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiViet extends Model
{
    use HasFactory;
    const UPDATED_AT = null;
    protected $fillable = [
        'maDM', 'maSK', 'trangThai', 'chiTietBaiViet', 'image'
    ];
    protected $primaryKey = 'maBV';
    protected $table = 'baiviet';
}
