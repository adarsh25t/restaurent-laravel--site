@extends('layouts.app')

@section('login')
@include('sections.navbar')

<div class="login-wrapper">
    <form action="{{ route('login') }}" method="post">
        @csrf
        <h4>Sign in to Chops & Hops</h4>

        <div class="login-inputs">
            <label for="phone">Phone Number</label>
            <input type="text" name="email" placeholder="Enter Phone Number" @error('email') class="input-error-border" @enderror>
            @error('email') <p class="input-error">{{ $message }}</p> @enderror
        </div>

        <div class="login-inputs">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter Password" @error('password') class="input-error-border" @enderror>
            @error('password') <p class="input-error">{{ $message }}</p> @enderror
        </div>

        <input type="submit" value="Sign in  Chops & Hops" class="login-submit">
        <a href="{{ route('register') }}" class="login-next">Create a New Account ?</a>

    </form>
</div>
@include('sections.footer')
@endsection