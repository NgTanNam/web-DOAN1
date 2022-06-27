@php
    use App\Models\BaiViet;

@endphp

@extends('User.layout')
@section('content')
<header class="flex">
    <div class="container">
        <div class="header-title">
            <h1>Leave Your Footprints</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus rerum maxime enim odit illum in molestias beatae doloremque, ratione optio.</p>
        </div>
        <div class="header-form">
            <h2>Choose your Travel location:</h2>
            <form class="flex">
                <input type="text" class="form-control" placeholder="Destination name">
                <input type="submit" class="btn" value="Search">
            </form>
        </div>
    </div>
</header>
<section id="featured" class="py-4">
    <div class="container">
        <div class="title-wrap">
            <span class="sm-title">know about some places before your travel</span>
            <h2 class="lg-title">featured places</h2>
        </div>
        <div class="featured-row">

            @foreach (BaiViet::all() as $baiViet)
            <div class="featured-item my-2 shadow">
                <img src="{{asset('uploads/images/'.$baiViet->image)}}" alt="featured place">
                <div class="featured-item-content">
                    <span>
                        <i class="fas fa-map-marker-alt"></i>
                      {{$baiViet->tenBV}}
                    </span>
                    <div>
                        <p class="text"><a href="{{ route('bai_viet',['id'=>$baiViet->maBV ]) }}">Click để khám phá thêm bạn nhé <3</a></p>
                    </div>
                </div>
            </div>
            @endforeach

 
        </div>
    </div>
</section>
<style>
    .form-control {
        width: 100%;
        margin: 0.6rem 0;
        max-width: 500px;
        border: 1px solid #fff;
        border-radius: 0.2rem;
        padding: 0.7rem;
        font-size: 1rem;
        font-family: 'Raleway', sans-serif;
        color: #fff;
        background-color: transparent;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }
</style>
@endsection