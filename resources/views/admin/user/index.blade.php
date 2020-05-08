@extends('admin.layouts.master')

@section('title','User')

@section('content')

<div class="container-fluid">

   <div class="col-md-12">
    <a href="{{url('admin/user/create')}}" target="_blink" ><button type="submit" class="btn btn-primary mb-3">
        <div class="fas fa-plus-circle"></div>&nbsp;Create New Admin User
        </button></a>
   </div>
   @if (session('status'))
   <p class="alert alert-success">{{session('status')}}</p>
     @endif
<div class="card col-md-12">
    
<div class="card-header mt-3">
<h4 class="text-primary">User List</h4>
</div>
<div class="card-body">

    <table class="table table-bordered table-responsive-md">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col" colspan="2" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)
                
           
          <tr>
           
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->role}}</td>
          <td>
          <a href="{{action('admin\UserController@edit',$user->id)}}">
                  <button class="btn btn-outline-info btn-sm">
                      <div class="fas fa-edit "></div>
                  </button>
              </a>
        </td>
        <td>
            <a href="{{action('admin\UserController@destroy',$user->id)}}">
                <button class="btn btn-outline-danger btn-sm">
                    <div class="fas fa-trash "></div>
                </button>
            </a>
        </td>
        </tr>
          @endforeach 
        </tbody>
      </table>

</div>
</div>

</div>

    
@endsection