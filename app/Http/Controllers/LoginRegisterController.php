<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Auth;
use Hash;


class LoginRegisterController extends Controller
{
    public function login(){

    	return view('auth.login');
    }




    public function post_login(Request $request){

    	 $request ->validate([

               'email'=>'required',
               'password'=>'required',
          ]);

          $credentials = $request->only('email','password');
          

          if(Auth::attempt($credentials)){

               return redirect('dashboard')->with('message','Signed In!');
          }
     
          return redirect('/login')->with('error','Login details are not Valid!');
    }




    public function register(){

    	return view('auth.register');
    }


 

    public function post_register(Request $request){


            $request ->validate([
               'name'=>'required',
               'email'=>'required|email|unique:users,email',
               'password'=>'required|confirmed|min:6',
               'password_confirmation' => 'required|min:6'
             ]);
  
  
          $user = new User();
          $user->name = $request->name;
          $user->email = $request->email;
          $user->password = Hash::make($request->password);
          $user->save();
  
        return redirect('register')->with('message','Your Account is registered Successfully!');
    }




    public function dashboard(){

    	return view('auth.dashboard');


    }

    

    public function logout(){
          Auth::logout();
          return redirect('/login')->with('message','You are successfully Logged Out!');
      }
}
