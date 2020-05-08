@extends('admin.layouts.master')

@section('title','Service')

@section('content')
    
<div class="container-fluid">

    @if (session('status'))
        <p class="alert alert-success">{{session('status')}}</p>
          @endif
    <div class="container-fluid">
        <div class="row">
             <div class="col-md-8 mb-3">
             <div class="row">
                 <div class="col-md-6">
                    <a href="{{url('admin/service/create')}}" target="_blink" ><button type="submit" class="btn btn-primary">
                        <div class="fas fa-plus-circle"></div> &nbsp;  Create Service
                        </button></a>
                 </div>
                
             </div>
            </div>
            
         
        </div>
     </div>
<div class="container-fluid">
    <div class="row">
        @foreach ($services as $service)
            
        
        <div class="col-md-6">
            <div class="card">
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
                </div>
                <div class="card-footer">
                   <div class="float-right">
                   <a href="{{action('admin\ServiceController@show',$service->id)}}" class="btn btn-outline-info btn-sm mr-1"> <div class="fas fa-eye"></div> </a>
                   <a href="{{action('admin\ServiceController@edit',$service->id)}}" class="btn btn-outline-success btn-sm mr-1"> <div class="fas fa-edit"></div> </a>
                   <a href="{{action('admin\ServiceController@destroy',$service->id)}}" class="btn btn-outline-danger btn-sm  mr-1"> <div class="fas fa-trash"></div> </a>
                   </div>
                </div>
            </div>
        </div>

        @endforeach
<div class="container-fluid">
    <div class="col-md-12 pagination justify-content-center">
        {{$services->links()}}
    </div>
   
</div>
    </div>
</div>

</div>
@endsection