@extends('layouts.app')

@section('content')
<h1>Instructor</h1>
<br>
<br>
<br>
<br>

<form action="/instructor/show_student" method="post" class="text-center border border-light p-5">
	{{csrf_field()}}
<select class="form-control" name="course">
		@foreach( $courses as $course )
		<option value="{{$course->id}}"> {{$course->name}}</option>
		@endforeach
	</select>
     <br>
     <br>
		<button class="btn btn-info btn-block my-4">Show Students</button>

</form>

<br>
<br>




@endsection 