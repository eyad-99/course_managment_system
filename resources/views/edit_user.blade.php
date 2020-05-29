@extends('layouts.app')

@section('content')
<form action="/userconroller/{{$instance->id}}" method="POST" class="text-center border border-light p-5">
	{{csrf_field()}}
	
	<input type="text" name="name" value="{{$instance->name}}" class="form-control mb-4" placeholder="name" >
    <br>
    

	
	<input type="email" name="email" value="{{$instance->email}}" class="form-control mb-4" placeholder="Name">
    <br>


   
    
	<input type="password" name="password" value="{{$instance->password}}" class="form-control mb-4" placeholder="Password">
    <br>
    

    
	<input type="text"  name="type" value="{{$instance->type}}" class="form-control mb-4" placeholder="Type" readonly>
    <br>
   

<button class="btn btn-info btn-block my-4" type="submit" name="update">update</button>	
 
</form>
<br>
<a href="/userconroller/{{$instance->id}}/delete">  <button class="btn btn-info btn-block my-4">delete</button>        </a>
@endsection 