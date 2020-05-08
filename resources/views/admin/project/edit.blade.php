@extends('admin.layouts.master')

@section('title',$project->title)

@section('content')

<div class="container col-md-10 offset-1">
    
    <a href="{{url('admin/project')}}"><button class="btn btn-primary mb-3"> <div class="fas fa-arrow-circle-left"></div> Back</button></a>
    <div class="card">
       
        <div class="card-header">
    <h3 class="text-info">Edit Project</h3>
    
        </div>
        <div class="card-body">
           
          
            <form method="POST" enctype="multipart/form-data">
                @include('admin.message.index')
                @csrf
                <div class="form-group">
                    <label for="name">Project Title</label>
                <input type="text" class="form-control"  name="title" value="{{$project->title}}" >
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                <textarea class="form-control"  rows="3" name="description">{{$project->description}}</textarea>
                </div>
                <div class="form-group">
                    <label>Select Category</label>
                    <select class="form-control" name="cat_id">
                    <option value="" class="text-danger">Choose Category</option>
                      @foreach ($cats as $cat)
                          
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                    </select>
                  </div>

                



                <div class="form-group">
                    <label class="text-bold" >Upload Yours Project Photos</label>
                <input type="file" class="form-control" name="imgs[]" multiple value="{{$project->imgs}}">
                  </div>
            
                <button type="submit" class="btn btn-outline-info float-md-right">Edit</button>
            </form>

        </div>

</div>  
 </div>






</div>  

    
@endsection