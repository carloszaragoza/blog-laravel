<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StudentController extends Controller
{
    public function index(){
        $students = array("a" => "Octavio", "b" => 2);
        
        return view('students.index',  compact('students'));    
    }
    
    //
}
