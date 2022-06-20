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
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">HỌ</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">TÊN</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">TÊN ĐĂNG NHẬP</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">SỐ ĐIỆN THOẠI</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">EMAIL</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NGÀY SINH</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">QUÊ QUÁN</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ADMIN</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">CTV</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">USER</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">QUẢN LÝ</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($account as $key => $item)
                <form action="{{url('/assign-roles')}}" method="POST">
                  @csrf
                  <tr>
                    <td>
                      <p class="text-xs ms-sm-3 font-weight-bold mb-0">{{$key + 1}}</p>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{$item->tenNguoiDung}}</p>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{$item->ho}}</p>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{$item->ten}}</p>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{$item->sdt}}</p>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{$item->email}}</p>
                      <input type="hidden" name="admin_email" value="{{ $item->email }}">
                      <input type="hidden" name="admin_id" value="{{ $item->maNguoiDung }}">
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{$item->ngaySinh}}</p>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{$item->diaChi}}</p>
                    </td>
                    <td><input type="checkbox" name="admin_role" {{$item->hasRole('ADMIN') ? 'checked' : ''}}></td>
                    <td><input type="checkbox" name="author_role" {{$item->hasRole('CTV') ? 'checked' : ''}}></td>
                    <td><input type="checkbox" name="user_role" {{$item->hasRole('USER') ? 'checked' : ''}}></td>
                    <td class="nav">
                      <button href="" type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0 m-sm-n3">
                        <i class="far fa-trash-alt me-2"></i>Phân Quyền
                      </button>
                      <a href="{{route('ql-taikhoan.edit',[$item->maNguoiDung])}}" class="btn btn-link text-dark px-3 mb-0">
                        <i class="fas fa-pencil-alt text-dark me-2"></i>Edit
                      </a>
                    </td>
                  </tr>
                </form>
                @endforeach
              </tbody>
            </table>

            <div class="p-2">
              {{$account->links()}}
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection