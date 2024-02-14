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

    public function profile(){
        $title = "Profile";
        return view('home.profile',compact('title'));
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to(' ');
    }

}
