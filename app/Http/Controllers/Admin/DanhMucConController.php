<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DanhMuc;
use App\Models\DanhMucCon;

class DanhMucConController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $danhmuc = DanhMuc::all();
        return view('admin.danhmuccon.create')->with(compact('danhmuc'));
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
            'tenDMC' => 'required|unique:danhmuccon|max:255',
            'slugDMC' => 'required|max:255',
            'kichhoat' => 'required',
            'idDM' => 'required'
        ]);
        $data = $request->all();
        $danhmuccon = New DanhMucCon();
        $danhmuccon->tenDMC = $data['tenDMC'];
        $danhmuccon->slugDMC = $data['slugDMC'];
        $danhmuccon->idDM = $data['idDM'];
        $danhmuccon->kichhoat = $data['kichhoat'];
        $danhmuccon->save();
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
        $data = DanhMucCon::find($id);
        $tendanhmuc = DanhMuc::find($data->idDM);
        $danhmuc = DanhMuc::all();
        return view('admin.danhmuccon.edit')->with(compact('data','tendanhmuc', 'danhmuc'));
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
            'tenDMC' => 'required|max:255',
            'slugDMC' => 'required|max:255',
            'kichhoat' => 'required',
            'idDM' => 'required'
        ]);
        $data = $request->all();
        $danhmuccon = DanhMucCon::find($id);
        $danhmuccon->tenDMC = $data['tenDMC'];
        $danhmuccon->slugDMC = $data['slugDMC'];
        $danhmuccon->idDM = $data['idDM'];
        $danhmuccon->kichhoat = $data['kichhoat'];
        $danhmuccon->save();
        return redirect()->back()->with('status', 'Cập nhập thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DanhMucCon::find($id)->delete();
        return redirect()->back();
    }
}
