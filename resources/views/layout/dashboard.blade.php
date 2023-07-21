<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{!! asset('assets/css/dashboard.css') !!}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <div class="body-content">
        <header class="header">
            <div class="logo">
                <h1> MLAKU</h1>
            </div>
        </header>
        <div class="dashboard">
            @yield('content')
        </div>
    </div>
</body>
</html>
