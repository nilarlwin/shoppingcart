@extends('layout.master')

@section('title','Home')

@section('content')
<div class="container-fluid">
    <div class="col-md-3">
        @include('layout.sidebar')
    </div>
    <div class="col-md-9">
        <h1>Content</h1>
        <table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%">Action</th>
						</tr>
					</thead>
					<tbody>
					@php $total = 0; @endphp
                    @foreach($carts as $key=>$cart)
					    @php
					    $total += $cart['price'] * $cart['qty'];
						@endphp
						<tr>
							<td data-th="Product">
								<div class="row">
								<div class="col-sm-2 hidden-xs"><img src='{{ asset("assets/product-image/$cart[image]") }}' alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
									<h4 class="nomargin">{{ $cart['title'] }}</h4>
									<p>{{ $cart['description'] }}</p>
									</div>
								</div>
							</td>
							<td data-th="Price">{{ $cart['price'] }}</td>
							<td data-th="Quantity">
							<p>{{ $cart['qty'] }}</p>
							</td>
							<td data-th="Subtotal" class="text-center">{{ $cart['qty'] * $cart['price'] }}</td>
							<td class="actions" data-th="">
							    <a href="{{ route('cart.add',$key) }}">
									<i class="fas fa-plus-circle"></i>
                                </a>
								<a href="{{ route('cart.subtract',$key) }}">
									<i class="fas fa-minus-circle"></i>
                                </a>
								<a class="btn btn-danger btn-sm" href="{{ route('cart.delete',$key) }}">
									<i class="fa fa-trash-o"></i>
                                </a>							
							</td>
						</tr>
                    @endforeach
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>Total 1.99</strong></td>
						</tr>
						<tr>
							<td><a href="{{ route('frontends.index') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total {{ $total }} MMK</strong></td>
							
						</tr>
					</tfoot>
				</table>
				<div class="well">
                <h3>Fill Customer's Information</h3>
				@if($errors->any())
                @foreach($errors->all() as $err)
                 <div class="alert alert-danger alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  {{ $err }}
                 </div>
               @endforeach
               @endif
			   <form method="post" action="{{ route('cart.checkout') }}">
			   {{csrf_field()}}
               <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                        <div class="form-group">
                            <textarea name="address" class="form-control" placeholder="Your Address *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="btnSubmit" class="btn btn-success btn-block-sm">Checkout <i class="fa fa-angle-right"></i> </button>
                        </div>
                    </div>
                </div>
            </form>	
        </div>
    </div>
</div>


@endsection