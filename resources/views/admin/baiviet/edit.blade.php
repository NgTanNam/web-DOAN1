@extends('layouts.app')

@section('content')


    
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Edit Posts</h6>
                            </div>
                            
                        </div>
                    </div>
                    {{-- error --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{--  --}}
                    <div class="container">
                        <form method="POST" action="{{route('ql-baiviet.update', [$data->maBV])}}" class="needs-validation" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            
                            <div class="form-group">
                                <label for="uname">Tên bài viết:</label>
                                <input type="text" class="form-control" value="{{$data->tenBV}}" placeholder="Tên bài viết" name="tenBV" required>
                                <div class="invalid-feedback">Vui lòng nhập tên bài viết.</div>
                            </div>
                            <div class="form-group">
                                <label>Danh mục:</label>
                                <select name="idDM" class="form-select">
                                  @foreach ($danhmuc as $item)
                                    <option {{$data->maDM == $item->id ? 'selected' : ''}} value="{{$item->id}}">{{$item->tenDMC}}</option>
                                  @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Sự kiện</label>:</label>
                                <select name="idSK" class="form-select">
                                @foreach ($sukien as $item)
                                    <option {{$data->maSK == $item->maSuKien ? 'selected' : ''}} value="{{$item->maSuKien}}">{{$item->tenSuKien}}</option>
                                  @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Chi tiết bài viết:</label>
                                <textarea name="chiTietBaiViet" class="form-control" id="ckeditor" rows="7">{{$data->chiTietBaiViet}}</textarea>
                                <div class="invalid-feedback">Vui lòng nhập chi tiết bài viết.</div>
                            </div>
                            <div class="form-group">
                                <label>Trạng thái:</label>
                                <select name="trangThai" class="form-select">
                                    @if ($data->trangThai == 0)
                                        <option selected value="0">Kích hoạt</option>
                                        <option value="1">Không kích hoạt</option> 
                                    @else
                                        <option value="0">Kích hoạt</option>
                                        <option selected value="1">Không kích hoạt</option> 
                                     @endif 
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Thành Phố:</label>
                                <select name="thanhpho" id="thanhpho" class="form-select choose" onchange="select(this)">
                                    {{--  --}}
                                    <option {{ $retVal = ($pho) ? 'disabled' : '' ; }}>--chọn Thành Phố--</option>
                                  @foreach ($thanhpho as $key => $item)
                                    <option {{ $retVal = ($pho) ? ($pho->matp == $item->matp ? 'selected' : '') : '' ; }} value="{{$item->matp}}">{{$item->name}}</option>
                                  @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Quận Huyện:</label>
                                <select name="quanhuyen" id="quanhuyen" class="form-select choose" onchange="select(this)">
                                  
                                    <option value="{{$retVal = ($quan) ? $quan->maqh : '' ; }}">{{$retVal = ($quan) ? $quan->name : '--chọn Quận Huyện--' ; }}</option>
                                  
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Xã Phường:</label>
                                <select name="xaphuong" id="xaphuong" class="form-select">
                                
                                    <option value="{{$retVal = ($phuong) ? $phuong->maPhuong : '' ; }}">{{$retVal = ($phuong) ? $phuong->name : '--Chọn xã phường--' ; }}</option>
                                  
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="uname">Địa chỉ cụ thể:</label>
                               
                                
                                    <input type="text" class="form-control" @foreach ($diachi as $item) value="{{$item->diaChi}}" @endforeach placeholder="Địa chỉ cụ thể" name="diaChi" required>
                                
                                
                                <div class="invalid-feedback">Vui lòng nhập Địa chỉ cụ thể.</div>
                            </div>
                            <div class="form-group">
                                <label for="">Hình ảnh:</label>
                                <input type="file" class="form-control" name="image" id="">
                                <img src="{{asset('uploads/images/'.$data->image)}}" class="mt-2 border-radius-md" width="50%" alt="">
                                <div class="invalid-feedback">Hình ảnh phải có.</div>
                            </div>
                            
                            <div class="form-group">
                                
                                    <label for="">Video:</label>
                                    <input type="file" class="form-control" multiple name="videos[]" id="">
                                @foreach ($video as $item)
                                    <video width="50%" class="mt-3" controls>
                                        <source src="{{asset('uploads/videos/'.$item->video)}}">
                                    </video>
                                    <div class="invalid-feedback">Vui lòng nhập tên sự kiện.</div>
                                @endforeach
                                
                            </div>
                            
                            <button type="submit" class="btn btn-outline-primary btn-sm mb-0 mb-4">Cập nhập</button>
                        </form>

                    </div>

               

                </div>
            </div>
        </div>


    </div>


@endsection
  
