@extends('layouts.app')

<nav>
    <h3>Chops & Hops</h3>
    <ul>
        <li><a href="/" class="{{(request()->is('/')) ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('menu') }}" class="{{ (request()->is('menu')) ? 'active' : '' }}">Menu</a></li>
        <li><a href="{{ route('tableBook') }}" class="{{ (request()->is('tableBook')) ? 'active' : '' }}">Book Table</a></li>
        <li><a href="">Chef</a></li>
        <li><a href="">Contact</a></li>
    </ul>
    <div class="authentication">

        @guest
        <div>
            <i class="far fa-bell"></i>
            <button><a href="{{ route('login') }}">Login</a></button>
        </div>
        @endguest

        @auth
            <i class="far fa-bell"></i>
            <div class="send-message">
                <h5>no messaages</h5>
            </div>
            <img src="{{ asset('images/chef-1.jpg') }}" alt="" class="user-image">
            <div class="sub-nav">
                <a href="">{{ auth()->user()->name }}</a>
                <a href="">Profile</a>
                <a href="{{ route('cart',auth()->user()->id) }}">Cart</a>
                <a href="">Your Orders</a>
                <a href="{{ route('logout') }}">Logout</a>
            </div>
        @endauth
    </div>
</nav>

