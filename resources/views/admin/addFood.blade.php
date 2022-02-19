@extends('layouts.admin')

@section('addFood')

<div class="container-scroller">
    @include('sections.admin-sidebar')  
    
    
    <div class="container-fluid page-body-wrapper">
        @include('sections.admin-navbar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row ">
                <div class="addFood-form">
                            <form action="{{ route('AddFood') }}" method="POST" >
                                @csrf
                                <h4>Add New Food</h4>
                                <div class="login-inputs">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" placeholder="Enter Name" @error("name") class="input-error-border"@enderror>
                                    @error('name')<p class="input-error">{{ $message }}</p>@enderror
                                </div>
                        
                                <div class="login-inputs">
                                    <label for="phone">Price</label>
                                    <input type="text" name="phone" placeholder="Enter Phone Number" @error("phone") class="input-error-border"@enderror>
                                    @error('phone')<p class="input-error">{{ $message }}</p>@enderror
                                </div>
                        
                                <div class="login-inputs">
                                    <label for="description">Description</label>
                                    <input type="text" name="description" placeholder="Enter Email" @error("email") class="input-error-border"@enderror>
                                    @error('email')<p class="input-error">{{ $message }}</p>@enderror
                                </div>
                        
                                <div class="login-inputs">
                                    <label for="password">Image</label>
                                    <input type="file" name="image" >
                                    @error('password')<p class="input-error">{{ $message }}</p>@enderror
                                </div>
                        
                                <input type="submit" value="Add New Food" class="login-submit">
        
                            </form>
                </div>
            </div>
      </div>
    </div>
</div>
</div>

@endsection