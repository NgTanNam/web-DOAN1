<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\taiKhoanNguoiDung;
use App\Models\Roles;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        taiKhoanNguoiDung::truncate();

        $adminroles = Roles::where('name', 'Admin')->first();
        $CTVroles = Roles::where('name', 'CTV')->first();
        $userroles = Roles::where('name', 'User')->first();

        $admin = taiKhoanNguoiDung::create([
            'tenNguoiDung' => 'khanhadmin',
            'ho' => 'Trần',
            'ten' => 'Khánh',
            'diaChi' => 'Đà Nẵng',
            'ngaySinh' => '2001-09-30',
            'matKhau' => md5('123456'),
            'email' => 'khanhadmin@gmail.com'
        ]);

        $CTV = taiKhoanNguoiDung::create([
            'tenNguoiDung' => 'khanhCTV',
            'ho' => 'Trần',
            'ten' => 'Khánh',
            'diaChi' => 'Đà Nẵng',
            'ngaySinh' => '2001-09-30',
            'matKhau' => md5('123456'),
            'email' => 'khanhCTV@gmail.com'
        ]);

        $user = taiKhoanNguoiDung::create([
            'tenNguoiDung' => 'khanhuser',
            'ho' => 'Trần',
            'ten' => 'Khánh',
            'diaChi' => 'Đà Nẵng',
            'ngaySinh' => '2001-09-30',
            'matKhau' => md5('123456'),
            'email' => 'khanhuser@gmail.com'
        ]);

        $admin->roles()->attach($adminroles);
        $CTV->roles()->attach($CTVroles);
        $user->roles()->attach($userroles);
    }
}
