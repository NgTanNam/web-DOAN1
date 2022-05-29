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
                        <form method="POST" action="{{route('ql-sukien.store')}}" class="needs-validation" novalidate>
                            @csrf
                            
                            <div class="form-group">
                                <label for="uname">Chi tiết bài viết:</label>
                                <textarea name="" class="form-control" id="" rows="7"></textarea>
                                <div class="invalid-feedback">Vui lòng nhập ngày bắt đầu.</div>
                            </div>
                            <div class="form-group">
                                <label>Danh mục:</label>
                                <select name="kichhoat" class="form-select">
                                  <option value="1">Kích hoạt</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Sự kiện</label>:</label>
                                <select name="kichhoat" class="form-select">
                                  <option value="1">Kích hoạt</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Trạng thái:</label>
                                <select name="kichhoat" class="form-select">
                                  <option value="1">Kích hoạt</option>
                                  <option value="0">Không kích hoạt</option>  
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="uname">Hình ảnh:</label>
                                <input type="file" class="form-control" name="" id="">
                                <div class="invalid-feedback">Vui lòng nhập tên sự kiện.</div>
                            </div>
                            <div class="form-group">
                                <label for="uname">Video:</label>
                                <input type="file" class="form-control" name="" id="">
                                <div class="invalid-feedback">Vui lòng nhập Video.</div>
                            </div>
                            
                            <button type="submit" class="btn btn-outline-primary btn-sm mb-0 mb-4">Thêm</button>
                        </form>

                    </div>

               

                </div>
            </div>
        </div>


    </div>


@endsection
  
