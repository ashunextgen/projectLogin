

@extends('auth.layout')
@section('content')
	<div class="page-content">
		<div class="form-v5-content">

			<form class="form-detail" action="{{route('post_register')}}" method="post">
				@csrf
				<h2>Register  Form</h2>
				        @if(\Session::has('message'))
                        <div class="alert alert-info">{{\Session::get('message')}}</div>
                        @endif
				<div class="form-row">
					<label for="full-name">Full Name</label>
					<input type="text" name="name" id="name" class="input-text" placeholder="Your Name" value="{{ old('name') }}" >
					                
					<i class="fas fa-user"></i>
					              
				</div>

				                    @error('name')
                                    <span class="text-danger"  style="font-size:15px">{{$message}}</span>
                                    @enderror
				<div class="form-row mt-3">
					<label for="your-email">Your Email</label>
					<input type="email" name="email" id="email" class="input-text" placeholder="Your Email" value="{{ old('email') }}">
					
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

				<div class="form-row mt-3">
					<label for="password">Confirm Password</label>
					<input type="password" name="password_confirmation" id="password_confirmation" class="input-text" placeholder="Confirm Password">
					<i class="fas fa-lock"></i>
				</div>
				                    @error('password_confirmation')
                                    <span class="text-danger"  style="font-size:15px">{{$message}}</span>
                                    @enderror
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>

				<a href="{{route('login')}}">Already Register?</a>
			</form>
		</div>
	</div>
@endsection