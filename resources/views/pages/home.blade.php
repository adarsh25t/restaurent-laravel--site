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

{{-- about section --}}
<div class="about">
    <div class="about-left">
        <div class="about-content">
            <h3>About Us</h3>
            <h4>WE LEAVE A DELICIOUS MEMORY FOR YOU</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quos, cum minus repellat fugiat hic, sunt beatae et explicabo necessitatibus mollitia, minima eum quibusdam aliquid.</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia reprehenderit</p>
        </div>
        <div class="about-images">
            <img src="{{ asset('images/about-1.jpg') }}" alt="">
            <img src="{{ asset('images/about-2.jpg') }}" alt="">
            <img src="{{ asset('images/about-3.jpg') }}" alt="">
        </div>
    </div>
    <div class="about-right">
        <img src="{{ asset('images/about-right.jpg') }}" alt="">
    </div>
</div>
@endsection