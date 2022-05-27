@extends('layouts.app')

@section('content')


  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
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
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
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
                            <h6 class="mb-0">Edit Sub-category</h6>
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
                        <form method="POST" action="{{route('ql-danhmuccon.update', [$data->id])}}" class="needs-validation" novalidate>
                          @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="uname">Tên danh mục con:</label>
                                <input type="text" class="form-control" value="{{$data->tenDMC}}" onkeyup="ChangeToSlug();" id="slug" placeholder="Tên danh mục" name="tenDMC" required>
                                <div class="invalid-feedback">Vui lòng nhập tên danh mục con.</div>
                            </div>
                            <div class="form-group">
                                <label for="uname">Slug danh mục con:</label>
                                <input type="text" class="form-control" value="{{$data->slugDMC}}" id="convert_slug" placeholder="Slug danh mục" name="slugDMC" required>
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
                                  @if ($data->kichhoat == 1)
                                    <option selected value="1">Kích hoạt</option>
                                    <option value="0">Không kích hoạt</option> 
                                  @else
                                  <option  value="1">Kích hoạt</option>
                                  <option selected value="0">Không kích hoạt</option> 
                                  @endif 
                                </select>
                            </div>
                            <button type="submit" class="btn btn-outline-primary btn-sm mb-0 mb-4">Cập nhập</button>
                        </form>

                    </div>

               

                </div>
            </div>
        </div>


    </div>
  </main>


@endsection
  
