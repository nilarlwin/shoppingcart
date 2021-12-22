@extends('layouts.app')

@section('content')
<div class="container p-5 bg-dark">
        <h3 class="text-center"><i class="fas fa-user-cog"></i> Edit Contact Customer</h3>
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
            
            <form method="post" action="{{ route('contactcustomer.update',$contactcustomer->id) }}" enctype="multipart/form-data">
                    {{csrf_field()}}
               <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $contactcustomer->name }}" />
                        </div>
                        <div class="form-group">
                        <label for="email">Email Address</label>
                            <input type="email" name="email" class="form-control" value="{{ $contactcustomer->email }}" />
                        </div>
                        <div class="form-group">
                        <label for="email">Message</label>
                            <textarea name="message" class="form-control" style="width: 100%; height: 150px;">{{ $contactcustomer->message }}</textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" value="{{ $contactcustomer->phone }}" />
                        </div>
                        <div class="form-group">
                        <label for="email">Suggestion</label>
                        <textarea name="suggestion" class="form-control" style="width: 100%; height: 150px;">{{ $contactcustomer->suggestion }}</textarea>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary"><i class="fas fa-check"></i> Update</button>
                        </div>
                    </div>
               </div>
          </form>
      </div>
@endsection
