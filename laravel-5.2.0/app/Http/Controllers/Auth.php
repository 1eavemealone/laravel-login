<?php
namespace App\Http\Controllers;  
  
use Auth;  
use Request;  
  
class Auth extends Controller {  
  
    public function getLogin() {  
        return view('auth.login');
    }  
  
    public function postLogin() {  
        $email = Request::input('email');  
        $password = Request::input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password, 'verified' => 1])) {  
            return redirect('/dashboard');  
        }  
        else {  
            return redirect('/login');  
        }  
    }
    public function getLogout(){
        Auth::logout();
        return redirect('/');  
    }
} 