@extends('layouts.app')

@section('content')

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Quản lý danh mục</li>
          </ol>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    
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
                          <span class="badge badge-sm bg-gradient-success">Kích hoạt</span>
                          @else
                          <span class="badge badge-sm bg-gradient-secondary">Không kích hoạt</span>
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
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Quản lý</th>
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
                          <span class="badge badge-sm bg-gradient-success">Kích hoạt</span>
                          @else
                          <span class="badge badge-sm bg-gradient-secondary">Không kích hoạt</span>
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  


  @endsection