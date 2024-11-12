<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\StudentController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function (){
//     return view('about');
// });

// Route::get('/blog', function(){
//     return view('blog');
// });

// Route::get('/contact/{name}', function($name){
//     return view('contact',['name'=> $name]);
// });

// Route::get('/',[WelcomeController::class,'welcomeHome']);
// Route::get('/blog',[WelcomeController::class,'myBlog']);
// Route::get('/contact',[WelcomeController::class,'meroContact']);
// Route::get('/about',[WelcomeController::class,'aboutUs']);

Route::get('/students',[StudentController::class,'getStudent']);