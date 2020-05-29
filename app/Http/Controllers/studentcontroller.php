<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;
use App\student;
use App\course_student;

class studentcontroller extends Controller
{
    //

     public function show_courses()
  {
  	$all_courses=course::all();
  	
    return view('regist',compact('all_courses'));

  	
  }

   public function regist_courses(Request $request)
  {
  	$student_id=session('data');
  	$object=new course_student;
  	
  $registered=course_student::where('student_id',$student_id)->get();
 // echo $registered;
 foreach ($registered as $instance) {
 	# code...
 	 $instance->delete();
                         }
   
  
  $count=0;
  foreach ($request->courses as $course) {
  	# code...
  	if($count<4)
  	{
  	$instance=new course_student;
  	$instance->student_id=$student_id;
  	$instance->course_id=$course;
  	$instance->save();
  	$count=$count+1;
  }
  	else
  	{
  		return view('student');
  	}

  	}

  
  return view('student');
  		
  	
  }

   public function show_grade()
  {
    $student_id=session('data');
    $grades=student::find($student_id)->courses()->get();

    return view('student_grade',compact('grades'));
    
      # code...
    }

}
