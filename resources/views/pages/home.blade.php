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
              <h5 class="titles">Chops & Hops</h5>
              <p class="sub-titles">THE BEST EXPERIENCE</p>
              <button class="booking-table">Book Your Table</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/bg-2.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="titles">Chops & Hops</h5>
                <p class="sub-titles">THE BEST EXPERIENCE</p>
                <button class="booking-table">View Your Menu</button>
              </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/bg-3.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="titles">Chops & Hops</h5>
                <p class="sub-titles">THE BEST EXPERIENCE</p>
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
            <h3 class="title">About Us</h3>
            <h4 class="sub-title">WE LEAVE A DELICIOUS MEMORY FOR YOU</h4>
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
    <h3 class="title">Our menu</h3>
    <h4 class="sub-title">Our selection of food with quality taste</h4>
    <div class="menu_items">
       @foreach ($Foods as $food)
            <a class="menu_item" href="{{ route('menu') }}">
                <img src="{{ asset('foodImage/'.$food->image_path) }}" alt="">
                <h5>{{ $food->Title }}</h5>
                <span>{{ $food->price }}</span>
            </a>
       @endforeach
    </div>
    <button class="view-menu"><a href="{{ route('menu') }}">View More Menu</a></button>
</div>
{{-- book_a_table --}}
<div class="book_a_table">
    <div class="book_ads">
        <h3>Chops & Hops</h3>
        <h4>Book A Table Now</h4>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        <button>Book A Table</button>
    </div>
</div>
{{-- chef section --}}
<div class="Chef">
    <h3 class="title">Our chef</h3>
    <h4 class="sub-title">We offer the best ingredients for you</h4>
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
<div class="details">
    <div class="address">
        <h3>Our Address</h3>
        <p>Lefreak Building, 2 AlBahr St, Down Santa Monica, Los Angeles</p>
    </div>
    <div class="opening-time">
        <h3>Opening Hours</h3>
        <span>Mon - Fri: 10 AM - 11 PM</span><br>
        <span class="details-last-span">Sat - Sun: 9 AM - 1 PM</span>
    </div>
    <div class="Private">
        <h3>Private Dinning</h3>
        <span>Email: Chops&Hops@gmail.com</span><br>
        <span class="details-last-span">Phone: 02 015680721</span>
    </div>
</div>
{{-- footer --}}
@include('sections.footer')
@endsection