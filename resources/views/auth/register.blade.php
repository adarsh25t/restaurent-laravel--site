@extends('layouts.app')

@section('register')
@include('sections.navbar')

<div class="login-wrapper register-wrapper">
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <h4>Sign up to Chops & Hops</h4>

        <div class="login-inputs">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter Name" @error("name") class="input-error-border"@enderror>
            @error('name')<p class="input-error">{{ $message }}</p>@enderror
        </div>

        <div class="login-inputs">
            <label for="phone">Phone Number</label>
            <input type="text" name="phone" placeholder="Enter Phone Number" @error("phone") class="input-error-border"@enderror>
            @error('phone')<p class="input-error">{{ $message }}</p>@enderror
        </div>

        <div class="login-inputs">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter Email" @error("email") class="input-error-border"@enderror>
            @error('email')<p class="input-error">{{ $message }}</p>@enderror
        </div>

        <div class="login-inputs">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter Password" @error("password") class="input-error-border"@enderror>
            @error('password')<p class="input-error">{{ $message }}</p>@enderror
        </div>

        <input type="submit" value="Sign in  Chops & Hops" class="login-submit">
        <a href="{{ route('login') }}" class="login-next">Create a Nnew Accout ?</a>

    </form>
</div>
@include('sections.footer')
@endsection