@extends('layouts.app')

@section('content')
<h1>Welcome admin...</h1>
<br>
<br>
<br>
<br>

<div class="btn-group" role="group" aria-label="Basic example">
	<a href="/log/logout"> <button type="button" class="btn btn-primary">Logut</button>     </a>
	<a href="/create"> <button type="button" class="btn btn-primary">Add User</button>     </a>
	<a href="/add_course"> <button type="button" class="btn btn-primary">Add Course</button> </a>
    <a href="/course_instructor/retrive_instuctors_courses"><button  type="button" class="btn btn-primary">Assign Course to instructor</button></a>
  </div>
<br>
<br>


<form action="/userconroller/edit" method="get">
	<br>
<label>Enter User id to edit: </label>
<input class="form-control" type="number" name="id" placeholder="Search" aria-label="Search">	
<button class="btn btn-primary">Edit</button>
</form>

<form action="/CourseController/edit" method="get">
	<br>
<label>Enter Course id to edit :</label>
<input class="form-control" type="number" name="id" placeholder="Search" aria-label="Search">	
<button class="btn btn-primary">Edit</button>

</form>

@endsection