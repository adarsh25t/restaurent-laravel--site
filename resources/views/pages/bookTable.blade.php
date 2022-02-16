@extends('layouts.app')

@include('sections.navbar')

@section('tablebooking')

<div class="booking-table-section">
    <div class="booking-left">
        <h3 class="title">Table Booking</h3>
        <h4 class="sub-title">Here you can make a reservation Or just walkin to our cafe</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis eaque quae dolores ratione atque? Velit veritatis doloribus doloremque exercitationem accusamus, dolore debitis animi hic nam.</p>
        
        <div class="about-images">
            <img src="{{ asset('images/about-1.jpg') }}" alt="">
            <img src="{{ asset('images/about-2.jpg') }}" alt="">
            <img src="{{ asset('images/about-3.jpg') }}" alt="">
        </div>
    </div>
    <div class="booking-right">
        <form action="">
            <h3 class="booking-title">Table Reservation</h3>
            <div class="booking-input">
                <input type="text" placeholder="Your Name">
                <input type="text" placeholder="Your Email Address">
            </div>
            <div class="booking-input">
                <input type="text" placeholder="Phone Number">
                <input type="text" placeholder="Number Of Guests">
            </div>  
            <div class="booking-input">
                <input type="date">
                <input type="time">
            </div>    
            <textarea name="" id="" ></textarea>
            <input type="submit" class="booking-btn" value="Make A Reservation">
        </form>
    </div>
</div>
@include('sections.footer')
@endsection