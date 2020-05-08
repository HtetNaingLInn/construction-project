@extends('admin.layouts.master')

@section('title','Category')
@section('content')
    
<div class="container-fluid">

    @if (session('status'))
    <p class="alert alert-success">{{session('status')}}</p>
        @endif
<div class="container-fluid">
   <div class="row">
        <div class="col-md-4 mb-3">
        <a href="{{url('admin/category/create')}}" target="_blink" ><button type="submit" class="btn btn-primary">
            <div class="fas fa-plus-circle"></div> &nbsp;  Create Category
            </button></a>
        </div>
    
        <div class="col-md-8">
            <div class="col-md-12">
                <form>
                    <div class="input-group mb-3">
                        <input type="text" name="search" class="form-control" placeholder="Search By Category name">
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


    <div class="card col-md-12">
        <div class="card-header">
            <h2 class="card-title text-primary">Category List</h2>
        </div>
        
        <div class="card-body">
        <table class="table table-bordered table-responsive-md">
            <thead>
              <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Description</th>
                <th  colspan="2">Action</th>
                
              </tr>
            </thead>
            <tbody>

                
                    
               @forelse ($categories as $category)
               <tr>
               
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{Str::limit($category->description,'50')}}</td>
                <td><a href="{{action('admin\CategoryController@edit',$category->id)}}" class="btn-sm btn-outline-info"><i class="fas fa-edit"></i></a></td>
                <td><a href="{{action('admin\CategoryController@destroy',$category->id)}}" class="btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a></td>  
                  
                </tr>
               @empty
               <h3 class="text-danger">There is no Category</h3>
               @endforelse
              
             
            </tbody>

            <div class="col-md-12">
                {{$categories->links()}}
            </div>
          </table>
        </div>
    
</div>  
</div>


@endsection

