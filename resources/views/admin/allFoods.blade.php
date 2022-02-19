<div class="container-scroller">
    @include('sections.admin-sidebar')


    <div class="container-fluid page-body-wrapper">
        @include('sections.admin-navbar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row ">
            <div class="col-12 grid-margin">
                <div class="card">
                <div class="card-body">
                    <div class="card-body-item">
                        <h4 class="card-title">Food  Details</h4>
                        <h4 class="my-auto"><a href=" {{ route('AddFood') }}">Add New Food</a></h4>
                    </div>
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Desctiption</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($foods as $food)
                                <tr>
                                    <td>
                                        <img src="{{ asset('foodImage/'.$food->image_path) }}" alt="">
                                    </td>
                                    <td>
                                        <span>{{$food->Title}}</span>
                                    </td>
                                    <td>{{ $food->price }}</td>
                                    <td>{{ $food->category }}</td>
                                    <td class="food-description"> <p >{{ $food->description }}</p> </td>
                                    <td>
                                        <a href="{{ route('editFood',$food->id) }}" class="badge badge-outline-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('deleteFood',$food->id) }}" class="badge badge-outline-danger">Delete</a>
                                    </td>
                                </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
            </div>
      </div>
    </div>
</div>
</div>

