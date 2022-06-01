@extends('layouts.app')

@section('content')


    
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Add Category</h6>
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
                        <form method="POST" action="{{route('ql-danhmuc.store')}}" class="needs-validation" novalidate>
                            @csrf
                            <div class="form-group">
                                <label for="uname">Tên danh mục:</label>
                                <input type="text" class="form-control" value="{{old('tendanhmuc')}}" onkeyup="ChangeToSlug();" id="slug" placeholder="Tên danh mục" name="tendanhmuc" required>
                                <div class="invalid-feedback">Vui lòng nhập tên danh mục.</div>
                            </div>
                            <div class="form-group">
                                <label for="uname">Slug danh mục:</label>
                                <input type="text" class="form-control" value="{{old('slugdanhmuc')}}" id="convert_slug" placeholder="Slug danh mục" name="slugdanhmuc" required>
                                <div class="invalid-feedback">Vui lòng nhập Slug danh mục.</div>
                            </div>
                            <div class="form-group">
                                <label>Kích hoạt:</label>
                                <select name="kichhoat" class="form-control">
                                  <option value="0">Kích hoạt</option>
                                  <option value="1">Không kích hoạt</option>  
                                </select>
                            </div>
                            <button type="submit" class="btn btn-outline-primary btn-sm mb-0 mb-4">Thêm</button>
                        </form>

                    </div>

               

                </div>
            </div>
        </div>


    </div>


@endsection
  
