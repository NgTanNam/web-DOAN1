<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DanhMuc;
use App\Models\DanhMucCon;

class DanhMucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhmuc = DanhMuc::orderBy('id', 'ASC')->get();
        $danhmuccon = DanhMucCon::with('danhmuc')->orderBy('id','DESC')->paginate(5);
        return view('admin.danhmuc.index')->with(compact('danhmuc','danhmuccon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.danhmuc.create');
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
            'tendanhmuc' => 'required|unique:danhmuc|max:255',
            'slugdanhmuc' => 'required|max:255',
            'kichhoat' => 'required'
        ]);
        $data = $request->all();
        $danhmuc = New DanhMuc();
        $danhmuc->tenDanhMuc = $data['tendanhmuc'];
        $danhmuc->slugDanhMuc = $data['slugdanhmuc'];
        $danhmuc->kichhoat = $data['kichhoat'];
        $danhmuc->save();
        return redirect()->back()->with('status', 'Thêm thành công.');
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
        $danhmuc = DanhMuc::find($id);
        return view('admin.danhmuc.edit')->with(compact('danhmuc'));
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
        $request->validate([
            'tendanhmuc' => 'required|max:255',
            'slugdanhmuc' => 'required|max:255',
            'kichhoat' => 'required'
        ]);
        $data = $request->all();
        $danhmuc = DanhMuc::find($id);
        $danhmuc->tenDanhMuc = $data['tendanhmuc'];
        $danhmuc->slugDanhMuc = $data['slugdanhmuc'];
        $danhmuc->kichhoat = $data['kichhoat'];
        $danhmuc->save();
        return redirect()->back()->with('status', 'Cập nhập thành công thành công.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DanhMuc::find($id)->delete();
        DanhMucCon::where('idDM', $id)->delete();
        return redirect()->back();
    }
}
