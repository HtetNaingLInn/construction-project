@extends('client.layouts.master')

@section('title','Service')

@section('content')


<section class="breadcrumb blog_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2> services </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--::breadcrumb part start::-->

<!--::service part end::-->
<section class="service_part section-padding">
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
                                <h4>Design&
                                    Build</h4>
                                <p>Lorem ipsum dolor sit amet consectetur elit seiusmod tempor incididunt</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_service_text">
                            <img src="{{asset('client/img/icon/service_4.svg')}}" alt="">
                                <h4>Design&
                                    Build</h4>
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
    <div class="container">
        <section class="service_part">
            <div class="section_tittle">
                <h2>Available <span>Services</span></h2>
            </div>
            </section>
        <div class="row">
@foreach ($services as $service)
    

            <div class="col-md-12">
                <div class="card my-4">
                    <div class="card-header">
                        {{$service->title}}
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                @if (count(unserialize($service->image)))
                                <img src="{{asset('/service/'.unserialize($service->image)[0]) }}" alt="image" class="img-responsive w-100 pt-1">
        
                                @else
                                <img src="{{asset('/upload/'.'default.jpg') }}" alt="image" class="img-responsive w-100 pt-1">
                                @endif
                                
                                </div>
                                <div class="col-md-8">
                                    <h5 class="text-danger">${{$service->price}}</h5>
                                 {{Str::limit($service->description,'100')}}
        
                                </div>
                           </div>
                           <div class="footer">
                            <a href="service.html" class="btn_1 float-right">learn more</a>
                           </div>
                    </div>
                </div>

            </div>
            @endforeach
        </div>


    </div>








@endsection