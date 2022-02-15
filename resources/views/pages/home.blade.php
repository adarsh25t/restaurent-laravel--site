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
{{-- menu section --}}
<div class="menu">
    <h3>Our menu</h3>
    <h4>Our selection of food with quality taste</h4>
    <div class="menu_items">
        <div class="menu_item">
            <img src="{{ asset("images/menu-1.jpg") }}" alt="">
            <h5>Burger</h5>
            <span>10$</span>
        </div>
        <div class="menu_item">
            <img src="{{ asset("images/menu-2.jpg") }}" alt="">
            <h5>Hawaiian Chicken PizzaSmoked</h5>
            <span>20$</span>
        </div>
        <div class="menu_item">
            <img src="{{ asset("images/menu-1.jpg") }}" alt="">
            <h5>Burger</h5>
            <span>6$</span>
        </div>
        <div class="menu_item">
            <img src="{{ asset("images/menu-2.jpg") }}" alt="">
            <h5>Hawaiian Chicken PizzaSmoked</h5>
            <span>10$</span>
        </div>
    </div>
    <button class="view-menu">View More Menu</button>
</div>
{{-- chef section --}}
<div class="chef">
    <h3>Our chef</h3>
    <h4>We offer the best ingredients for you</h4>
    <div class="chefs">
        <div class="chef">
            <img src="{{ asset('images/chef-1.jpg') }}" alt="">
            <h5>David Martin</h5>
            <span>Cookie Chef</span>
        </div>
        <div class="chef">
            <img src="{{ asset('images/chef-2.jpg') }}" alt="">
            <h5>David Martin</h5>
            <span>Cookie Chef</span>
        </div>
        <div class="chef">
            <img src="{{ asset('images/chef-3.jpg') }}" alt="">
            <h5>David Martin</h5>
            <span>Cookie Chef</span>
        </div>
    </div>
</div>
@endsection