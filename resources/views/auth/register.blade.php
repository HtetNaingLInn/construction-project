@extends('layouts.app')
@section('title','Register')

@section('content')

<div class="container mt-5">
	<section id="content">
		<form method="post">
@include('admin.message.index')
            @csrf
			<h1 class="text-warning">Register</h1>
			<div>
                <i class="fas fa-user text-warning mr-2"></i>
				<input type="text"  placeholder="Username" required="" id="username"  name="name" >
            </div>
            <div>
                <i class="far fa-envelope text-warning mr-2"></i>
				<input type="email"  placeholder="Email" required="" id="email"  name="email" >
			</div>
			<div>
                <i class="fas fa-lock text-warning mr-2"></i>
				<input type="password" placeholder="Password" required="" id="password" name="password">
            </div>
            <div>
                <i class="fas fa-key text-warning mr-2"></i>
				<input type="password" placeholder="Confirm Password" required="" id="confirm_password" name="password_confirmation" >
			</div>
			<div>
				<button type="submit" class="btn btn-warning btn-sm  my-2 text-light">Register</button>
            <a href="#">If you have accont</a>	
            <a href="{{url('login')}}">Login Here</a>
			</div>
		</form>
	
	</section>
</div>

    
@endsection