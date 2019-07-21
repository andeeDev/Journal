<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cabinet.sumdu.edu.ua/public/css/cabinet.min.css">
    <!--    <link rel="stylesheet" href="../styles/common.css">-->
    <link href="{{ asset('/css/common.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--    <script defer type="text/javascript" src="../js/what-input.js"></script>--}}
</head>
<body>
    <header id="header" class="row expanded">
        <div class="large-12 column">
            <div class="top-bar cabinet">
                <a class="float-left" style="display: block;" href="http://sumdu.edu.ua" title="Сумський державний університет">
                    <img src="{{asset('logotip_SSU_2_h42.png')}}" width="35" height="42" alt="Логотип">
                </a>
                <h1>Особистий кабінет</h1>
                <ul class="dropdown menu float-right type-of-page" data-dropdown-menu data-close-on-click-inside>
                    <li class="is-dropdown-submenu-parent">
                        <a href="#" class="type-of-page__menu">Лекції</a>
                        <ul class="menu">
                            <li><a href="#" >Практики</a></li>
                            <li><a href="#">Лекції</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class="row expanded">
        <div id="top-notify" class="small-12 column text-center min-height-info notify">
            <b class="alert"></b>
            <b class="primary"></b>
        </div>
    </div>