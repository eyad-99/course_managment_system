<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\student;
use App\instructor;

class userconroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('add_user_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=new user;
        $instructor=new instructor;
        $student=new student;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->type=$request->type;
        $user->save();
        if($request->type==2)
        {
            $student->id=$user->id;
            $student->name=$user->name;
            $student->save();
        }
         elseif($request->type==3)
        {
            $instructor->id=$user->id;
            $instructor->name=$user->name;
            $instructor->save();
        }

        return view('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Request $request)
    {
        
         $instance=user::find($request->id);
         return view('edit_user',compact('instance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
        $user_instance=user::find($id);
        $student_instance=student::find($id);
        $instructor_instance=instructor::find($id);

        $user_instance->name=$request->name;
        $user_instance->email=$request->email;
        $user_instance->password=$request->password;
        $user_instance->type=$request->type;
        $user_instance->save();
        if($request->type==2)
        {
            $student_instance->id=$user_instance->id;
            $student_instance->name=$user_instance->name;
            $student_instance->save();
        }
         elseif($request->type==3)
        {
            $instructor_instance->id=$user_instance->id;
            $instructor_instance->name=$user_instance->name;
            $instructor_instance->save();
        }
        return view('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $user_instance=user::find($id);
         $user_instance->delete();
         if($user_instance->type==2)
         {
            $student_instance=student::find($id);
            $course_student=student::find($id)->courses()->get();

            foreach ($course_student as $instance){
                $instance->pivot->delete();
            }
            $student_instance->delete();
         }
         else
         {
             $instructor_instance=instructor::find($id);
             $course_instructor=instructor::find($id)->courses()->get();

            foreach ($course_instructor as $instance){
                $instance->pivot->delete();
            }
             $instructor_instance->delete();
         }
        return view('admin');
    }
}
