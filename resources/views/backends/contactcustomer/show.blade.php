@extends('layouts.app')

@section('content')

<div class="container p-5 bg-dark">
    <h2 class="text-center"><i class="fas fa-users"></i> Contact Customer Lists</h2>
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
      <th scope="col">Email Address</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Message</th>
      <th scope="col">Suggestion</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @php $no=1; @endphp
      @foreach($contactcustomers as $contactcustomer)
    <tr>
      <th scope="row">{{ $no }}</th>
      <td>{{ $contactcustomer->name }}</td>
      <td>{{ $contactcustomer->email }}</td>
      <td>{{ $contactcustomer->phone }}</td>
      <td>{{ $contactcustomer->message }}</td>
      <td>{{ $contactcustomer->suggestion }}</td>
      <td>
          <a href="{{ route('contactcustomer.edit',$contactcustomer->id) }}" class="btn btn-success"><i class="fas fa-edit"></i> </a>
          <a href="{{ route('contactcustomer.delete',$contactcustomer->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i> </a>
        </td>
    </tr>
    @php $no++; @endphp
    @endforeach
  </tbody>
</table>
</div>

@endsection