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
            <div class="featured-item my-2 shadow">
                <img src="{{asset('frontend/khanh/template/images/featured-reo-de-janeiro-brazil.jpg')}}" alt="featured place">
                <div class="featured-item-content">
                    <span>
                        <i class="fas fa-map-marker-alt"></i>
                        Reo De Janeiro, Brazil
                    </span>
                    <div>
                        <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                    </div>
                </div>
            </div>

            <div class="featured-item my-2 shadow">
                <img src="{{asset('frontend/khanh/template/images/featured-north-bondi-australia.jpg')}}" alt="featured place">
                <div class="featured-item-content">
                    <span>
                        <i class="fas fa-map-marker-alt"></i>
                        North Bondi, Australia
                    </span>
                    <div>
                        <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                    </div>
                </div>
            </div>

            <div class="featured-item my-2 shadow">
                <img src="{{asset('frontend/khanh/template/images/featured-berlin-germany.jpg')}}" alt="featured place">
                <div class="featured-item-content">
                    <span>
                        <i class="fas fa-map-marker-alt"></i>
                        Berlin, Germany
                    </span>
                    <div>
                        <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                    </div>
                </div>
            </div>

            <div class="featured-item my-2 shadow">
                <img src="{{asset('frontend/khanh/template/images/featured-khwaeng-wat-arun-thailand.jpg')}}" alt="featured place">
                <div class="featured-item-content">
                    <span>
                        <i class="fas fa-map-marker-alt"></i>
                        Khwaeng wat arun, thailand
                    </span>
                    <div>
                        <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                    </div>
                </div>
            </div>

            <div class="featured-item my-2 shadow">
                <img src="{{asset('frontend/khanh/template/images/featured-rome-italy.jpg')}}" alt="featured place">
                <div class="featured-item-content">
                    <span>
                        <i class="fas fa-map-marker-alt"></i>
                        Rome, Italy
                    </span>
                    <div>
                        <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                    </div>
                </div>
            </div>

            <div class="featured-item my-2 shadow">
                <img src="{{asset('frontend/khanh/template/images/featured-fuvahmulah-maldives.jpg')}}" alt="featured place">
                <div class="featured-item-content">
                    <span>
                        <i class="fas fa-map-marker-alt"></i>
                        fuvahmulah, maldives
                    </span>
                    <div>
                        <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                    </div>
                </div>
            </div>
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