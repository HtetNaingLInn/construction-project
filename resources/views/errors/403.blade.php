@extends('errors.master')

@section('title','Errors')

@section('content')
    
<div class="container">
    <div class="card col-md-6 offset-3 mt-5 bg-light">
        <div class="card-header bg-light">
            <h4 class="text-center text-info"><i class="fas fa-exclamation-triangle text-danger"></i>&nbsp;Oops! Something went wrong.</h4>
        </div>
       <div class="card-body">
        <h3 style="font-size:100px" class="text-center text-danger">403</h3>
        <p class="text-center text-danger" style="font-size:25px; font-weight:bold"><i class="fas fa-lock"></i></i>&nbsp;Bad Request</p>
        <p class="text-center font-weight-bolder mt-5">Your Request Resulted In An Error .<br>
            Or<br>
            Yours Not Authorize For This Page</p>
       
           
                <a href="{{url('/')}}"><button class="btn btn-info"> <div class="fas fa-arrow-alt-circle-left"></div> Return Back Home</button></a>
            </div>
        
       </div>
    </div>



@endsection