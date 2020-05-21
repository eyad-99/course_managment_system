@extends('layouts.app')

@section('content')
<h1> Hello {{session('data')}} ...</h1>
<br>
<br>
<br>
<br>

<div class="btn-group" role="group" aria-label="Basic example">
<a href="/log/logout">  <button type="button" class="btn btn-primary">Logout</button>        </a>
<a href="/student/show_courses">  <button type="button" class="btn btn-primary">Register Courses</button>        </a>
<a href="/student/show_grade">  <button type="button" class="btn btn-primary">Show Grades </button>        </a>
</div>
@endsection