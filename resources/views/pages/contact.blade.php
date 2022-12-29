@extends('index')

@section('title', 'Контакты')

@section('content')

    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="{{ asset('img/Фоновая_картинка_2.jpeg') }}">
        <div class="container text-white">
            <h2>Контакты</h2>
        </div>
    </section>
    <!--  Page top end -->

    <div class="container">
        <!-- Breadcrumb -->
        <div class="site-breadcrumb">
            <div class="container">
                <a href="{{ url('/') }}"><i class="fa fa-home"></i>Главная</a>
                <span><i class="fa fa-angle-right"></i>Контакты</span>
            </div>
        </div>

        <!-- page -->
        <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div style="position:relative;overflow:hidden; margin-bottom: 30px;">
                            <a href="https://yandex.ru/maps/org/roskom/1460889932/?utm_medium=mapframe&utm_source=maps"
                               style="color:#eee;font-size:12px;position:absolute;top:0px;">Роском</a>
                            <a href="https://yandex.ru/maps/11007/derbent/category/cadastral_works/32562640747/?utm_medium=mapframe&utm_source=maps"
                               style="color:#eee;font-size:12px;position:absolute;top:14px;">Кадастровые работы в
                                Дербенте</a>
                            <a href="https://yandex.ru/maps/11007/derbent/category/survey_works/184107603/?utm_medium=mapframe&utm_source=maps"
                               style="color:#eee;font-size:12px;position:absolute;top:28px;">Изыскательские работы
                                в Дербенте</a>
                            <iframe class="yandex-map" src="https://yandex.ru/map-widget/v1/-/CCURnWEtcC"
                                    frameborder="1" allowfullscreen="true"
                                    style="position:relative; border-style: solid"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <h3>Наши контакты</h3>
                        </div>
                        <div class="contact-info-warp">
                            <p><i class="fa fa-envelope"></i>npo.roscom05@yandex.ru</p>
                            <p><i class="fa fa-instagram"></i>roscom05</p>
                            <p><i class="fa fa-phone"></i>+7 (928) 947-36-85</p>
                            <p><i class="fa fa-map-marker"></i>г.Дербент, ул. Площадь Свободы 7</p>
                            <p>
                                <i class="fa fa-clock-o"></i>
                                Пн-Пт – с 9:00 до 17:00 <br>
                                (перерыв с 12:00-14:00) <br>
                                Сб-Вс – выходные
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-title">
                            <h3>Обратная связь</h3>
                        </div>
                        <div class="contact-right">
                            <form action="{{ asset('send.php') }}" method="POST" class="contact-form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label" for="name">Имя</label>
                                        <input name="name" type="text" placeholder="Введите ваше имя">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label required" for="email">E-mail</label>
                                        <input name="email" type="email" placeholder="Введите ваш e-mail">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="control-label required" for="message">Текст сообщения</label>
                                        <textarea name="message" placeholder="Введите текст сообщения"
                                                  required aria-required="true"></textarea>
                                        <input class="btn site-btn submit" type="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page end -->
    </div>

@endsection
