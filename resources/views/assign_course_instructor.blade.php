@extends('layouts.app')

@section('content')
<li> Assign Course to Instructor....</li>
<form action="/course_instructor/assign_course_instructor" method="post" class="text-center border border-light p-5">
	{{csrf_field()}}
	
	<select class="form-control" name="course">
		@foreach( $courses as $course )
		<option value="{{$course->id}}"> {{$course->name}}</option>
		@endforeach
		

	</select>
	<br>

	<select class="form-control" name="instructor">
		@foreach($instructors as $instructor )
		<option value="{{$instructor->id}}"> {{$instructor->name}}</option>
		@endforeach
		

	</select>
	<br>
	<br>
	<br>
	<br>
	

	<button class="btn btn-info btn-block my-4">submit</button>
	@endsection 