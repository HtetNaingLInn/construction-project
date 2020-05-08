@extends('admin.layouts.master')

@section('title','Blog')

@section('content')
    
<div class="container-fluid col-md-12 ">

    @if (session('status'))
                    
    <p class="alert alert-success">{{session('status')}}</p>
        @endif

    <div class="container-fluid">
        <div class="row">
             <div class="col-md-12 mb-3">
             <div class="row">
                 <div class="col-md-6">
                    <a href="{{url('admin/blog/create')}}" target="_blink" ><button type="submit" class="btn btn-primary">
                        <div class="fas fa-plus-circle"></div> &nbsp;  Create New Blog
                        </button></a>
                 </div>
                 <div class="col-md-6">
                    <div class="col-md-12">
                        <form>
                            <div class="input-group mb-3">
                                <input type="text" name="search" class="form-control" placeholder="Search By Blog Title">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" id="button-addon2">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
             </div>
            </div>
           
         
        </div>
     </div>


   


   
    <div class="card mb-3">
        @forelse ($blogs as $blog)
        <div class="card-header">
            {{$blog->title}}
        </div>
        <div class="card-body">
          
                
           
            <div class="row">
                <div class="col-md-4">
                    @if (count(unserialize($blog->image)))
                    <img src="{{asset('/blog/'.unserialize($blog->image)[0]) }}" alt="image" class="img-responsive w-50 pt-1">

                    @else
                    <img src="{{asset('/blog/'.'default.jpg') }}" alt="image" class="img-responsive w-50 pt-1">
                    @endif
                    
                    </div>
                    <div class="col-md-8">
                     {{Str::limit($blog->content,'100')}}
                    </div>
               </div>
             
               <div class="card-footer">
               <p class="text-info">This Blog is written by {{$blog->user->name}} at {{$blog->created_at->diffForhumans()}}</p>
                <div class="float-right">
                <a href="{{action('admin\BlogController@show',$blog->id)}}" class="btn btn-outline-info btn-sm mr-1"> <div class="fas fa-eye"></div> </a>
                <a href="{{action('admin\BlogController@edit',$blog->id)}}" class="btn btn-outline-success btn-sm mr-1"> <div class="fas fa-edit"></div> </a>
                <a href="{{action('admin\BlogController@destroy',$blog->id)}}" class="btn btn-outline-danger btn-sm  mr-1"> <div class="fas fa-trash"></div> </a>
                </div>
             </div>
        </div>
        @empty
        <div class="col-md-12">
            <h3 class="text-center text-danger">There is no Blog</h3>
        </div>
        @endforelse
        <div class="col-md-12 pagination justify-content-center">
            {{$blogs->links()}}
        </div>
    </div>
    
</div>

@endsection