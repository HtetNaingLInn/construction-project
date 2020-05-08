@extends('admin.layouts.master')

@section('title',$user->name)

@section('content')
    
<div class="container col-md-10 offset-1">
    
    <a href="{{url('admin/user')}}"><button class="btn btn-primary mb-3"> <div class="fas fa-arrow-circle-left"></div> Back</button></a>
    <div class="card">
       
        <div class="card-header">
    <h3 class="text-info">Edit Admin User</h3>
    
        </div>
        <div class="card-body">
           
         
            <form method="POST" enctype="multipart/form-data">
                @include('admin.message.index')
                @csrf
                <div class="form-group">
                    <label for="name">Username</label>
                <input type="text" class="form-control"  name="name"  value="{{$user->name}}">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" value="{{$user->email}}">
                    
                  </div>
                
                
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Select Role</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="role">
                        <option value="#" class="bg-dark disabled">Choice One Role For Admin</option>
                      <option value="Admin">Admin</option>
                      <option value="Content Writer">Content Writer</option>
                      <option value="Guest">Guest</option>
                    </select>
                  </div>



                <div class="form-group">
                    <label class="text-bold" >Upload Yours Profile Photo</label>
                    <input type="file" class="form-control" name="image" >
                  </div>
            
                <button type="submit" class="btn btn-outline-info float-md-right">Edit</button>
            </form>

        </div>

</div>  
 </div>






</div>  
@endsection