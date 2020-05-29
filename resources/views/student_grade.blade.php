@extends('layouts.app')

@section('content')

<h1>Your Grades:  </h1>
<br>
<br>

@foreach($grades as $instance)
 <label>{{$instance->name}}:</label>

 <label>{{$instance->pivot->grade}}</label>
 
 <br>
 <br>
 @endforeach

 @endsection