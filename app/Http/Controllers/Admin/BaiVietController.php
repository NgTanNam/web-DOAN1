<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuKien;
use App\Models\DanhMucCon;
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
        $baiviet = BaiViet::orderBy('maBV', 'DESC')->get();
        return view('admin.baiviet.index')->with(compact('baiviet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sukien = SuKien::all();
        $danhmuc = DanhMucCon::all();
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
        $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
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

        // video
        $pathvideo = 'uploads/videos';
        $videos = $request->file('videos');
        if($videos){
            foreach($videos as $video){
                $get_name_videos = $video->getClientOriginalName();
                $name_videos = current(explode('.', $get_name_videos));
                $new_videos = $name_videos.rand(0,9999).'.'.$video->getClientOriginalExtension();
                $video->move($pathvideo,$new_videos);

                $video = new Video();

                $video->video=$new_videos;
                $video->maBV=$baiviet->maBV;

                $video->save();
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
