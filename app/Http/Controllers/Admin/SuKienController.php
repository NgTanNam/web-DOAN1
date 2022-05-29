<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuKien;

class SuKienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sukien = SuKien::orderBy('maSuKien', 'ASC')->paginate(5);
        return view('admin.sukien.index')->with(compact('sukien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sukien.create');
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
            'tenSuKien' => 'required|unique:sukien|max:255',
            'ngayBatDau' => 'required',
            'ngayKetThuc' => 'required'
        ]);
        $data = $request->all();
        $sukien = New SuKien();
        $sukien->tenSuKien = $data['tenSuKien'];
        $sukien->ngayBatDau = $data['ngayBatDau'];
        $sukien->ngayKetThuc = $data['ngayKetThuc'];
        $sukien->save();
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
        $sukien = SuKien::find($id);
        return view('admin.sukien.edit')->with(compact('sukien'));
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
            'tenSuKien' => 'required|max:255',
            'ngayBatDau' => 'required',
            'ngayKetThuc' => 'required'
        ]);
        $data = $request->all();
        $sukien = SuKien::find($id);
        $sukien->tenSuKien = $data['tenSuKien'];
        $sukien->ngayBatDau = $data['ngayBatDau'];
        $sukien->ngayKetThuc = $data['ngayKetThuc'];
        $sukien->save();
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
        SuKien::find($id)->delete();
        return redirect()->back();
    }
}
