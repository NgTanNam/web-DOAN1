@extends('layouts.app')

@section('content')


    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Posts</h6>
                </div>
                <div class="col-6 text-end">
                  <a href="{{ route('ql-baiviet.create') }}" class="btn btn-outline-primary btn-sm mb-0">ADD</a>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STT</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Hình ảnh</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên bài viết</th>
                      {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Danh mục</th> --}}
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Chi tiết bài viết</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Quản lý ảnh mô tả</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Trạng thái</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Quản lý</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($baiviet as $key => $item)
                    <tr>
                      <td>
                        <p class="text-xs ms-sm-3 font-weight-bold mb-0">{{$key}}</p>
                      </td>
                      <td>
                        <img class="rounded-2" width="250" height="150" src="{{asset('uploads/images/'.$item->image)}}" alt="">
                      </td>
                      <td>
                        <p style="width: 100px; white-space: normal " class="text-xs font-weight-bold mb-0">{{$item->tenBV}}</p>
                      </td>
                      {{-- <td>
                        <p class="text-xs font-weight-bold mb-0">{{$item->danhmuccon->tenDMC}}</p>
                      </td> --}}
                      {{-- <td>
                        <p class="text-xs font-weight-bold mb-0">{{$item->sukien->tenSuKien}}</p>
                      </td> --}}
                      <td>
                        <p class="text-xs font-weight-bold mb-0" style=" height:150px; width: 200px; overflow: hidden; display: block; white-space: normal; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 10;">
                          {{$item->chiTietBaiViet}}</p>
                      </td>
                      <td>
                        {{-- <a href="{{url('ql-images/'.$item->maBV)}}" class="mx-n1 btn btn-link text-dark px-3 mb-0">
                          <i class="far fa-image text-2xl"></i>
                        </a> --}}
                        <a href="{{route('ql-hinhanh.edit',[$item->maBV])}}" class="mx-n1 btn btn-link text-dark px-3 mb-0">
                          <i class="far fa-image text-2xl"></i>
                        </a>
                        
                      </td>
                      <td>
                          @if ($item->trangThai == 0)
                          <span class="badge badge-sm bg-gradient-success">activate</span>
                          @else
                          <span class="badge badge-sm bg-gradient-secondary">inactive</span>
                          @endif
                        
                      </td>
                      <td>
                        <form class="float-start mt-2" action="{{route('ql-baiviet.destroy',[$item->maBV])}}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button href="" class="btn  btn-link text-danger text-gradient px-3 mb-0 m-sm-n3">
                            <i class="far fa-trash-alt me-2"></i>Delete
                          </button>
                        </form>
                        <a href="{{route('ql-baiviet.edit',[$item->maBV])}}" class="btn btn-link text-dark px-3 mx-n2 mb-0">
                          <i class="fas fa-pencil-alt text-dark me-2"></i>Edit
                        </a>
                        <a href="{{route('ql-baiviet.show',[$item->maBV])}}" class="btn btn-link  mx-n2 mb-0">
                          <i class="fas fa-eye text-primary me-2"></i>
                        </a>
                      </td>
                        
                    @endforeach
                    </tr>
                  </tbody>
                </table>

                <div class="p-2">
                  {{$baiviet->links()}}
                </div>  

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  


  @endsection