<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function show_register_page(){
        return view("register");
    }
    
    public function show_login_page(){
        return view("login");
    }
    public function register_information(Request $request){
         $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password'=>'required|confirmed|min:4',
         ]);
         $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password'=>Hash::make($request->password),
         ]);

         return redirect("/login_page")->with("success","Registration Successful,Please Login");
    }

    public function login_information(Request $request){
         $request->validate([
           'email' => 'required|email',
            'password'=>'required',
         ]);

         $user = User::where('email',$request->email)->first();

         if(!$user || !Hash::check($request->password,$user->password)){
            return back()->withErrors(['email'=>'invalid email'])->withInput();
         }

          return redirect('/dashboard')
            ->withCookie(cookie('user_id', $user->id, 60)) // 60 minutes
            ->withCookie(cookie('user_name', $user->name, 60));
    }

    public function logout_session(){
      return redirect('/login_page')
                ->withCookie(cookie()->forget('user_id'))
                ->withCookie(cookie()->forget('user_name'));
    }
}
