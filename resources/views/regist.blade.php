@extends('layouts.app')

@section('content')
<form action="/student/regest_courses" method="post">
	{{csrf_field()}}
    

	@foreach($all_courses as $course)
  <input class="form-check-input position-static" type="checkbox" name= "courses[]" value= "{{$course->id}}">
  <label> {{$course->name}}</label>
      <br>
      <br>
    @endforeach

<button class="btn btn-info btn-block my-4" type="submit" name="insert">insert</button>	

</form>

@endsection 