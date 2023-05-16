
@extends('auth.layout')

<style type="text/css">
	.page-content{

		height: 100vh;
	}
</style>
@section('content')
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="{{route('post_login')}}" method="post">
				@csrf
				<h2>Login</h2>

				@if(\Session::has('message'))
                        <div class="alert alert-info">{{\Session::get('message')}}</div>
                        @endif


                        @if(\Session::has('error'))
                        <div class="alert alert-danger">{{\Session::get('error')}}</div>
                        @endif
				
				<div class="form-row mt-3">
					<label for="your-email">Your Email</label>
					<input type="text" name="email" id="email" class="input-text" placeholder="Your Email" >
					<i class="fas fa-envelope"></i>
				</div>

				                   @error('email')
                                    <span class="text-danger"  style="font-size:15px">{{$message}}</span>
                                    @enderror
				<div class="form-row mt-3">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="input-text" placeholder="Your Password">
					<i class="fas fa-lock"></i>
				</div>

				                    @error('password')
                                    <span class="text-danger"  style="font-size:15px">{{$message}}</span>
                                    @enderror
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Login">
				</div>

				<a href="{{route('register')}}">Create Account</a>
			</form>
		</div>
	</div>
@endsection