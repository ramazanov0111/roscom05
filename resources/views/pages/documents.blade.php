@extends('index')

@section('title', 'Документы')

@section('content')

    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="{{ asset('img/Фоновая_картинка_2.jpeg') }}">
        <div class="container text-white">
            <h2>Документы</h2>
        </div>
    </section>
    <!--  Page top end -->

    <div class="container">
        <!-- Breadcrumb -->
        <div class="site-breadcrumb">
            <div class="container">
                <a href="{{ url('/') }}"><i class="fa fa-home"></i>Главная</a>
                <span><i class="fa fa-angle-right"></i>Документы</span>
            </div>
        </div>

        <!-- page -->
        <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <table class="table">
                            <thead class="table-light">
                            <th>№</th>
                            <td>Наименование документа</td>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td><a href="{{ asset('docs/Выписка_из_реестра.pdf') }}">Выписка из реестра членов
                                        СРО</a>
                                </td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td><a href="{{ asset('docs/Диплом_Оценщика.pdf') }}">Диплом оценщика</a></td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td><a href="{{ asset('docs/Свидетельство_НП001625.pdf') }}">
                                        Свидетельство о членстве в СРО
                                    </a></td>
                            </tr>
                            <tr>
                                <th>4</th>
                                <td><a href="{{ asset('docs/ДИПЛОМ_ПЕРЕПОДГАТОВКИ.pdf') }}">
                                        Диплом о профессиональной переподготовке
                                    </a></td>
                            </tr>
                            <tr>
                                <th>5</th>
                                <td><a href="{{ asset('docs/СВИДЕТЕЛЬСТВО_СУД_ЭКСПЕРТА_РОСКОМ_Агаметов.pdf') }}">
                                        Свидетельство суд эксперта Роском - Агаметов
                                    </a></td>
                            </tr>
                            <tr>
                                <th>6</th>
                                <td><a href="{{ asset('docs/СЕРТИФИКАТ_СУД_ЭКСПЕРТА_ГЕОКОМ_Агаметов.pdf') }}">
                                        Свидетельство суд эксперта Геоком - Агаметов
                                    </a></td>
                            </tr>
                            <tr>
                                <th>7</th>
                                <td>
                                    <a href="{{ asset('docs/УДОСТОВЕРЕНИЕ_О_ПОВЫШЕНИИ_КВАЛИФИКАЦИИ_август_20г..pdf') }}">
                                        Удостоверение о повышении квалификации
                                    </a></td>
                            </tr>
                            <tr>
                                <th>8</th>
                                <td>
                                    <a href="{{ asset('docs/ИНФОРМАЦИОННАЯ_КАРТОЧКА_ЭКСПЕРТА_Агаметов_Т.М-А..pdf') }}">
                                        Информационная карточка эксперта Агаметов Т.М
                                    </a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-4">
                        <img class="img-fluid document" src="{{ asset('img/Свидетельство.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- page end -->
    </div>

@endsection
