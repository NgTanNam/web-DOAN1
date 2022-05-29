@extends('layouts.app')

@section('content')


    
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Edit Event</h6>
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
                        <form method="POST" action="{{route('ql-sukien.update', [$sukien->maSuKien])}}" class="needs-validation" novalidate>
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="uname">Tên danh mục:</label>
                                <input type="text" class="form-control" value="{{$sukien->tenSuKien}}"  placeholder="Tên sự kiện" name="tenSuKien" required>
                                <div class="invalid-feedback">Vui lòng nhập tên sự kiện.</div>
                            </div>
                            <div class="form-group">
                                <label for="uname">Ngày kết thúc:</label>
                                <input type="date" class="form-control" value="{{$sukien->ngayBatDau}}" name="ngayBatDau" required>
                                <div class="invalid-feedback">Vui ngày bắt đầu.</div>
                            </div>
                            <div class="form-group">
                                <label for="uname">Ngày kết thúc:</label>
                                <input type="date" class="form-control" value="{{$sukien->ngayKetThuc}}" name="ngayKetThuc" required>
                                <div class="invalid-feedback">Vui ngày kết thúc.</div>
                            </div>
                            <button type="submit" class="btn btn-outline-primary btn-sm mb-0 mb-4">Cập nhập</button>
                        </form>

                    </div>

               

                </div>
            </div>
        </div>


    </div>


@endsection
  
