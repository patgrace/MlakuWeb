@extends('layout.dashboard')

@section('content')
    <div class="profile">
        <div class="profile-pic">
            <img src="{{ asset('assets/images/dino.webp') }}">
        </div>
        <h2> PATRICIA GRACE</h2>
        <i> </i>
        <div class="content-user">
            <a href="home.html">
                <i class="material-icons">home</i>
                <span>HOME</span>
            </a>
            <a href="/dashboard">
                <i class="material-icons">post_add</i>
                <span>ALL POST</span>
            </a>
            <a href="admin/review">
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
            <h4> TOTAL POST </h4>
            <a href="addpost.html" class="add-review">
                <i class="material-icons">add</i>
                <span> Add</span>
            </a>
        </div>

        <div class=" box-category">
            <div class="box">
                <h2>ALAM</h2>
                <p> 3 POST </p>
            </div>

            <div class="box">
                <h2>BUDAYA</h2>
                <p> 3 POST </p>
            </div>

            <div class="box">
                <h2>KULINER</h2>
                <p> 3 POST </p>
            </div>
        </div>
    </div>
@endsection
