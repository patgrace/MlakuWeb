<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destination</title>
    <link rel="stylesheet" href="{!! asset('assets/css/cateStyle.css') !!}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <div class="body-content">
        @include('partials.navbar')

        <div class="search-container">
            <input type="text" placeholder="Search...">
            <i class="fas fa-search" ></i>
        </div>

        <div class="container">
            <div class="category-title">
                <a href="/alam">ALAM</a>
                <a href="/budaya">BUDAYA</a>
                <a href="/kuliner">KULINER</a>
            </div>
        </div>

        <div class="box">
            @yield('post')
        </div>


    </div>
</body>
</html>
