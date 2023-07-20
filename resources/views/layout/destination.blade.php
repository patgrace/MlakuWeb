@extends('layout.main')

@section('css')
<link rel="stylesheet" href="{!! asset('assets/css/destinationStyle.css') !!}">
@endsection


@section('container')
    @include('partials.navbar')

    <div class="search-container">
        <input type="text" placeholder="Search...">
        <i class="fas fa-search" ></i>

    </div>

    <div class="heading">
        <h2> Choose Destination!</h2>
    </div>

    <div class="container">
        <div class="category">
            <img src="{{ asset('assets/images/TamanSurabaya1.webp') }}" alt="taman surabya">
            <div class="category-title">
                <a href="/alam"> ALAM </a>
            </div>
        </div>

        <div class="category">
            <img src="{{ asset('assets/images/TamanSurabaya1.webp') }}" alt="taman surabya">
            <div class="category-title">
                <a href="/budaya"> BUDAYA </a>
            </div>
        </div>

        <div class="category">
            <img src="{{ asset('assets/images/TamanSurabaya1.webp') }}" alt="taman surabya">
            <div class="category-title">
                <a href="/kuliner"> KULINER </a>
            </div>
        </div>
    </div>


@endsection
