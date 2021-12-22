@extends('layout.master')

@section('title','Home')

@section('content')
<div class="container-fluid">
    <div class="col-md-3">
        @include('layout.sidebar')
    </div>
    <div class="col-md-9">
        <h1>Content</h1>
       
        <!--Start Product!-->
        @foreach($products as $product)
         <div class="col-sm-6 col-md-4">
             <div class="thumbnail">
                 <h3 class="text-center">Price {{ $product->price }}</h3>
              <img src='{{ asset("assets/product-image/$product->image") }}' alt="img" style="width:250px;height:200px";>
               <div class="caption">
                <h3 class="text-center">{{ $product->title }}</h3>
                <p>{{ substr($product->description,0,100) }}</p>
                <div class="text-center">
                 <p> 
                     <a href="{{ route('cart.create',$product->id) }}" class="btn btn-info" role="button">Add To Cart</a>
                </p>
                </div>
                </div>
                </div>
             </div>
        @endforeach
        {{ $products->links() }}
        <!--End Product!-->
    </div>
</div>
@endsection