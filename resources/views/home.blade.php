@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <div class="table-responsive">
                      <table class="table">
                          <caption>List of products</caption>
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name</th>
                              <th scope="col">Description</th>
                              <th scope="col">Image</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php $i = 1; @endphp
                            @foreach($products as $product)
                            <tr>
                              <th scope="row">{{ $i }}</th>
                              <td>{{ $product->name }}</td>
                              <td>{{ $product->description }}</td>
                              <td>{{ $product->image }}</td>
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
