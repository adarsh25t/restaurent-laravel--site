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
                    <h4 class="card-title">Users Details</h4>
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
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

