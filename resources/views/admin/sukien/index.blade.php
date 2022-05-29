@extends('layouts.app')

@section('content')

  
    <!-- End Navbar -->
    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Event</h6>
                </div>
                <div class="col-6 text-end">
                  <a href="{{ route('ql-sukien.create') }}" class="btn btn-outline-primary btn-sm mb-0">ADD</a>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STT</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên sự kiện</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Ngày bắt đầu</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Ngày kết thúc</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Quản lý</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($sukien as $key => $item)
                    <tr>
                      <td>
                        <p class="text-xs ms-sm-3 font-weight-bold mb-0">{{$key}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$item->tenSuKien}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$item->ngayBatDau}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$item->ngayKetThuc}}</p>
                      </td>
                      <td class="nav">
                        <form class="mt-2" action="{{route('ql-sukien.destroy',[$item->maSuKien])}}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button href="" class="btn btn-link text-danger text-gradient px-3 mb-0 m-sm-n3">
                            <i class="far fa-trash-alt me-2"></i>Delete
                          </button>
                        </form>
                        <a href="{{route('ql-sukien.edit',[$item->maSuKien])}}" class="btn btn-link text-dark px-3 mb-0">
                          <i class="fas fa-pencil-alt text-dark me-2"></i>Edit
                        </a>
                      </td>
                        
                    @endforeach
                    </tr>
                  </tbody>
                </table>

                <div class="p-2">
                  {{$sukien->links()}}
                </div>  

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  


  @endsection