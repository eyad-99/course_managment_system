@extends('layouts.app')

@section('content')
	<h1>Add Grade: </h1>
	<br>
	<br>
<form action="/instructor/submit_grade" method="post">
	{{csrf_field()}}
	@foreach($student_course as $index => $instance)
	<input type="hidden" name="id[]" value="{{$instance ->id}}">
	
	<label>{{$names[$index]}}</label>
	<input class="form-control" type="number" name="grades[]">
	<br>
	<br>
	@endforeach

	
<button class="btn btn-info btn-block my-4">Submit Grade</button>
</form>


@endsection