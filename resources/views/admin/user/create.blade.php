@extends('admin.layouts.master')

@section('title','Add User')

@section('content')
    
<div class="container col-md-10 offset-1">
    
    <a href="{{url('admin/user')}}"><button class="btn btn-primary mb-3"> <div class="fas fa-arrow-circle-left"></div> Back</button></a>
    <div class="card">
       
        <div class="card-header">
    <h3 class="text-info">Create New Admin User</h3>
    
        </div>
        <div class="card-body">
           
         
            <form method="POST" enctype="multipart/form-data">
                @include('admin.message.index')
                @csrf
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" class="form-control"  name="name" >
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email">
                    
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                  </div>
                  <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation">
                  </div>
                
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Select Role</label>
                  
                    <select class="form-control" id="exampleFormControlSelect1" name="role">
                      <option value="#" class="bg-dark">Choice One Role For Admin</option>
                      <option value="Admin">Admin</option>
                      <option value="Content Writer">Content Writer</option>
                      <option value="Guest">Guest</option>
                    </select>
                  </div>



                <div class="form-group">
                    <label class="text-bold" >Upload Yours Profile Photo</label>
                    <input type="file" class="form-control" name="image" >
                  </div>
            
                <button type="submit" class="btn btn-outline-info float-md-right">Create</button>
            </form>

        </div>

</div>  
 </div>






</div>  
@endsection