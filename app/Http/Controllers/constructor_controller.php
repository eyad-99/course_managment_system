<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course_student;
use App\student;
use App\course;
use App\instructor;


class constructor_controller extends Controller
{
    //
     public function get_courses()
    {
    	$instructor_id=session('data');
    	$object=new instructor;
    	$courses=instructor::find($instructor_id)->courses;

    	return view('show_courses',compact('courses'));
    }
    public function show_student(Request $request)
    {
    	$student_course=course_student::where('course_id',$request->course)->get();
    	//$students=course::find($request->course)->students;
    	$names=array();
    	
    	foreach ($student_course as $instance ) {
    		# code...
    		$var=student::find($instance->student_id);
    		$names[]=$var->name;
    	}
    	//dd($student_course);
    	

    	return view('add_grade',compact('student_course','names'));



    }

    public function submit_grade(Request $request)
    {
    	
    foreach ($request->id as $index => $instance ) {
    		# code...
    		$object = course_student::find($instance);
    		
    		
    		$object->grade=$request->grades[$index];
    		$object->save();
    

    	}
    	return view('instructor');
    }
}
