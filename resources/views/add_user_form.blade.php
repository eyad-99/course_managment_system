@extends('layouts.app')

@section('content')
<form action="/create" method="POST" class="text-center border border-light p-5">
	{{csrf_field()}}
	
	<input type="text" name="name" class="form-control mb-4" placeholder="name" >
    <br>
  

	
	<input type="email" name="email" class="form-control mb-4" placeholder="email" >
    <br>
    


   
    
	<input type="password" name="password" class="form-control mb-4" placeholder="password" >
    <br>
    

     
	<input type="number" min="2" max="3" name="type" class="form-control mb-4" placeholder="type" >
    <br>
    

<button class="btn btn-info btn-block my-4" type="submit" name="insert">insert</button>	

</form>
@endsection