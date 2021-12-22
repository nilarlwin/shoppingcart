@extends('layouts.app')

@section('content')

<div class="container bg-dark p-5">
    <h2 class="text-center"><i class="fas fa-stream"></i> Product Lists</h2>
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
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Item Type</th>
      <th scope="col">Item Code</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @php $no=1; @endphp
      @foreach($products as $product)
    <tr>
      <th scope="row">{{ $no }}</th>
      <td>{{ $product->title }}</td>
      <td>{{ $product->price }}</td>
      <td>{{ $product->item_type }}</td>
      <td>{{ $product->item_code }}</td>
      <td>
          <a href="{{ route('product.edit',$product->id) }}" class="btn btn-success"><i class="fas fa-edit"></i> </a>
          <a href="{{ route('product.delete',$product->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i> </a>
        </td>
    </tr>
    @php $no++; @endphp
    @endforeach
  </tbody>
</table>
</div>

@endsection