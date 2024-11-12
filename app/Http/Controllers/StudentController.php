<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function getStudent(){
        $students = \App\Models\student::all();
        return view('students',['data'=>$students]);
    }
}
