<?php
namespace App\Http\Controllers;  
use App\User;
use View;

class HomeController extends Controller {  
    public function index(){
        return View::make('dashboard');
    }
} 