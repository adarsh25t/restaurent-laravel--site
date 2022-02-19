@extends('layouts.app')

@include('sections.navbar')
@section("menu")

<div class="menu-wrapper">
    <div class="menu-category">
        <div class="category"><span>category 1</span></div>
        <div class="category"><span>category 2</span></div>
        <div class="category"><span>category 3</span></div>
        <div class="category"><span>category 4</span></div>
        <div class="category"><span>category 5</span></div>
    </div>
    <div class="menu-list">
        <div class="list-menu">
            <div class="menu-image">
                 <img src="{{ asset('images/menu-1.jpg') }}" alt="">
            </div>
             <div class="menu-details">
                 <h4>Name of the dish</h4>
                 <span class="category">chicken</span><br>
                 <span>Rs2000</span>
             </div>
         </div>
         <div class="list-menu">
            <div class="menu-image">
                 <img src="{{ asset('images/menu-1.jpg') }}" alt="">
            </div>
             <div class="menu-details">
                 <h4>Name of the dish</h4>
                 <span class="category">chicken</span><br>
                 <span>Rs2000</span>
             </div>
         </div>
         <div class="list-menu">
            <div class="menu-image">
                 <img src="{{ asset('images/menu-1.jpg') }}" alt="">
            </div>
             <div class="menu-details">
                 <h4>Name of the dish</h4>
                 <span class="category">chicken</span><br>
                 <span>Rs2000</span>
             </div>
         </div>
         <div class="list-menu">
            <div class="menu-image">
                 <img src="{{ asset('images/menu-1.jpg') }}" alt="">
            </div>
             <div class="menu-details">
                 <h4>Name of the dish</h4>
                 <span class="category">chicken</span><br>
                 <span>Rs2000</span>
             </div>
         </div>
         <div class="list-menu">
            <div class="menu-image">
                 <img src="{{ asset('images/menu-1.jpg') }}" alt="">
            </div>
             <div class="menu-details">
                 <h4>Name of the dish</h4>
                 <span class="category">chicken</span><br>
                 <span>Rs2000</span>
             </div>
         </div>
    </div>
</div>
@include('sections.footer')

@endsection
