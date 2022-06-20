<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class taiKhoanNguoiDung extends Authenticatable
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'tenNguoiDung',
    	'ho',
        'ten',
        'email',
        'diaChi',
        'ngaySinh',
        'sdt',
        'matKhau'
    ];
    protected $primaryKey = 'maNguoiDung';
 	protected $table = 'taikhoannguoidung';

     public function roles(){
        return $this->belongsToMany('App\Models\Roles');
    }

    public function getAuthPassword()
    {
        return $this->matKhau;
    }

//     public function hasAnyRoles($roles){

//       return null !== $this->roles()->whereIn('name', $roles)->first();
//    }
//    public function hasRole($role){
//        return null !== $this->roles()->where('name', $role)->first();

//    }

}