@extends('layouts.app')

@section('content')

    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Category</h6>
                </div>
                <div class="col-6 text-end">
                  <a href="{{ route('ql-danhmuc.create') }}" class="btn btn-outline-primary btn-sm mb-0">ADD</a>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STT</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Danh mục</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Slug danh mục</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kích hoạt</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Quản lý</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($danhmuc as $key => $item)
                    <tr>
                      <td>
                        <p class="text-xs ms-sm-3 font-weight-bold mb-0">{{$key}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$item->tenDanhMuc}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$item->slugDanhMuc}}</p>
                      </td>
                      <td>
                          @if ($item->kichhoat == 1)
                          <span class="badge badge-sm bg-gradient-success">activate</span>
                          @else
                          <span class="badge badge-sm bg-gradient-secondary">inactive</span>
                          @endif
                        
                      </td>
                      <td class="nav">
                        <form class="mt-2" action="{{route('ql-danhmuc.destroy',[$item->id])}}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button href="" class="btn btn-link text-danger text-gradient px-3 mb-0 m-sm-n3">
                            <i class="far fa-trash-alt me-2"></i>Delete
                          </button>
                        </form>
                        <a href="{{route('ql-danhmuc.edit',[$item->id])}}" class="btn btn-link text-dark px-3 mb-0">
                          <i class="fas fa-pencil-alt text-dark me-2"></i>Edit
                        </a>
                      </td>
                        
                    @endforeach
                    </tr>
                  </tbody>
                </table>

                {{-- <div class="p-2">
                  {{$danhmuc->links()}}
                </div>   --}}

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Sub-category</h6>
                </div>
                <div class="col-6 text-end">
                  <a href="{{route('ql-danhmuccon.create')}}" class="btn btn-outline-primary btn-sm mb-0">ADD</a>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                {{--  --}}
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STT</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Danh mục con</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Slug danh mục con</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Danh Mục</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kích hoạt</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Quản lý</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($danhmuccon as $key => $item)
                    <tr>
                      <td>
                        <p class="text-xs ms-sm-3 font-weight-bold mb-0">{{$key}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$item->tenDMC}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$item->slugDMC}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$item->danhmuc->tenDanhMuc}}</p>
                      </td>
                      <td>
                          @if ($item->kichhoat == 1)
                          <span class="badge badge-sm bg-gradient-success">activate</span>
                          @else
                          <span class="badge badge-sm bg-gradient-secondary">inactive</span>
                          @endif
                        
                      </td>
                      <td class="nav">
                        <form class="mt-2" action="{{route('ql-danhmuccon.destroy',[$item->id])}}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button class="btn btn-link text-danger text-gradient px-3 mb-0 m-sm-n3">
                            <i class="far fa-trash-alt me-2"></i>Delete
                          </button>
                        </form>
                        <a href="{{route('ql-danhmuccon.edit',[$item->id])}}" class="btn btn-link text-dark px-3 mb-0">
                          <i class="fas fa-pencil-alt text-dark me-2"></i>Edit
                        </a>
                      </td>
                        
                    @endforeach
                    </tr>
                  </tbody>
                </table>
                <div class="p-2">
                  {{$danhmuccon->links()}}
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  


  @endsection