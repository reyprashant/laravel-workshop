<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcomeHome(){
        return view('welcome');
    }
    public function aboutUs(){
        return view('about');
    }
    public function myBlog(){
        return view('blog');
    }
    public function meroContact(){
        return view('contact');
    }
}
