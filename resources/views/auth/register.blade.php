<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{!! asset('assets/css/RegistStyle.css') !!}">
</head>
<body>
    <div class="container">
        <form action="/register/store" method="POST">
            @csrf
            <h2> REGISTER </h2>
            <div class="inputbox">
                <input type="text" tabindex="1"  required="required"  name="username" class="@error('username') is-invalid @enderror">
                <span> Username</span>
                <i></i>
                @error('username')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="inputbox">
                <input type="email" tabindex="1" name="email" required="required" class="@error('email') is-invalid @enderror">
                <span> Email</span>
                <i></i>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="inputbox">
                <input  type ="password" required="required" name="password" class="@error('password') is-invalid @enderror">
                <span> Password</span>
                <i></i>
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit"> REGISTER </button>

            <div class="links">
                <h4> Already have an account? </h4>
                <a href="/login"> LOGIN </a>
            </div>

        </form>
    </div>
</body>

<script src="{!! asset('assets/js/script.js') !!}"></script>
</html>
