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
            <form method="post">
               <div class="row">
                  <div class="col-md-6">
                    <h2>CONTACT US</h2>
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Yangon , Myanmar</span>
                    <br><br>
                    <i class="fas fa-phone-volume"></i>
                    <span>+959777777777</span>
                    <br><br>
                    <i class="fas fa-envelope-open"></i>
                    <span>sapphireshopping@gmail.com</span>
                   </div>
                   <div class="col-md-6">
                   <h2 class="mb-3">Our Location</h2>
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43201.456122300755!2d96.13962563938732!3d16.85087932167004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c194dcb74e99ed%3A0x85ec26a3c168a88d!2sKamaryut!5e0!3m2!1sen!2ssg!4v1635729657446!5m2!1sen!2ssg" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>  
                   </div> 
               </div>
            </form>
</div>

    <!--End Contact Form!-->

    </div>
</div>
@endsection

