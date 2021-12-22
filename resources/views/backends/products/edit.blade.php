@extends('layouts.app')

@section('content')
<div class="container p-5 bg-dark">
        <h3 class="text-center"><i class="fas fa-plus-square"></i> Edit Product</h3>
        @if($errors->any())
        @foreach($errors->all() as $err)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ $err }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
       @endforeach
       @endif
        
       @if(Session::has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

            <form method="post" action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data">
                    {{csrf_field()}}
               <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $product->title }}" />
                        </div>
                        <div class="form-group">
                        <label for="price">Price</label>
                            <input type="text" name="price" class="form-control" value="{{ $product->price }}" />
                        </div>
                        <div class="form-group">
                        <label for="image">Upload Image</label>
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                           <label class="custom-file-label" for="customFile">Upload New Image</label>
                         </div>
                         </div>
                        <div class="form-group">
                        <label for="type">Item Type</label>
                         <select class="form-control" name="type">
                            <option>Boy-Tshirt</option>
                            <option>Boy-Short-Shirt</option>
                            <option>Boy-Long-Shirt</option>
                            <option>Girl-Tshirt</option>
                            <option>Girl-Long-Shirt</option>
                            <option>Girl-Dress</option>
                            <option selected></option>
                          </select>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group">
                          <label for="code">Item Code</label>
                            <input type="text" name="code" class="form-control" value="{{ $product->item_code }}" />
                         </div>
                        <div class="form-group">
                        <label for="description">Description</label>
                            <textarea name="description" class="form-control" style="width: 100%; height: 150px;">{{ $product->description }}</textarea>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary"><i class="fas fa-check"></i> Update</button>
                        </div>
                    </div> 
               </div>
          </form>
      </div>
@endsection
