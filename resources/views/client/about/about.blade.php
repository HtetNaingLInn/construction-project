@extends('client.layouts.master')

@section('title','About')


@section('content')
    
<section class="breadcrumb blog_bg">
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <div class="breadcrumb_iner">
                <div class="breadcrumb_iner_item">
                   <h2>about us</h2>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!--::breadcrumb part start::-->

 <!--::team part end::-->
 <section class="about_part section-padding">
    <div class="container">
       <div class="row">
          <div class="section_tittle">
             <h2><span>about</span> us</h2>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-6 col-md-6">
             <div class="about_img">
             <img src="{{asset('client/img/about.png')}}" alt="">
             </div>
          </div>
          <div class="offset-lg-1 col-lg-5 col-sm-8 col-md-6">
             <div class="about_text">
                <h2>Hello City We are
                   leader in <span>proparties.</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed ips
                   eiusmod tempor incididunt ut labore et dolore magna aliqua isuspendisse
                   ultrices gravida. Risus. </p>
                <a href="#" class="btn_1">learn More</a>
                <div class="about_part_counter">
                   <div class="single_counter">
                      <span class="counter">100</span>
                      <p>project</p>
                   </div>
                   <div class="single_counter">
                      <span class="counter">300</span>
                      <p>clients</p>
                   </div>
                   <div class="single_counter">
                      <span class="counter">150</span>
                      <p>member</p>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection