@extends('layouts.app')

@section('content')


    
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Add Sub-category</h6>
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
                        <form method="POST" action="{{route('ql-danhmuccon.store')}}" class="needs-validation" novalidate>
                            @csrf
                            <div class="form-group">
                                <label for="uname">Tên danh mục con:</label>
                                <input type="text" class="form-control" value="{{old('tendanhmuccon')}}" onkeyup="ChangeToSlug();" id="slug" placeholder="Tên danh mục" name="tenDMC" required>
                                <div class="invalid-feedback">Vui lòng nhập tên danh mục con.</div>
                            </div>
                            <div class="form-group">
                                <label for="uname">Slug danh mục con:</label>
                                <input type="text" class="form-control" value="{{old('slugdanhmuccon')}}" id="convert_slug" placeholder="Slug danh mục" name="slugDMC" required>
                                <div class="invalid-feedback">Vui lòng nhập Slug danh mục con.</div>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1" class="form-label">Danh mục</label>
                              <select class="form-select" name="idDM" aria-label="Default select example">
                                  @foreach ($danhmuc as $key => $muc)                     
                                      <option value="{{$muc->id}}">{{$muc->tenDanhMuc}}</option>
                                  @endforeach
                              </select>
                            </div>

                            <div class="form-group">
                                <label>Kích hoạt:</label>
                                <select name="kichhoat" class="form-control">
                                  <option value="1">Kích hoạt</option>
                                  <option value="0">Không kích hoạt</option>  
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
  
