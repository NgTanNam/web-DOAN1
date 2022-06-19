<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function boSuuTap()
    {
        return view('User.pages.boSuuTap');
    }

    public function getAllblog()
    {
        return view('User.pages.AllBlog');
    }
    public function contact()
    {
        return view('User.pages.lienHe');

    }
}
