<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles_tai_khoan_nguoi_dung extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'roles_id_roles', 'tai_khoan_nguoi_dung_maNguoiDung'
    ];
    protected $primaryKey = 'id_user_roles';
 	protected $table = 'roles_tai_khoan_nguoi_dung';

}
