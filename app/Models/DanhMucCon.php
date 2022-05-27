<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMucCon extends Model
{
    use HasFactory;

    public $timestamps = false; 
    protected $fillable = [
        'tenDMC', 'slugDMC', 'kichhoat', 'idDM'
    ];
    protected $primaryKey = 'id';
    protected $table = 'danhmuccon';

    public function danhmuc(){
        return $this->belongsTo('App\Models\DanhMuc','idDM','id');
    }
}
