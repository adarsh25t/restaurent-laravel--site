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
                        <h4 class="card-title">Chef  Details</h4>
                        <h4 class="my-auto"><a href=" {{ route('addChef') }}">Add New Chef</a></h4>
                    </div>
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>speciality</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($chefs as $chef)
                                <tr>
                                    <td>
                                        <img src="{{ asset('chef/'.$chef->image_path) }}" alt="">
                                    </td>
                                    <td>
                                        <span>{{$chef->name}}</span>
                                    </td>
                                    <td>{{ $chef->speciality }}</td>
                                    <td>
                                        <a href="{{ route('editChef',$chef->id) }}" class="badge badge-outline-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('deleteChef',$chef->id) }}" class="badge badge-outline-danger">Delete</a>
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

