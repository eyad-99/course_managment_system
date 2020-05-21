@extends('layouts.app')

@section('content')
    
    
	<title>LogIn</title>
</head>
<body>
    
    
    <form class="text-center border border-light p-5" action="/log/login" method="POST">
        {{csrf_field()}}
        
            <p class="h4 mb-4">Log in</p>
        
            <!-- Email -->
            
            <input type="text" name="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">
            <br>
            <!-- Password -->
            <input type="password" name="password" id="defaultLoginFormPassword" class="form-control mb-4 " placeholder="Password">
        
            <div class="d-flex justify-content-around">
                <div>
                    <!-- Remember me -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                        <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                    </div>
                </div>
               </div>
        
            <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4 " type="submit">Login</button>
        
        
        </form>
        @endsection