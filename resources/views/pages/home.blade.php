@extends('layouts.app')

@include('sections.navbar')
@section('home')

<div class="hero">
    <div class="shadow"></div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('images/bg-1.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="title">Chops & Hops</h5>
              <p class="sub-title">THE BEST EXPERIENCE</p>
              <button class="booking-table">Book Your Table</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/bg-2.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="title">Chops & Hops</h5>
                <p class="sub-title">THE BEST EXPERIENCE</p>
                <button class="booking-table">View Your Menu</button>
              </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/bg-3.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="title">Chops & Hops</h5>
                <p class="sub-title">THE BEST EXPERIENCE</p>
                <button class="booking-table">Contact Me</button>
              </div>
          </div>
        </div>
      </div>
</div>
@endsection