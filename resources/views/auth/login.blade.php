<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{!! asset('assets/css/LoginStyle.css') !!}">

</head>
<body>
        {{-- @if(session()-> has('LoginErorr'))
        <div class="alert alert-danger">
            {{ session ('LoginErorr')}}
        </div>
         @endif --}}

    <div class="container">
        @if (session('success'))
        <div class="alert-success">
        {{ session('success') }}
        </div>
        @endif
        <form action="/login/store" method="POST">
            @csrf
            <h2> LOGIN</h2>
            <div class="inputbox">
                <input type="email" id="email" tabindex="1" name="email" >
                <span> Email</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input  type ="password" required="required" name="password">
                <span> Password</span>
                <i></i>
            </div>
            <button type="submit"> LOGIN </button>
            <div class="links-submit">
                <h4> Don't have any account? </h4>
                <a href="/register"> REGISTER</a>
            </div>
        </form>
    </div>
</body>
</html>
