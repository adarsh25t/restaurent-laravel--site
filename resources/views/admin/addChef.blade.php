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
                            <form action="{{ route('addChef') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h4>Add New Chef</h4>
                                <div class="login-inputs">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" placeholder="Enter Name">
                                </div>
                        
                                <div class="login-inputs">
                                    <label for="speciality">Speciality</label>
                                    <input type="text" name="speciality" placeholder="Enter Speciality" >
                                </div>
                        
                                <div class="login-inputs">
                                    <label for="password">Image</label>
                                    <input type="file" name="image" >
                                </div>
                        
                                <input type="submit" value="Add New Chef" class="login-submit">
                            </form>
                </div>
            </div>
      </div>
    </div>
</div>
</div>

@endsection