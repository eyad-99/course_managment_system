<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\student;
use App\instructor;
use App\course_instructor;
use App\course;

class log extends Controller
{
    //
     public function login(Request $request)
    {
    	$user= new user;
    	$data=user::all();
      $flag=0;
    	foreach ($data as $instance)
    	 {
    	 	# code...
    	
    		if($instance->email==$request->email &&$instance->password==$request->password)
    		{
          $flag=1;
          $request->session()->put('data',$instance->id);
    			if($instance->type==1)
    			return view('admin');

    		   elseif ($instance->type==2)
               {  
             //  $id= $instance->id;  		
   			   return view('student');
               }

   			  elseif ($instance->type==3)    
              {
               $id= $instance->id; 
              		
   			   return view('instructor');
            }

            }
           
    	 } 
       if($flag==0)
       return view('login');  
    }



    public function logout()
    {
      
    	return view('login');
    }
}
