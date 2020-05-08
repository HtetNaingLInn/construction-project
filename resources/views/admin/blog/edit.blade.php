@extends('admin.layouts.master')

@section('title', $blog->title) 
@section('content')
    
<div class="container-fluid col-md-10 offset-1">

    
<a href="{{url('admin/blog')}}"> <button class="btn btn-primary mb-3"> <div class="fas fa-arrow-circle-left"></div>&nbsp;Back</button></a>
    
    <div class="card">

        <div class="card-header">
            <h3 class="text-info">Edit Blog</h3>
        </div>
        <div class="card-body">
           
            <form method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.message.index')
                
            <input type="hidden" value="{{Auth::User()->id}}" name="user_id">
                <div class="form-group">
                  <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="{{$blog->title}}">
                  
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control"  rows="5" name="content"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Upload Your Blog Image</label>
                    <input type="file" class="form-control" id="exampleFormControlFile1" name="image[]" multiple>
                  </div>
                <button type="submit" class="btn btn-outline-info float-right">Edit</button>
              </form>

        </div>
    </div>
</div>

@endsection