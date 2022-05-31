<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuKien;
use App\Models\DanhMuc;
use App\Models\BaiViet;
use App\Models\HinhAnh;
use App\Models\Video;

class BaiVietController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.baiviet.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sukien = SuKien::all();
        $danhmuc = DanhMuc::all();
        return view('admin.baiviet.create')->with(compact('sukien','danhmuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'idDM' => 'required',
            'idSK' => 'required',
            'chiTietBaiViet' => 'required',
            'trangThai' => 'required',
            'image' => 'required',
        ]);
        $data = $request->all();
        $baiviet = new BaiViet();
        $baiviet->maDM = $data['idDM'];
        $baiviet->maSK = $data['idSK'];
        $baiviet->chiTietBaiViet = $data['chiTietBaiViet'];
        $baiviet->trangThai = $data['trangThai'];
        // them anh vao folder
        $get_image = $request->image;   
        $path = 'uploads/images';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.', $get_name_image));
        $new_image = $name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);

        $baiviet->image=$new_image;

        $baiviet->save();

        // thêm hình ảnh mô tả

        $images = $request->file('images');
        if($images){
            foreach($images as $img){
                $get_name_images = $img->getClientOriginalName();
                $name_images = current(explode('.', $get_name_images));
                $new_images = $name_images.rand(0,999).'.'.$img->getClientOriginalExtension();
                $img->move($path,$new_images);

                $hinhanh = new HinhAnh();

                $hinhanh->hinhAnh=$new_images;
                $hinhanh->maBV=$baiviet->maBV;

                $hinhanh->save();
            }
        }

        


        return redirect()->back()->with('status', 'Thêm bài viết thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
