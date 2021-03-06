@extends('layouts.app')

@section('content')


    
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Add Posts</h6>
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
                        <form method="POST" action="{{route('ql-baiviet.store')}}" class="needs-validation" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group">
                                <label for="uname">Tên bài viết:</label>
                                <input type="text" class="form-control" value="" placeholder="Tên bài viết" name="tenBV" required>
                                <div class="invalid-feedback">Vui lòng nhập tên bài viết.</div>
                            </div>
                            <div class="form-group">
                                <label>Danh mục:</label>
                                <select name="idDM" class="form-select">
                                  @foreach ($danhmuc as $item)
                                    <option value="{{$item->id}}">{{$item->tenDMC}}</option>
                                  @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Sự kiện:</label>
                                <select name="idSK" class="form-select">
                                    @foreach ($sukien as $item)
                                    <option value="{{$item->maSuKien}}">{{$item->tenSuKien}}</option>
                                  @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Chi tiết bài viết:</label>
                                <textarea name="chiTietBaiViet" class="form-control" id="ckeditor" rows="7"></textarea>
                                <div class="invalid-feedback">Vui lòng nhập chi tiết bài viết.</div>
                            </div>
                            <div class="form-group">
                                <label>Trạng thái:</label>
                                <select name="trangThai" class="form-select">
                                  <option value="0">Kích hoạt</option>
                                  <option value="1">Không kích hoạt</option>  
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Thành Phố:</label>
                                <select name="thanhpho" id="thanhpho" class="form-select choose" onchange="select(this)">
                                    <option value="">--Chọn Thành Phố--</option>
                                  @foreach ($thanhpho as $key => $item)
                                    <option value="{{$item->matp}}">{{$item->name}}</option>
                                  @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Quận Huyện:</label>
                                <select name="quanhuyen" id="quanhuyen" class="form-select choose" onchange="select(this)">
                                  
                                    <option value="">--Chọn Quận Huyện--</option>
                                  
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Xã Phường:</label>
                                <select name="xaphuong" id="xaphuong" class="form-select">
                                  
                                    <option value="">--Chọn Xã Phường--</option>
                                  
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="uname">Địa chỉ cụ thể:</label>
                                <input type="text" class="form-control" value="" placeholder="Địa chỉ cụ thể" name="diaChi" required>
                                <div class="invalid-feedback">Vui lòng nhập Địa chỉ cụ thể.</div>
                            </div>
                            <div class="form-group">
                                <label for="">Hình ảnh:</label>
                                <input type="file" class="form-control" name="image" id="">
                                <div class="invalid-feedback">Vui lòng nhập tên sự kiện.</div>
                            </div>
                            <div class="form-group">
                                <label for="">Hình ảnh mô tả:</label>
                                <input type="file" class="form-control" multiple name="images[]" id="">
                                <div class="invalid-feedback">Vui lòng nhập tên sự kiện.</div>
                            </div>
                            <div class="form-group">
                                <label for="">Video:</label>
                                <input type="file" class="form-control" multiple name="videos[]" id="">
                                <div class="invalid-feedback">Vui lòng nhập tên sự kiện.</div>
                            </div>
                            
                            <button type="submit" class="btn btn-outline-primary btn-sm mb-0 mb-4">Thêm</button>
                        </form>

                    </div>

               

                </div>
            </div>
        </div>


    </div>

    
@endsection
  
