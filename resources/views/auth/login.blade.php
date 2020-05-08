
@extends('layouts.app')

@section('title','Login')

@section('content')
    

<div class="container mt-5">
	<section id="content">
		<form action="" method="POST" class="content:after">
            @csrf
            @include('admin.message.index')
			<h1 class="text-warning">Login</h1>
			<div>
                <i class="far fa-envelope text-warning mr-2"></i>
				<input type="email"  placeholder="Email" required="" id="email"   name="email"  required autocomplete="email">
            
                
            
            
            </div>
			<div>
                <i class="fas fa-key text-warning mr-2"></i>
				<input type="password" placeholder="Password" required="" id="password" name="password"required autocomplete="current-password" >
            
               
            
            </div>
			<div>
				<button type="submit" class="btn btn-warning btn-sm  my-2 text-light">Login</button>
				<a href="">Forget your password?</a>
            <a href="{{url('register')}}">Register</a>
			</div>
		</form>
	
	</section>
</div>
@endsection