<link rel="stylesheet" href="{{asset('css\home.css') }}">
@extends('layouts.main')
@section('content')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://htmldemo.net/juan/juan/assets/img/slider/slider-2.jpg" class="d-block w-100" alt="...">
        <div class="slider">
            <div class="content">
            <ul>
                <li><h5>Top Selling!</h5></li>
                <li><h2>New Collection</h2></li>
                <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid</p></li>
                <li> <a href="">SHOP NOW</a></li>
            </ul>
            </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://htmldemo.net/juan/juan/assets/img/slider/slider-1.jpg" class="d-block w-100" alt="...">
        <div class="slider">
            <div class="content">
            <ul>
                <li><h5>Best Selling!</h5></li>
                <li><h2>Top Collection </h2></li>
                <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid</p></li>
                <li> <a href="">SHOP NOW</a></li>
            </ul>
            </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>   
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-4">
               <div class="row home-e2">
                <div class="col-2">
                    <i class="bi bi-truck"></i>
                </div>
                <div class="col-10">
                    <h5>FREE SHIPPING</h5>
                    <p>Free shipping on all order</p>
                </div>
               </div>
            </div>
           <div class="col-4">
            <div class="row ">
                <div class="col-2 home-e2">
                    <i class="bi bi-truck"></i>
                </div>
                <div class="col-10">
                    <h5>FREE SHIPPING</h5>
                    <p>Free shipping on all order</p>
                </div>
               </div>
           </div>
           <div class="col-4">
            <div class="row home-e2">
                <div class="col-2">
                    <i class="bi bi-truck"></i>
                </div>
                <div class="col-10">
                    <h5>FREE SHIPPING</h5>
                    <p>Free shipping on all order</p>
                </div>
               </div>
           </div>
        </div>
    </div>
</div>
@endsection