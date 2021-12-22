@extends('layout.master')

@section('title','Home')

@section('content')
<div class="container-fluid">
    <div class="col-md-3">
        @include('layout.sidebar')
    </div>
    <div class="col-md-9">
        <h1>Content</h1>
    <!--Start Contact Form!-->
    

                    
<div class="well contact-form">
            <form method="post" action="{{ route('contact.success') }}">
            {{csrf_field()}}
                <h3>Drop Us a Message</h3>
                @if($errors->any())
                @foreach($errors->all() as $err)
                 <div class="alert alert-danger alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  {{ $err }}
                 </div>
               @endforeach
               @endif
               @if(Session::has('status'))
                 <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  {{ Session::get('status') }}
                 </div>
               @endif
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <textarea name="suggestion" class="form-control" placeholder="Your Suggestion *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div> 
                </div>
            </form>
</div>

    <!--End Contact Form!-->

    </div>
</div>
@endsection

