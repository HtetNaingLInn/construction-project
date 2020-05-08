@extends('admin.layouts.master')

@section('title','Project')

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
                    <a href="{{url('admin/project/create')}}" target="_blink" ><button type="submit" class="btn btn-primary">
                        <div class="fas fa-plus-circle"></div> &nbsp;  Create Project
                        </button></a>
                 </div>
                 <div class="col-md-6">

                    <div class="dropdown float-right">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"  >
                         Search By Categories
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a href="{{url('admin/project')}}" ><button class="dropdown dropdown-item">All</button></a>
                            @foreach ($cats as $cat)
                                
                        <a href="{{action('admin\PageController@index',$cat->id)}}" ><button class="dropdown dropdown-item" value="{{$cat->id}}">{{$cat->name}}</button></a>
                
                        @endforeach
                        </div>
                      </div>
                    

                    
                 </div>
             </div>
            </div>
             <div class="col-md-4">
                 <div class="col-md-12">
                     <form>
                         <div class="input-group mb-3">
                             <input type="text" name="search" class="form-control" placeholder="Search By Project Title">
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
<div class="container-fluid">
    <div class="row">
        @foreach ($projects as $cat->project)
            
        
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    {{$cat->project->title}}
                </div>
                <div class="card-body">
                   <div class="row">
                    <div class="col-md-4">
                        @if (count(unserialize($cat->project->imgs)))
                        <img src="{{asset('/upload/'.unserialize($cat->project->imgs)[0]) }}" alt="image" class="img-responsive w-100 pt-1">

                        @else
                        <img src="{{asset('/upload/'.'default.jpg') }}" alt="image" class="img-responsive w-100 pt-1">
                        @endif
                        
                        </div>
                        <div class="col-md-8">
                         {{Str::limit($cat->project->description,'100')}}
                        </div>
                   </div>
                </div>
                <div class="card-footer">
                   <div class="float-right">
                   <a href="{{action('admin\ProjectController@show',$cat->project->id)}}" class="btn btn-outline-info btn-sm mr-1"> <div class="fas fa-eye"></div> </a>
                   <a href="{{action('admin\ProjectController@edit',$cat->project->id)}}" class="btn btn-outline-success btn-sm mr-1"> <div class="fas fa-edit"></div> </a>
                   <a href="{{action('admin\ProjectController@destroy',$cat->project->id)}}" class="btn btn-outline-danger btn-sm  mr-1"> <div class="fas fa-trash"></div> </a>
                   </div>
                </div>
            </div>
        </div>

        @endforeach
<div class="container-fluid">
    
   
</div>
    </div>
</div>

</div>
@endsection