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
                <input type="text" tabindex="1" required="required" name="username">
                <span> Username</span>
                <i></i>
            </div>

            <div class="inputbox">
                <input type="text" tabindex="1" required="required" name="email">
                <span> Email</span>
                <i></i>
            </div>

            <div class="inputbox">
                <input  type ="password" required="required" name="password">
                <span> Password</span>
                <i></i>
            </div>

            <button type="submit"> REGISTER </button>

            <div class="links">
                <h4> Already have an account? </h4>
                <a href="/login"> LOGIN </a>
            </div>

        </form>
    </div>
</body>
</html>
