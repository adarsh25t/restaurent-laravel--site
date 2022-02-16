@extends('layouts.app')

<nav>
    <h3>Chops & Hops</h3>
    <ul>
        <li><a href="/" class="active">Home</a></li>
        <li><a href="">Menu</a></li>
        <li><a href="{{ route('tableBook') }}">Book Table</a></li>
        <li><a href="">Chef</a></li>
        <li><a href="">Contact</a></li>
    </ul>
    <div class="authentication">
        <button><a href="">Login</a></button>
    </div>
</nav>