@extends('layouts.app')

@section('content')
<form action="/add_course" method="POST" class="text-center border border-light p-5">
	{{csrf_field()}}
	
	<input type="text" name="name" class="form-control mb-4" placeholder="name">
    <br>

     
	<input type="number"  name="id" class="form-control mb-4" placeholder="id">
    <br>    

    <button class="btn btn-info btn-block my-4" type="submit" name="insert">insert</button>

</form>
@endsection