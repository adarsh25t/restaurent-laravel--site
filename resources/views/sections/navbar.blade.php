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
        <a href="{{ route('alert') }}"><i class="far fa-bell"></i></a>
        <button><a href="{{ route('login') }}">Login</a></button>
    </div>
</nav>