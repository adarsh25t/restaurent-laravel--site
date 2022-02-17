@extends('layouts.app')

@section('register')
@include('sections.navbar')

<div class="login-wrapper register-wrapper">
    <form action="">
        <h4>Sign up to Chops & Hops</h4>

        <div class="login-inputs">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter Name">
        </div>

        <div class="login-inputs">
            <label for="phone">Phone Number</label>
            <input type="number" name="phone" placeholder="Enter Phone Number">
        </div>

        <div class="login-inputs">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter Email">
        </div>

        <div class="login-inputs">
            <label for="password">Password</label>
            <input type="number" name="password" placeholder="Enter Password">
        </div>

        <input type="submit" value="Sign in  Chops & Hops" class="login-submit">
        <a href="{{ route('login') }}" class="login-next">Create a Nnew Accout ?</a>

    </form>
</div>
@include('sections.footer')
@endsection