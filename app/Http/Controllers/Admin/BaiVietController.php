<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuKien;
use App\Models\DanhMucCon;
use App\Models\BaiViet;
use App\Models\HinhAnh;
use App\Models\Video;
use App\Models\ThanhPho;
use App\Models\QuanHuyen;
use App\Models\XaPhuong;
use App\Models\BaiVietDiaChi;
use Illuminate\Support\Facades\File;

class BaiVietController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baiviet = BaiViet::orderBy('maBV','DESC')->paginate(4);
        return view('admin.baiviet.index')->with(compact('baiviet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sukien = SuKien::all();
        $danhmuc = DanhMucCon::all();
        $thanhpho = ThanhPho::all();
        
        return view('admin.baiviet.create')->with(compact('sukien','danhmuc','thanhpho'));
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
            'tenBV' => 'required|unique:baiviet|max:255',
            'idDM' => 'required',
            'idSK' => 'required',
            'chiTietBaiViet' => 'required',
            'trangThai' => 'required',
            'image' => 'required',
            'xaphuong' => 'required',
            'diaChi' => 'required'
        ]);
        $data = $request->all();
        $baiviet = new BaiViet();
        $baiviet->tenBV = $data['tenBV'];
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

        //address
        $diachi = new BaiVietDiaChi();
        $diachi->maBV = $baiviet->maBV;
        $diachi->diaChi = $data['diaChi'];
        $diachi->maPhuong = $data['xaphuong'];
        $diachi->save();

        // th??m h??nh ???nh m?? t???

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

        


        return redirect()->back()->with('status', 'Th??m b??i vi???t th??nh c??ng.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = BaiViet::find($id);
        return view('admin.baiviet.show')->with(compact('data'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = BaiViet::find($id);
        $sukien = SuKien::all();
        $danhmuc = DanhMucCon::all();
        $thanhpho = ThanhPho::all();
        
        $diachi = BaiVietDiaChi::where('maBV', $id)->get();
        $maP = '';
        foreach ($diachi as $key => $value) {
            $maP = $value->maPhuong;
        }
        $phuong = XaPhuong::find($maP);
        $quan = '';
        $pho = '';
        if ($phuong) {
            $quan = QuanHuyen::find($phuong->maqh);
        }
        if ($phuong) {
            $pho =  ThanhPho::find($quan->matp);
        }
        
        $video = Video::where('maBV', $id)->get();
        return view('admin.baiviet.edit')->with(compact('data','sukien','danhmuc','video','thanhpho','diachi','phuong','quan','pho'));
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
        $data = $request->validate([
            'tenBV' => 'required|max:255',
            'idDM' => 'required',
            'idSK' => 'required',
            'chiTietBaiViet' => 'required',
            'trangThai' => 'required',
            'xaphuong' => 'required',
            'diaChi' => 'required'
        ]);
        // $data = $request->all();
        // $baiviet = new BaiViet();
        $baiviet = BaiViet::find($id);
        $baiviet->tenBV = $data['tenBV'];
        $baiviet->maDM = $data['idDM'];
        $baiviet->maSK = $data['idSK'];
        $baiviet->chiTietBaiViet = $data['chiTietBaiViet'];
        $baiviet->trangThai = $data['trangThai'];
        // them anh vao folder
        $get_image = $request->image; 
        if ($get_image) {
            $paths = 'uploads/images/'.$baiviet->image;
            if(file_exists($paths)) {
                unlink($paths);
            }
            $path = 'uploads/images';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);

            $baiviet->image=$new_image;
        }
        

        $baiviet->save();

        //address
        BaiVietDiaChi::where('maBV', $id)->delete();
        $diachi = new BaiVietDiaChi();
        $diachi->maBV = $id;
        $diachi->diaChi = $data['diaChi'];
        $diachi->maPhuong = $data['xaphuong'];
        $diachi->save();

        $pathvideo = 'uploads/videos';
        $videos = $request->file('videos');
        if($videos){
            $video = Video::where('maBV',$id)->get();
            if ($video) {

                foreach ($video as $item) {
                    $path = 'uploads/videos/'.$item->video;
                    File::delete(public_path($path));
                }
                Video::where('maBV',$id)->delete();
            }
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

        return redirect()->back()->with('status', 'C???p nh???p b??i vi???t th??nh c??ng.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bviet = BaiViet::find($id);
        $path = 'uploads/images/'.$bviet->image;
        if(file_exists($path)) {
            unlink($path);
        }
        BaiViet::find($id)->delete();
        $diachi =  BaiVietDiaChi::where('maBV', $id)->get();
        if ($diachi) {
            BaiVietDiaChi::where('maBV', $id)->delete();
        }

        $hinhanh = HinhAnh::where('maBV',$id)->get();
        if ($hinhanh) {
            foreach ($hinhanh as $item) {
                $path = 'uploads/images/'.$item->hinhAnh;
                File::delete(public_path($path));
            }
            HinhAnh::where('maBV',$id)->delete();
        }

        $video = Video::where('maBV',$id)->get();
        if ($video) {

            foreach ($video as $item) {
                $path = 'uploads/videos/'.$item->video;
                File::delete(public_path($path));
            }
            Video::where('maBV',$id)->delete();
        }


        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function select_delivery(Request $request){
        $data = $request->all();
        if ($data['action']) {
            $output = '';
            if ($data['action'] == "thanhpho") {
                $select_province = QuanHuyen::where('matp', $data['ma_id'])->orderby('maqh', 'ASC')->get();
                $output.= '<option>--Ch???n Qu???n Huy???n--</option>';
                foreach ($select_province as $key => $value) {
                    $output .= '<option value="'.$value->maqh.'">'.$value->name.'</option>';
                }
               
            }else { 
                $select_wards = XaPhuong::where('maqh', $data['ma_id'])->orderby('maPhuong', 'ASC')->get();
                $output.= '<option>--Ch???n X?? Ph?????ng--</option>';
                foreach ($select_wards as $key => $value) {
                    $output .= '<option value="'.$value->maPhuong.'">'.$value->name.'</option>';
                }
            }
            echo $output;
        }
    }
   
}

