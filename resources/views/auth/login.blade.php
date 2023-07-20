<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{!! asset('assets/css/LoginStyle.css') !!}">
</head>
<body>
    <div class="container">
        <form>
            <h2> LOGIN</h2>
            <div class="inputbox">
                <input type="text" tabindex="1" required="required">
                <span> Email</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input  type ="password" required="required">
                <span> Password</span>
                <i></i>
            </div>

            <button type="submit"> LOGIN </button>

            <div class="links">
                <h4> Don't have an account? </h4>
                <a href="/register"> REGISTER</a>
            </div>

        </form>
    </div>
</body>
</html>
