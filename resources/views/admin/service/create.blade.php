@extends('admin.layouts.master')

@section('title','Add Service')

@section('content')
<div class="container col-md-10 offset-1">
    
        <a href="{{url('admin/service')}}"><button class="btn btn-primary mb-3"> <div class="fas fa-arrow-circle-left"></div> Back</button></a>
        <div class="card">
           
            <div class="card-header">
        <h3 class="text-info">Create New Service</h3>
        
            </div>
            <div class="card-body">
               
              @if (session('status'))
            <p class="alert alert-success">{{session('status')}}</p>
              @endif
                <form method="POST" enctype="multipart/form-data">
                    @include('admin.message.index')
                    @csrf
                    <div class="form-group">
                        <label for="name">Service Title</label>
                        <input type="text" class="form-control"  name="title" >
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control"  rows="3" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input class="form-control"  rows="3" name="price" placeholder="Example $300">
                    </div>
                    
                    <div class="form-group">
                        <label class="text-bold" >Upload Yours Service Photos</label>
                        <input type="file" class="form-control" name="image[]" multiple>
                      </div>
                
                    <button type="submit" class="btn btn-outline-info float-md-right">Create</button>
                </form>

            </div>
    
    </div>  
     </div>
 





</div>  

@endsection