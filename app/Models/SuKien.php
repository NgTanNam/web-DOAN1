<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuKien extends Model
{
    use HasFactory;

    public $timestamps = false; 
    protected $fillable = [
        'tenSuKien', 'ngayBatDau', 'ngayKetThuc'
    ];
    protected $primaryKey = 'maSuKien';
    protected $table = 'sukien';
}
