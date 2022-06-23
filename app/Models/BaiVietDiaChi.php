<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiVietDiaChi extends Model
{
    use HasFactory;
    public $timestamps = false; 
    protected $fillable = [
        'maBV', 'diaChi', 'maPhuong'
    ];
    protected $primaryKey = 'id';
    protected $table = 'baiviet_diachi';
}
