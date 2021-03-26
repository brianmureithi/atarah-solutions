<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        //select * from student table
        $showstudents = Student::OrderBy('created_at', 'desc')->simplePaginate(5);
        
  
        return view('student.index',
        compact('showstudents'));
    }
    //
}
