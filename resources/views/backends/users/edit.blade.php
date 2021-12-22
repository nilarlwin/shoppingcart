@extends('layouts.app')

@section('content')
<div class="container p-5 bg-dark">
        <h3 class="text-center"><i class="fas fa-user-cog"></i> Edit User</h3>
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
            
            <div class="text-center">
            <img src='{{ asset("assets/profile-image/$user->image") }}' class="img-circle mt-3" width=150 height=150>
            </div>
            <form method="post" action="{{ route('user.update',$user->id) }}" enctype="multipart/form-data">
                    {{csrf_field()}}
               <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $user->name }}" />
                        </div>
                        <div class="form-group">
                        <label for="email">Email Address</label>
                            <input type="email" name="email" class="form-control" value="{{ $user->email }}" />
                        </div>
                        <div class="form-group">
                        <label for="passsword">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="************" />
                        </div>
                        <div class="form-group">
                        <label for="image">Upload Profile Image</label>
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                           <label class="custom-file-label" for="customFile">Upload Profile Image</label>
                         </div>
                         </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary"><i class="fas fa-check"></i> Update</button>
                        </div>
                    </div>
               </div>
          </form>
      </div>
@endsection
