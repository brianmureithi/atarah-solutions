@extends('layouts.app')
@section('content')
@include('home.header')
<div id="carouselexample" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="carouselexample" data-slide-to="0" class="active"></li>
                <li data-target="carouselexample" data-slide-to="1" ></li>
               
                </ol>

                <div class="carousel-inner">
                    <!--<div class="carousel-item active">
                    <div class="banner" style="background-image:url(images/img-3.jpg);">
                    </div>
            

                    <div class="carousel-caption">
                    <h1 class=" font-weight-bold text-info">Welcome to Atarah solutions</h1>
                    <h4>The Atarah Solutions is a Business Growth Agency</h4>
                    </div>
                </div>-->

                <div class="carousel-item active">
                <div class="banner" style="background-image:url(images/img-15.jpg);;display:flex;align-items:center;flex-direction:row;justify-items:center">
                </div>
                <div class="carousel-caption">
                <h1 class="font-weight-bold  slider-btn"  style="color:#e9b000; border:1px solid #c0c0c0;padding:10px;background:#ffffff;width:800px; border-radius:5px;">Welcome to Atarah solutions</h1>
                <h4>The Atarah Solutions is a Business Growth Agency</h4>
                </div>
                </div>

                <div class="carousel-item">
                <div class="banner" style="background-image: url(images/img-3.jpg);">
                </div>
                <div class="carousel-caption">
                <h1 class="font-weight-bold " style="color:#e9b000"> Expertise</h1>
                <h4>We have experts from different backgrounds to help you take your business to the next level</h4>
                </div>

                </div>

</div>
<a class="carousel-control-prev" href="#carouselexample" role="button"
data-slide="prev"> 
<span class="carousel-control-prev-icon" aria-hidden="true"> </span>
<span class="sr-only">Previous</span>
</a>

<a class="carousel-control-next" href="#carouselexample" role="button"
data-slide="next"> 
<span class="carousel-control-next-icon" aria-hidden="true"> </span>
<span class="sr-only">Next</span>
</a>

</div>
<div class="container">
    <div style="margin-top:80px"> 
    <h5 class="text-center "  style="color:#e9b000; font-weight:500"> 
GET IT RIGHT WITH ATARAH SOLUTIONS</h5>
<h2 class="text-center font-talic mt-4">What to expect</h2>
<p class="text-center mt-5" style="color:#7a7a7a;font-size:20px">This is a webinar series that aims at equipping employers and employees with information that help them in running their day to day lives. We demystify issues faced at all stages of entrepreneurship and employment as well
    as equip individuals with tools that better their lives.</p>
</div>

</div>
        <div class="container-fluid mt-5 pb-5" style="\padding-top:13px">
        <h1 class="text-center" style="color:#e9b000;padding:20px 0;font-weight:400;">Our Services</h1>
        <div class="row">
                <div class="col-md-4 col-sm-12 pulse">
                    <img src="images/img-5.jpg" alt="training image" width="100%"/>
                    <h2 class="mt-3" style="color:#e24e42">Training & Team Building</h2>
                    <hr>
                    <p>We offer Training Programmes that are custom made for your organization and Individuals. Companies that invest in trainings have higher productivity than 
                        those that don’t. We offer both online and physical trainings. We offer training on... </p>
                        <a href="#" class="btn  btn-dark btn-md" style="background:#e9b000;border:none;" data-target="#readmoretraining" data-toggle="modal">Read More</a>
                      
                </div>

                <div class="col-md-4 col-sm-12 pulse">
                    <img src="images/img-6.jpg" class="hrconsulting"  height="280px"alt="training image" width="100%"/>
                    <h2 class="mt-3" style="color:#e24e42">HR Consulting</h2>
                    <hr>
                    <p>We offer Specialist advice and services to help businesses maximise the efficiency of their HR operations and implement appropriate policies and procedures i
                        the best way possible. We work with you to define the following: </p>
                        <a href="#" style="background:#e9b000;border:none;" class="btn btn-dark btn-md" data-target="#hrconsulting" data-toggle="modal">Read More</a>
                </div>


                <div class="col-md-4 col-sm-12 pulse">
                    <img src="images/img-7.jpg" alt="training image" width="100%"/>
                    <h2 class="mt-3" style="color:#e24e42">HR Outsourcing</h2>
                    <hr>
                    <p>We work with organizations to manage their HR function and make hiring easier. This is done by either outsourcing the HR function in its entirety or some functions of it. The Services you can outsource include:</p>
                    <a href="#" class="btn btn-dark btn-md" style="background:#e9b000;border:none;" data-target="#hroutsourcing" data-toggle="modal">Read More</a>
                </div>
            </div>
        </div>
<!---background-image:url(images/img-15.jpg);background-size:cover;
        background-attachment:fixed;height:400px;opacity:1"--->
        <div class="container-fluid whyus" style="background:rgba(233,176,0,0.7); height:400px;">
        <div class="row">
        <div class="col-md-6 bordered" style="padding-top:20px;">
    <h2 class=" font-weight-bold"style="opacity:1;color:#e24e42">
    Why work with us?
    </h2>
    <p class=" mt-4" style="font-size:17px;color:#1c1212">
    <i class="fas fa-check-double">  </i> Unique Solutions that reflect the circumstances and aspirations of the client.
</p>

<p class="" style="font-size:17px;color:#1c1212"><i  class="fas fa-check-double"> </i> Speed - we have a dedicated team is not distracted by other tasks within the organization.</p>

<p class="" style="font-size:17px;color:#1c1212"><i  class="fas fa-check-double"> </i> Knowledge of best practice and effective solutions from specific sectors or industries.</p>
<p class="" style="font-size:17px;color:#1c1212"><i  class="fas fa-check-double"> </i>  Exposure to expertise derived from other trade industries and sectors around the world.</p>

</div>
<div class="col-md-6  nextwhy"  style="padding-top:20px;margin-top:55px">
<p class="" style="font-size:17px;color:#1c1212;"><i  class="fas fa-check-double"> </i> Provision of specific technical skills that are non-existence or in short supply 
in the organization and often the transfer of such skills to in-house.</p>
<p class="" style="font-size:17px;color:#1c1212;"><i  class="fas fa-check-double"> </i> Hange Management skills – we are independent and objective.</p>

</div>
</div>
  </div>
  @include('home.footer')
  
  

  <!----include popups modal------>
  @include('home.popups')


@endsection