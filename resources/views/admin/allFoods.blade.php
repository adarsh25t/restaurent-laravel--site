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
                    <h4 class="card-title">Food Details</h4>
                    <h4 class="my-auto"><a href=" {{ route('AddFood') }}">Add Food</a></h4>
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Desctiption</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{-- @foreach ($users as $user)
                            @if ($user->user_type === "0")
                                <tr>
                                    <td>
                                        <span>{{$user->name}}</span>
                                    </td>
                                        <td>{{ $user->email }}</td>
                                    <td>
                                   <a href="{{ route('deleteUser',$user->id) }}" class="badge badge-outline-danger">Delete</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach --}}
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

