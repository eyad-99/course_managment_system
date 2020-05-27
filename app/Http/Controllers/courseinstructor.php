<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\instructor;
use App\course;
use App\course_instructor;

class courseinstructor extends Controller
{
    //

     public function retrive_instuctors_courses()
    {
    	$instructors=instructor::all();
    	$courses=course::all();
    	return view('assign_course_instructor',compact('courses','instructors'));

    }





     public function assign_course_instructor(Request $request)
    {
    	//$instructor=instructor::where('name',$request->instructor)->get();
    	//$course=course::where('name',$request->course)->get();
    	$course_instructor=course_instructor::all();
    	$flag=0;
    	foreach ($course_instructor as $instance) {
    		if($instance->course_id ==$request->course && $instance->instructor_id ==$request->instructor )
    		{
    			$flag=1;
    			return view('admin');
    		}
    		
    	}
    	if($flag==0){
    	 $object=new course_instructor;
    	 $object->course_id=$request->course;
    	 $object->instructor_id=$request->instructor;
    	
    	 $object->save();
    	 return view ('admin');
    	}
    	
    	

    }

    public function return_to_admin()
    {

    	return redirect('/log/login');
    }
}
