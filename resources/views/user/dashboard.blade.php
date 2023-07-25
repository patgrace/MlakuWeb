@extends('layout.dashboard')


@section('content')

<div class="profile">
    <div class="profile-pic">
        <img src="{{ asset('assets/images/dino.webp') }}">
    </div>
    <h2> PATRICIA GRACE</h2>
    <i> </i>
    <div class="content-user">
        <a href="/home">
            <i class="material-icons">home</i>
            <span>HOME</span>
        </a>
        <a href="#">
            <i class="material-icons">edit_square</i>
            <span>ALL REVIEW</span>
        </a>
        <a href="/logout">
            <i class="material-icons">logout</i>
            <span>LOGOUT</span>
        </a>
    </div>
</div>

<div class="isi-content">
    <div class=" header-content">
        <h4> YOUR REVIEW </h4>
        <a href="destination.html" class="add-review">
            <i class="material-icons">add</i>
            <span> Add</span>
        </a>
    </div>

    <div class="main-content">
        <h3> Cateogory: Alam</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
    </div>

</div>
@endsection
