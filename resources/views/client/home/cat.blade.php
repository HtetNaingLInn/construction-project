@extends('client.layouts.master')

@section('title','Home')

@section('content')
    

<section class="banner_part">
   <div class="container">
      <div class="row">
         <div class="col-lg-5 offset-lg-1 col-sm-8 offset-sm-2">
            <div class="banner_text aling-items-center">
               <div class="banner_text_iner">
                  <h5>Dream</h5>
                  <h2>Proparties <br>
                     Now In City</h2>
                  <p>Lorem ipsum dolor sit consectetur adipiscing elit sed do
                     eiusmod tempor incididunt ut labore et dolore magna. </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--::banner part end::-->

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
<!--::team part end::-->







<!--::project part start::-->
<section class="portfolio_area pt_30 padding_bottom">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="section_tittle">
               <h2><span>our</span> project</h2>
            </div>
           <div class="col-md-12 text-center">
              <ul>
              <a href="{{url('/')}}"> <li class="btn_1">All</li></a>
             @foreach ($cats as $cat)
              <a href="{{action('client\PageController@category',$cat->id)}}"> <li class="btn_1 mx-1 mt-2" value="{{$cat->id}}">{{$cat->name}}</li></a>
             @endforeach
              </ul>
           </div>
            <div class="portfolio_item tab-content" id="myTabContent">
               <div class="row align-items-center justify-content-between tab-pane fade show active"
                  id="Architecture" role="tabpanel" aria-labelledby="Architecture-tab">


                  @foreach ($projects as $cat->project)
                      
                 
                  <div class="col-lg-4 col-sm-12 col-md-4  my-4">
                     <div class="portfolio_box">
                        <a href="#" class="img-gal">
                           <div class="single_portfolio">
                              @if (count(unserialize( $cat->project->imgs)))
                           <img class="img-fluid w-100" src="{{asset('/upload/'.unserialize( $cat->project->imgs)[0]) }}" alt="">

                           @else
                           <img class="img-fluid w-100" src="{{asset('/upload/'.'default.jpg')}}" alt="">
                           @endif
                        </div>
                        </a>
                        <div class="short_info">
                        <p>{{ $cat->project->title}}</p>
                           <h4>{{Str::limit( $cat->project->description,'10')}} <br><a href="#">more <br>
                                </a></h4>
                        </div>
                     </div>
                  </div>
                  
                  @endforeach
               </div>
              
            </div>
         </div>
      </div>
   </div>
</section>
<!--::project part end::-->













<!--::service part end::-->
<section class="service_part">
   <div class="container">
      <div class="row justify-content-between align-items-center">
         <div class="col-lg-7 col-xl-6">
            <div class="section_tittle">
               <h2>our <span>services</span></h2>
            </div>
            <div class="service_part_iner">
               <div class="row">
                  <div class="col-lg-6 col-sm-6">
                     <div class="single_service_text ">
                     <img src="{{asset('client/img/icon/service_1.svg')}}" alt="">
                        <h4>house Planning</h4>
                        <p>Lorem ipsum dolor sit amet consectetur elit seiusmod tempor incididunt </p>
                     </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                     <div class="single_service_text">
                     <img src="{{asset('client/img/icon/service_2.svg')}}" alt="">
                        <h4>house Build</h4>
                        <p>Lorem ipsum dolor sit amet consectetur elit seiusmod tempor incididunt</p>
                     </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                     <div class="single_service_text">
                     <img src="{{asset('client/img/icon/service_3.svg')}}" alt="">
                        <h4>Design &
                           Build</h4>
                        <p>Lorem ipsum dolor sit amet consectetur elit seiusmod tempor incididunt</p>
                     </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                     <div class="single_service_text">
                     <img src="{{asset('client/img/icon/service_4.svg')}}" alt="">
                        <h4>Home
                           Rebuild</h4>
                        <p>Lorem ipsum dolor sit amet consectetur elit seiusmod tempor incididunt</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-10">
            <div class="service_text">
               <h2>Hello City We are
                  leader in <span> Services.</span></h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit,
                  sed do eiusmodtemporincididunt u labore et dolore magna aliqua.
                  Quis ipsum pendisse ultrices gravida. Risus commodo viverra
                  maecenas accumsan lacus vel </p>
               <a href="service.html" class="btn_1">learn more</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--::service part end::-->



<!--::blog_part start::-->

<div class="blog_part padding_bottom my-5">
   <div class="container">
      <div class="row">
         <div class="col-md-7 col-lg-5">
            <div class="blog_part_tittle">
               <h2>our <span>blog</span> </h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-7">
            <div class="single_blog">
               <div class="appartment_img">
                  <img src="img/blog_1.png" alt="">
               </div>
               <div class="single_appartment_content">
                  <p><a href="#">Apartment</a> / March 20, 2019</p>
                  <a href="blog.html">
                     <h4>Doee lights without darkness that said
                        good deep years very.</h4>
                  </a>
                  <ul class="list-unstyled">
                     <li><a href=""> <span class="ti-comment"></span> </a> 2 comment</li>
                     <li><a href=""> <span class="ti-heart"></span> </a> 0 like</li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-lg-5">
            <div class="right_single_blog">
               <div class="single_blog">
                  <div class="media">
                     <div class="media-body align-self-center">
                        <p><a href="#">Apartment</a> / March 20, 2019</p>
                        <a href="blog.html">
                           <h5 class="mt-0"> lights without darkness that said.</h5>
                        </a>
                        <ul class="list-unstyled">
                           <li><a href=""> <span class="ti-time"></span> </a> Mar 12</li>
                           <li><a href=""> <span class="ti-heart"></span> </a> 0 like</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="single_blog">
                  <div class="media">
                     <div class="media-body align-self-center">
                        <p><a href="#">Apartment</a> / March 20, 2019</p>
                        <a href="blog.html">
                           <h5 class="mt-0"> lights without darkness that said.</h5>
                        </a>
                        <ul class="list-unstyled">
                           <li><a href=""> <span class="ti-time"></span> </a> Mar 12</li>
                           <li><a href=""> <span class="ti-heart"></span> </a> 0 like</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


@endsection