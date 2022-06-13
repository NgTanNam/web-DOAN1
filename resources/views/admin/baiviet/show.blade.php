@extends('layouts.app')

@section('content')


<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
            
            <div class="page-header align-items-start min-vh-80 border-radius-lg mb-4" style="background-image: url({{asset('uploads/images/'.$data->image)}}); background-position: top;">
                <span class="mask bg-gradient-dark opacity-6"></span>
                <div class="container">
                  <div class="row justify-content-center mt-8 ">
                    <div class="col-lg-5 text-center mx-auto">
                      <p class="text-lead mb-2  mt-10 text-white">{{$data->tenBV}}</p>
                    </div>
                  </div>
                </div>
            </div>

            <div class="container">
              {!!$data->chiTietBaiViet!!}
            </div>


        </div>
      </div>
    </div>
</div>



@endsection