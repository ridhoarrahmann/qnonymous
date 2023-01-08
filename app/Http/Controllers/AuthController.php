<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }
    public function register_form(){
        return view('register');
    }
    public function register_action(Request $request){
         $validatedData=$request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required'
         ]);
         $validatedData['password']=Hash::make($validatedData['password']);
         User::create($validatedData);
         return redirect('/')->with(['message'=>'Registrasion success. Please Log in']);
    }
    public function login_action(Request $request){
        
        $credentials=$request->validate([
            'email'=>'required',    
            'password'=>'required'
        ]);
        if(Auth::attempt($credentials)){
           return  redirect('/dashboard');
        }else{
            return redirect('/')->with(['danger'=>'Wrong Email or Password']);
        }

    }
    
}
