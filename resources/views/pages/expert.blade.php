@extends('index')

@section('title', 'Землеустроительная экспертиза')

@section('content')

    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="{{ asset('img/Фоновая_картинка_2.jpeg') }}">
        <div class="container text-white">
            <h2>Землеустроительная экспертиза</h2>
        </div>
    </section>
    <!--  Page top end -->

    <div class="container">
        <!-- Breadcrumb -->
        <div class="site-breadcrumb">
            <div class="container">
                <a href="{{ url('/') }}"><i class="fa fa-home"></i>Главная</a>
                <span><i class="fa fa-angle-right"></i>Землеустроительная экспертиза</span>
            </div>
        </div>

        <!-- page -->
        <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 singel-blog-content">
                        <p>
                            «РоскоМ» осуществляет экспертную деятельность по организации и производству
                            землеустроительной экспертизы посредством разрешения вопросов, требующих специальных знаний
                            в области кадастровых, землеустроительных работ и в сфере оборота недвижимости. Эксперт
                            (специалисты) имеют обширный опыт проведения судебной, досудебной землеустроительной
                            экспертизы.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="img-thumbnail" src="{{ asset('img/zeml-ekspertiza.jpeg') }}" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <div class="section-title">
                                <h3>Заказать экспертизу</h3>
                            </div>
                            <form action="{{ asset('send.php') }}" method="POST" class="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label" for="name">Имя</label>
                                        <input name="name" type="text" placeholder="Введите ваше имя">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label required" for="phone">Телефон</label>
                                        <input name="phone" type="tel" placeholder="Введите ваш номер телефона" required
                                               aria-required="true">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="control-label required" for="message">Текст обращения</label>
                                        <textarea name="message" placeholder="Введите текст обращения"
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
