@extends('index')

@section('title', 'Главная')

@section('content')

    <!-- Hero section -->
    <section class="hero-section set-bg" data-setbg="{{ asset('img/Фоновая_картинка.jpeg') }}">
        <div class="container hero-text text-white">
            <h2>Доверьте вашу недвижимость специалистам</h2>
            <a href="{{ url('/contact') }}" class="site-btn">СВЯЖИТЕСЬ С НАМИ</a>
        </div>
    </section>
    <!-- Hero section end -->

    <div class="container">
        <!-- page -->
        <section class="page-section">
            <div class="container">

            </div>
        </section>
    </div>

@endsection
