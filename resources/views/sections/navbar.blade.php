@extends('layouts.app')

<nav>
    <h3>Chops & Hops</h3>
    <ul>
        <li><a href="/" class="active">Home</a></li>
        <li><a href="{{ route('menu') }}">Menu</a></li>
        <li><a href="{{ route('tableBook') }}">Book Table</a></li>
        <li><a href="">Chef</a></li>
        <li><a href="">Contact</a></li>
    </ul>
    <div class="authentication">

        @guest
        <div>
            <a href="{{ route('alert') }}"><i class="far fa-bell"></i></a>
            <button><a href="{{ route('login') }}">Login</a></button>
        </div>
        @endguest

        @auth
            <a href="{{ route('alert') }}"><i class="far fa-bell"></i></a>
            <img src="{{ asset('images/chef-1.jpg') }}" alt="" class="user-image">
            <div class="sub-nav">
                <a href="">{{ auth()->user()->name }}</a>
                <a href="">Profile</a>
                <a href="">Cart</a>
                <a href="">Your Orders</a>
                <a href="{{ route('logout') }}">Logout</a>
            </div>
        @endauth
    </div>
</nav>

