<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;

class CourseController extends Controller
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
    public function add_course()
    {
        
         return view('add_course_form');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $course = new course;
        $course->id=$request->id;
        $course->name=$request->name;
        $course->save();
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
        
        $instance_course=course::find($request->id);
         return view('edit_course',compact('instance_course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $course_instance=course::find($id);
        $course_instance->name=$request->name;
        $course_instance->id=$request->id;
        $course_instance->save();
        return view('admin');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        $course_instance=course::find($id);
        $course_instance->delete();
        return view('admin');
    }
    
}