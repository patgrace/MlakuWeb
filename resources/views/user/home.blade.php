@extends('layout.main')


@section('css')
<link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
@endsection

@section('container')
        <header class="header">
            <div class="logo">
                <h1> MLAKU</h1>
        </div>
        <nav class="navbar">
                <a href="/">Home</a>
                <a href="/destination">Destination</a>
                <a href="#footer">About Us</a>
                <a href="/user/dashboard">WELKAM, {{ auth()-> user()-> username }}</a>
        </nav>
        <div class="toggle_btn">
            <i class="fas fa-bars"></i>
        </div>

        </header>

    <section class="home" id="home">
        <div class="content">
            <h1>Explore</h1>
            <h2>The Surabaya's Destination</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <a href="/destination" class="all-btn">Explore Now</a>
        </div>
        <div class="box">
            <img src="{{ asset('assets/images/TamanSurabaya1.webp') }}" alt="">
        </div>
    </section>
    <br>

    <section class="top-review" id="top-review">

        <div class="heading">
            <h1>Featured Reviews</h1>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="{{ asset('assets/images/kbs1.webp') }}"
                    alt="kebun raya" class="destination-img">
                <h2 class="destination-title">Kebun Raya Surabaya</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                <span class="review">( 3 Reviews )</span>
                <a href="login.html" class="all-btn add-cart">Explore Now</a>
            </div>

            <div class="box">
                <img src="{{ asset('assets/images/kbs1.webp') }}"
                    alt="kebun raya" class="destination-img">
                <h2 class="destination-title">Kebun Raya Surabaya</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                <span class="review">( 3 Reviews )</span>
                <a href="login.html" class="all-btn ">Explore Now</a>
            </div>

            <div class="box">
                <img src="{{ asset('assets/images/kbs1.webp') }}"
                    alt="kebun raya" class="destination-img">
                <h2 class="destination-title">Kebun Raya Surabaya</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                <span class="review">( 3 Reviews )</span>
                <a href="login.html" class="all-btn ">Explore Now</a>
            </div>

            <div class="box">
                <img src="{{ asset('assets/images/kbs1.webp') }}"
                    alt="kebun raya" class="destination-img">
                <h2 class="destination-title">Kebun Raya Surabaya</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                <span class="review">( 3 Reviews )</span>
                <a href="login.html" class="all-btn">Explore Now</a>
            </div>

        </div>
        <br>

    </section>

    <section class="footer" id="footer">
        <div class="box-container">
            <h3>CONTACT INFO</h3>
            <a href="#"><i class="fas fa-phone"></i>+62XXX</a>
            <a href="#"><i class="fas fa-envelope"></i>mlaku.surabaya@gmail.com</a>
        </div>
        <div class="credit">
            <h2>CREATE BY: PATRICIA GRACE </h2>
        </div>
    </section>
@endsection
