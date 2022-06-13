@extends('layouts.app')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0 p-3">
            <div class="row">
              <div class="col-6 d-flex align-items-center">
                <h6 class="mb-0">Hình ảnh mô tả {{$baiviet->tenBV}}</h6>
              </div>
              <form method="POST" action="{{route('ql-hinhanh.store')}}" class="needs-validation mt-3" enctype="multipart/form-data">
                @csrf
                <div class="form-group d-none">
                  <input type="text" value="{{$baiviet->maBV}}" class="form-control" name="maBV" id="">
                  
              </div>
                <div class="form-group">
                    <input type="file" class="form-control" name="image" id="">
                    
                </div>
                <button type="submit" class="btn btn-outline-primary btn-sm mb-0 mb-4">Thêm ảnh</button>
              </form>

            </div>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STT</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Hình ảnh</th>
                    
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Quản lý</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $key => $item)
                  <tr>
                    <td>
                      <p class="text-xs ms-sm-3 font-weight-bold mb-0">{{$key}}</p>
                    </td>
                    <td>
                      <img class="rounded-2" width="250" height="150" src="{{asset('uploads/images/'.$item->hinhAnh)}}" alt="">
                    </td>
                   
                    <td>
                      <form class="float-start mt-2" action="{{route('ql-hinhanh.destroy', [$item->maHinhAnh])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button href="" class="btn  btn-link text-danger text-gradient px-3 mb-0 m-sm-n3">
                          <i class="far fa-trash-alt me-2"></i>Delete
                        </button>
                      </form>
                      
                    </td>
                      
                  @endforeach
                  </tr>
                </tbody>
              </table>

              <div class="p-2">
                {{$data->links()}}
              </div>  

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection