@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are Admin.

                    <div class="table-responsive">
                      <table class="table">
                          <caption>List of users</caption>
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name</th>
                              <th scope="col">Email</th>
                              <th scope="col">Type</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php $i = 1; @endphp
                            @foreach($users as $user)
                            <tr>
                              <th scope="row">{{ $i }}</th>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td>@php echo ($user->is_admin == 1) ? "Admin" : "Non Admin"; @endphp</td>
                              <td>&nbsp;</td>
                            </tr>
                            @php $i++; @endphp
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection