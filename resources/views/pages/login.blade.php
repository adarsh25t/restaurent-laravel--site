@extends('layouts.app')

@section('login')
@include('sections.navbar')

<div class="login-wrapper">
    <form action="">
        <h4>Sign in to Chops & Hops</h4>

        <div class="login-inputs">
            <label for="phone">Phone Number</label>
            <input type="number" name="phone" placeholder="Enter Phone Number">
        </div>

        <div class="login-inputs">
            <label for="password">Password</label>
            <input type="number" name="password" placeholder="Enter Password">
        </div>

        <input type="submit" value="Sign in  Chops & Hops" class="login-submit">
        <a href="{{ route('register') }}" class="login-next">Create a New Account ?</a>

    </form>
</div>
@include('sections.footer')
@endsection