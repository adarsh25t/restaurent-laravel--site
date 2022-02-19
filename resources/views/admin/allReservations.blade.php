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
                    </div>
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>User Name</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>guest</th>
                            <th>message</th>
                            <th>date</th>
                            <th>time</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($reservations as $reservation)
                                <tr>
                                    <td>{{ $reservation->user->name }}</td>
                                    <td>{{ $reservation->name }}</td>
                                    <td>{{ $reservation->email }}</td>
                                    <td>{{ $reservation->phone }}</td>
                                    <td>{{ $reservation->guest }}</td>
                                    <td >{{ $reservation->message }}</td>
                                    <td>{{ $reservation->date }}</td>
                                    <td>{{ $reservation->time }}</td>
                                    <td>
                                        <a href="{{ route('editFood',$reservation->id) }}" class="badge badge-outline-warning">Approve</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('deleteFood',$reservation->id) }}" class="badge badge-outline-danger">Delete</a>
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

