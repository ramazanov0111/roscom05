@extends('index')

@section('title', 'ОФОРМЛЕНИЕ НЕДВИЖИМОСТИ')

@section('content')

    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="{{ asset('img/Фоновая_картинка_2.jpeg') }}">
        <div class="container text-white">
            <h2>Оформление недвижимости</h2>
        </div>
    </section>
    <!--  Page top end -->

    <div class="container">
        <!-- Breadcrumb -->
        <div class="site-breadcrumb">
            <div class="container">
                <a href="{{ url('/') }}"><i class="fa fa-home"></i>Главная</a>
                <span><i class="fa fa-angle-right"></i>Оформление недвижимости</span>
            </div>
        </div>

        <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 singel-blog-content">
                        <p>
                            Учет недвижимого имущества осуществляется Росреестром в рамках кадастровой деятельности.
                            Чтобы получить точные и полные данные о характеристиках недвижимости, проводятся кадастровые
                            работы на объектах, оформляются технические и межевые планы, акты обследований. По итогам
                            учетных процедур вся информация вносится в единую базу данных – ЕГРН. Сведения этого реестра
                            общедоступны, могут быть запрошены в виде выписки или справок. Государственный кадастровый
                            учет недвижимости проводится в отношении участком, строений, квартир, нежилых помещений,
                            других объектов.
                        </p>
                    </div>
                    <div class="col-md-10">
                        <img class="img-thumbnail" src="{{ asset('img/15.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
