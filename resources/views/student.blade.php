<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cabinet.sumdu.edu.ua/public/css/cabinet.min.css">
<!--    <link rel="stylesheet" href="../styles/common.css">-->
    <link href="{{ asset('/css/common.css') }}" rel="stylesheet">

<!--    <link rel="stylesheet" href="../styles/student.css">-->
{{--    <script defer type="text/javascript" src="../js/what-input.js"></script>--}}
    <script defer type="text/javascript" src="{{ asset('../js/what-input.js') }}"></script>

</head>
<body>



<main>
        <div class="row expanded">
            <div class="large-12 columns ">
                <div class="top-bar cabinet">
                    <div class="large-12 column">
                        <a class="float-left" style="display: block;" href="http://sumdu.edu.ua" title="Сумський державний університет">
                            <img src="{{ asset('logotip_SSU_2_h42.png') }}" width="35" height="42" alt="Логотип">
                        </a>
                        <h1>Особистий кабінет</h1>

                    </div>
                </div>
            </div>
        </div>
        <div class="row expanded">
            <div id="top-notify" class="small-12 column text-center min-height-info notify">
                <b class="alert"></b>
                <b class="primary"></b>
            </div>
        </div>

        <section id="top-blocks" class="row " data-equalizer="top-blocks" data-resize="top-blocks">
            <section class="xmedium-6 column">
                <article class="callout margin-info-xmedium clearfix" data-equalizer-watch="top-blocks" style="height: 382px;">
                    <h5 class="callout hide-for-xmedium small minimize-padding cabinet margins max">
                        <i></i>
                        <span>Інформація</span>
                    </h5>
                    <h5 class="callout small show-for-xmedium cabinet margins">Інформація</h5>
                    <div id="information" class="column small-12 show-for-xmedium">
                        <p class="first-paragraph">
                            Шановні студенти та співробітники СумДУ!
                        </p>
                        <p>
                            Електронний особистий кабінет – це єдине вікно доступу до різноманітних інформаційних сервісів, які дозволять Вам зручно та своєчасно отримувати персоналізовану інформацію щодо Вашого навчання та роботи в СумДУ.
                        </p>
                        <p>
                            УВАГА! Електронний особистий кабінет працює у тестовому режимі. Просимо вибачення за можливі незручності. <br>
                        </p>
                        <p>
                            <i>У разі необхідності перереєстрації з новою електронною адресою просимо звертатися  до технічної підтримки</i> <a href="mailto:cabinet@sumdu.edu.ua">cabinet@sumdu.edu.ua</a>.
                        </p>        </div>
                </article>
            </section>
            <section class="xmedium-6 columns ">
                <div class="callout paddings " data-equalizer-watch="top-blocks" style="height: 382px;">
                    <article class="m-h100">
                        <h5 class="callout cabinet small one-icon">Користувач</h5>
                        <div class="small-12 column none">
                            <h4 class="large-4 xmedium-2 medium-2 xxsmall-2 small-3 column none">
                                Ваценко<br> Андрій<br> Володимирович</h4>
                            <div id="avatar" class="large-4 xmedium-4 medium-3 xxsmall-4 xlsmall-5 ssmall-7 small-12 column none ssmall-text-right small-text-left">
                                <div id="person-photo">
                                    <img src="{{asset('getphoto.jpg')}} " height="128" width="128" alt="Фотографія">
                                </div>
                            </div>
                        </div>
                    </article>
                    <nav class="clearfix negative-m-t">
                        <a href="/settings" class="button m-t" title="Налаштування">Налаштування</a>
                        <a href="/user/logout" class="button m-t" title="Вихід">Вихід</a>
                    </nav>
                </div>
            </section>
        </section>
        <div class="row expanded">
            <div class="small-12 column text-center min-height-info notify">
                <b class="alert"></b>
                <b class="primary"></b>
            </div>
        </div>


        <div class="row">
            <div class="small-12 columns">
                <div id="groups" class="callout clearfix margin-info padding-top">
                    <div id="group17520310" class="small-12 columns l-b-r group">
                        <h5 class="callout cabinet small clearfix  margin-bottom one-icon">
                            Журнали
                        </h5>

                    </div>
                    <div class="columns">
                        <ul class="accordion" data-accordion>
                            <li class="accordion-item is-active" data-accordion-item>
                                <a href="#" class="accordion-title">Чисельні методи<i class="fas fa-plus"></i></a>
                                <div class="accordion-content" data-tab-content >
                                    <div class="show-for-medium table-scroll">
                                        <table class="m-b-n b-none custom stack">
                                            <caption>Практики</caption>
                                            <thead>

                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>Дати</td>
                                                    <td>30.03</td>
                                                    <td>30.03</td>
                                                    <td>30.03</td>
                                                    <td>30.03</td>
                                                    <td>30.03</td>
                                                    <td>30.03</td>
                                                    <td>30.03</td>
                                                    <td>30.03</td>
                                                    <td>30.03</td>
                                                    <td>Тест</td>
                                                    <td>Сумма</td>
                                                </tr>
                                            <tr>
                                                <td>Бали</td>
                                                <td>5</td>
                                                <td>5</td>
                                                <td>5</td>
                                                <td>5</td>
                                                <td>5</td>
                                                <td>5</td>
                                                <td>5</td>
                                                <td>5</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>30</td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="show-for-medium table-scroll">
                                        <table class="m-b-n b-none custom ">
                                            <caption>Лекції</caption>
                                            <thead>
                                            <tr>
                                                <th>Дати</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>01.04</th>
                                                <th>01.04</th>
                                                <th>01.04</th>
                                                <th>Тест</th>
                                                <th>Сумма</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Бали</td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>1</div>
                                                </td>
                                                <td>
                                                    <div>1</div>
                                                </td>

                                                <td>
                                                    <div>1</div>
                                                </td>
                                                <td>
                                                    <div>0.9</div>
                                                </td>
                                                <td>
                                                    <div>15</div>
                                                </td>
                                                <td>
                                                    <div>65</div>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item" data-accordion-item>
                                <a href="#" class="accordion-title">Математичні методи</a>
                                <div class="accordion-content" data-tab-content >
                                    <div class="show-for-medium table-scroll">
                                        <table class="m-b-n b-none custom ">
                                            <caption>Практики</caption>
                                            <thead>
                                            <tr>
                                                <th>Дати</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>01.04</th>
                                                <th>01.04</th>
                                                <th>01.04</th>
                                                <th>Тест</th>
                                                <th>Сумма</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Бали</td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>1</div>
                                                </td>
                                                <td>
                                                    <div>1</div>
                                                </td>

                                                <td>
                                                    <div>1</div>
                                                </td>
                                                <td>
                                                    <div>0.9</div>
                                                </td>
                                                <td>
                                                    <div>15</div>
                                                </td>
                                                <td>
                                                    <div>65</div>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="show-for-medium table-scroll">
                                        <table class="m-b-n b-none custom">
                                            <caption>Лекції</caption>
                                            <thead>
                                            <tr>
                                                <th>Дати</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>01.04</th>
                                                <th>01.04</th>
                                                <th>01.04</th>
                                                <th>Тест</th>
                                                <th>Сумма</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Бали</td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>1</div>
                                                </td>
                                                <td>
                                                    <div>1</div>
                                                </td>

                                                <td>
                                                    <div>1</div>
                                                </td>
                                                <td>
                                                    <div>0.9</div>
                                                </td>
                                                <td>
                                                    <div>15</div>
                                                </td>
                                                <td>
                                                    <div>65</div>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item" data-accordion-item>
                                <a href="#" class="accordion-title">Англійська мова</a>
                                <div class="accordion-content" data-tab-content >
                                    <div class="show-for-medium table-scroll">
                                        <table class="m-b-n b-none custom ">
                                            <caption>Практики</caption>
                                            <thead>
                                            <tr>
                                                <th>Дати</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>01.04</th>
                                                <th>01.04</th>
                                                <th>01.04</th>
                                                <th>Тест</th>
                                                <th>Сумма</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Бали</td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>1</div>
                                                </td>
                                                <td>
                                                    <div>1</div>
                                                </td>

                                                <td>
                                                    <div>1</div>
                                                </td>
                                                <td>
                                                    <div>0.9</div>
                                                </td>
                                                <td>
                                                    <div>15</div>
                                                </td>
                                                <td>
                                                    <div>65</div>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="show-for-medium table-scroll">
                                        <table class="m-b-n b-none custom ">
                                            <caption>Лекції</caption>
                                            <thead>
                                            <tr>
                                                <th>Дати</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>30.03</th>
                                                <th>01.04</th>
                                                <th>01.04</th>
                                                <th>01.04</th>
                                                <th>Тест</th>
                                                <th>Сумма</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Бали</td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>0.8</div>
                                                </td>
                                                <td>
                                                    <div>1</div>
                                                </td>
                                                <td>
                                                    <div>1</div>
                                                </td>

                                                <td>
                                                    <div>1</div>
                                                </td>
                                                <td>
                                                    <div>0.9</div>
                                                </td>
                                                <td>
                                                    <div>15</div>
                                                </td>
                                                <td>
                                                    <div>65</div>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
     <footer id="footer" class="row">
            <div class="small-12 columns ">
                <div class="top-bar" style="margin-bottom:0;">
                    <div class="large-12 column none">
                        <a href="/person/search" class="float-left" title="Візитки користувачів"><small>Візитки користувачів (41)</small></a>                        <small class="float-right">© Центр інформаційних систем 2019</small>
                    </div>
                </div>
            </div>
        </footer>
</body>


<script type="text/javascript" src="{{ asset('/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/foundation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/custom/change_type_of_table.js') }}"></script>
</html>