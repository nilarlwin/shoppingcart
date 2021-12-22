@extends('layouts.app')

@section('content')
<div class="container bg-dark p-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h2 class="text-center"><i class="fab fa-product-hunt"></i> Product Lists</h2>
  <table class="table mt-3 border" id="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Item Price</th>
      <th scope="col">Item Code</th>
    </tr>
  </thead>
  <tbody>
      @php $no=1; @endphp
      @foreach($products as $product)
      <th scope="row">{{ $no }}</th>
      <td>{{ $product->title }}</td>
      <td>{{ $product->price }}</td>
      <td>{{ $product->item_type }}</td>
      <td>{{ $product->item_code }}</td>
    </tr>
    @php $no++; @endphp
    @endforeach
  </tbody>
</table>
        </div>
    </div>
</div>
@endsection
