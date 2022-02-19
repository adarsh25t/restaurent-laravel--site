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
                            <form action="{{ route('uploadEditFood',$Food->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h4>Edit Food Details</h4>
                                <div class="login-inputs">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" value="{{ $Food->Title }}" placeholder="Enter Name">
                                </div>
                        
                                <div class="login-inputs">
                                    <label for="phone">Price</label>
                                    <input type="text" name="price" placeholder="Enter Phone Number" value="{{ $Food->price }}">
                                   
                                </div>
                        
                                <div class="login-inputs">
                                    <label for="description">Description</label>
                                    <input type="text" name="description" placeholder="Enter Description" value="{{ $Food->description }}">
                                </div>
                                <div class="login-inputs">
                                    <label for="description">Category</label>
                                    <select name="category" id="" >
                                        <option value="{{ $Food->category }}">{{ $Food->category }}</option>
                                        <option value="Fried Rice">Fried Rice</option>
                                        <option value="Noodles">Noodles</option>
                                        <option value="Chinese Non Veg">Chinese Non Veg</option>
                                        <option value="Chinese Veg">Chinese Veg</option>
                                        <option value="Indian Non Veg">Indian Non Veg</option>
                                        <option value="Tandoori Item">Tandoori Item</option>
                                        <option value="Arabic Grill">Arabic Grill</option>
                                        <option value="Bread">Bread</option>
                                        <option value="Shawarma">Shawarma</option>
                                        <option value="Biriyani">Biriyani</option>
                                        <option value="Juices">Juices</option>
                                        <option value="Shakes">Shakes</option>
                                        <option value="Ice Cream Shakes">Ice Cream Shakes</option>
                                        <option value="Falooda">Falooda</option>
                                    </select>
                                </div>
                        
                                <div class="login-inputs">
                                    <img src="{{ asset('foodImage/'.$Food->image_path) }}" alt="">
                                </div>

                                <div class="login-inputs">
                                    <label for="password">Add new Image</label>
                                    <input type="file" name="image">
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