@extends('layouts.app')

@section('content')
<form action="/CourseController/{{$instance_course->id}}" method="POST" class="text-center border border-light p-5">
	{{csrf_field()}}
	
	<input type="text" name="name" value="{{$instance_course->name}}" class="form-control mb-4" placeholder="Name" >
    <br>

	
	<input type="number" name="id" value="{{$instance_course->id}}" class="form-control mb-4" placeholder="Id" >
    <br>
    


<button class="btn btn-info btn-block my-4" type="submit" name="update">Update</button>	
 
</form>
<br>
<a href="/CourseController/{{$instance_course->id}}/delete">  <button class="btn btn-info btn-block my-4" >Delete</button>        </a>

@endsection 