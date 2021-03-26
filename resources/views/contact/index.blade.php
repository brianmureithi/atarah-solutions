@extends('layouts.app')
@section('content')
@include('home.header')
@include('sweetalert::alert')
<div class="container contact-form">
 
        <form action="/contact-store" method="post" class="formz" autocomplete="off" autocomplete="off" style="margin-top:65px;border:1px solid #c0c0c0; border-radius:0;padding:25px;">

   @csrf
   <h2 class="text-center" style="color:#e9b000">Contact us</h2>
   <div class="row">
        <div class="col-md-6">
            <div class="forminputs">
       <label for="name">Name:</label>
       <input type="text" style="border-radius:0px;height:60px"  placeholder="Enter your name" height:60px" class="form-control" name="name" value=""/>  
       </div>
       <div class="forminputs">
       <label for="name">Email:</label>
       <input type="text" class="form-control"  style="border-radius:0px; height:60px"name="email" placeholder="Enter your email"/>
       
       </div>
       <div class="forminputs">
      <label for="name">Phone:</label>
       <input type="text" class="form-control" name="phone" style="border-radius:0px; height:60px" placeholder="Enter your phone number"/>
       </div>
       <div class="forminputs">
      <label for="name">Subject:</label>
       <input type="text" class="form-control" name="subject" style="border-radius:0px; height:60px" placeholder="Enter the subject"/>
       </div>
      
    </div>
    <div clas="col-md-6">
    
        <div class="forminputs">
        <label for="name">Message:</label>
        <textarea class="form-control txt" name="message"placeholder="Enter your message" style="border-radius:0;width:500px;" rows="10"></textarea>
        </div>
        <div class="submitbtn">
            <button type="submit" class="btn btn-block btnsubmit btn-lg btn-dark btn-md" name="submit" style="border-radius:0px;"  value="submit">Submit</button>
        </div>
    </div>

    </div>
    </form>
    
    
</div>





@include('home.footer')


@endsection