@extends('layouts.app')

@section('content')

<div class="container p-5 bg-dark">
    <h2 class="text-center"><i class="fas fa-users"></i> Customer Lists</h2>
    @if(Session::has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table border mt-3" id="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customername</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @php $no=1; @endphp
      @foreach($customers as $customer)
    <tr>
      <th scope="row">{{ $no }}</th>
      <td>{{ $customer->name }}</td>
      <td>{{ $customer->phone }}</td>
      <td>{{ $customer->address }}</td>
      <td>
          <a href="{{ route('order.show',$customer->id) }}" class="btn btn-success"><i class="fas fa-eye"></i> </a>
          <a href="{{ route('order.delete',$customer->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i> </a>
        </td>
    </tr>
    @php $no++; @endphp
    @endforeach
  </tbody>
</table>
</div>

@endsection