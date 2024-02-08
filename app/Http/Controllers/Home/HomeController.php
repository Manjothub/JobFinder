<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function about(){
        $title = "About Us";
        return view('home.about',compact('title'));
    }    
    
    public function contact(){
        $title = "Contact Us";
        return view('home.contact',compact('title'));
    }    
    public function login(){
        return view('auth.login');
    } 
    public function register(){
        return view('auth.register');
    }    

    public function saveuser(Request $request){
        // // Validate the input data
        $request->validate([
            'phone' => 'required|number|max:10',
            'email' => 'required|string|email|max:250|unique:users',
            'password' => 'required|string|min:8|same:password',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        // Hash the password
        $hashedPassword = Hash::make($password);    
        // Create and save the user
        $user = User::create(request(['email', 'password']));
        auth()->login($user);
        return redirect()->to('login')->with('success', 'Your account has been created successfully!');
    }    

    public function dologin(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            return redirect()->intended('');
        }
        else{
            return redirect()->to('login')->with('error', 'Invalid Credentials');
        }
    }

}
