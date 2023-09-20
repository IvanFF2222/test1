<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$CurDir = $APPLICATION->GetCurDir();
$CurUri = $APPLICATION->GetCurUri();
?>
<!doctype html>
<html lang="ru">
<head>
    <?
    use Bitrix\Main\Page\Asset;
    // Подключение JS
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery-3.6.0.min.js');
    // Подключение CSS
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/css/bootstrap-grid.min.css');
    $APPLICATION->ShowHead();
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><? $APPLICATION->ShowTitle() ?></title>
</head>
<body>

<?
$APPLICATION->ShowPanel();
?>


<header class="site-header">

    <div class="header-top">
        <div class="container">
            <div class="header-row">
                <div class="number"><a href="tel:8 (4872) 31-13-45">8 (4872) 31-13-45</a></div>
                <div class="center-logo"><img src="<?=SITE_TEMPLATE_PATH?>/img/ins.png" alt=""></div>
                <div class="button2">
                    <div class="form-group3">
                        <div class="dropdown3">
                            <button class="dropdown_button3">Оставить заявку</button>
                            <ul class="dropdown_list3">
                                <li class="dropdown_list-item3-1"><input type="text" placeholder="ФИО"></li>
                                <li class="dropdown_list-item3-2"><input type="text" placeholder="Телефон"></li>
                                <li class="dropdown_list-item3">
                                    <div class="form-group1">
                                        <div class="dropdown1">
                                            <button class="dropdown_button1">Должность</button>
                                            <img class="strelka1" src="<?=SITE_TEMPLATE_PATH?>/img/strelka.png" alt="">
                                            <ul class="dropdown_list1">
                                                <li class="dropdown_list-item1">Репетитор</li>
                                                <li class="dropdown_list-item1">Гувернантка</li>
                                                <li class="dropdown_list-item1">Няня</li>
                                                <li class="dropdown_list-item1">Водитель</li>
                                                <li class="dropdown_list-item1">Садовник</li>
                                            </ul>
                                        </div>
                                        <script src="local/templates/maket/js/myscripts1.js"></script>
                                    </div>
                                </li>
                                <li class="dropdown_list-item3">
                                    <div class="form-group2">
                                        <div class="dropdown2">
                                            <button class="dropdown_button2">График работы</button>
                                            <img class="strelka2" src="<?=SITE_TEMPLATE_PATH?>/img/strelka.png" alt="">
                                            <ul class="dropdown_list2">
                                                <li class="dropdown_list-item2">Полный день</li>
                                                <li class="dropdown_list-item2">Пол дня</li>
                                                <li class="dropdown_list-item2">График работы</li>
                                                <li class="dropdown_list-item2">Несколько часов</li>
                                                <li class="dropdown_list-item2">Круглосуточно</li>
                                            </ul>
                                        </div>
                                        <script src="local/templates/maket/js/myscripts2.js"></script>
                                    </div>
                                </li>
                                <li class="dropdown_list-item3-3"><input type="text" placeholder="Дополнительная информация"></li>
                                <div class="button13"><button class="button12">ОТПРАВИТЬ</button></div>
                            </ul>
                        </div>
                        <script src="local/templates/maket/js/myscripts3.js"></script>
                    </div>
                    <div class="button4">
                        <div class="form-group4">
                            <div class="dropdown4">
                                <button class="dropdown_button4">Отправить резюме</button>
                                <ul class="dropdown_list4">
                                    <li class="dropdown_list-item4-1"><input type="text" placeholder="ФИО"></li>
                                    <li class="dropdown_list-item4-2"><input type="text" placeholder="Телефон"></li>
                                    <li class="dropdown_list-item4">
                                        <div class="form-group5">
                                            <div class="dropdown5">
                                                <button class="dropdown_button5">Должность</button>
                                                <img class="strelka1" src="<?=SITE_TEMPLATE_PATH?>/img/strelka.png" alt="">
                                                <ul class="dropdown_list5">
                                                    <li class="dropdown_list-item5">Репетитор</li>
                                                    <li class="dropdown_list-item5">Гувернантка</li>
                                                    <li class="dropdown_list-item5">Няня</li>
                                                    <li class="dropdown_list-item5">Водитель</li>
                                                    <li class="dropdown_list-item5">Садовник</li>
                                                </ul>
                                            </div>
                                            <script src="local/templates/maket/js/myscripts5.js"></script>
                                        </div>
                                    </li>
                                    <li class="dropdown_list-item4-3"><input type="text" placeholder="Образование"></li>
                                    <li class="dropdown_list-item4-4"><label for="files" class="btn">Прикрепить резюме</label><input id="files" style="display:none;" type="file"></li>
                                    <div class="button15"><button class="button14">ОТПРАВИТЬ</button></div>
                                </ul>
                            </div>
                            <script src="local/templates/maket/js/myscripts4.js"></script>
                            <script src="local/templates/maket/js/rez.js"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="b1">
        <span></span>
    </div>

    <div class="menu">
        <div class="border">
            <span class="border1"></span>
            <span class="border2"></span>
            <span class="border3"></span>
            <span class="border4"></span>
        </div>
        <ul>
            <li class="a1"><a class="txt2" href="/">ГЛАВНАЯ</a></li>
            <li class="a3"><a class="txt2" href="podobrat-personal.php"><div class="button">ПОДОБРАТЬ <br> ПЕРСОНАЛ</div></a>
                <ul>
                    <li class="txt3"><a class="vp1" href="#">О нас</a></li>
                    <li class="txt3"><a class="vp1" href="#">Задать вопрос</a></li>
                    <li class="txt3"><a class="vp1" href="#">Это интересно</a></li>
                    <li class="txt3"><a class="vp1" href="#">Отзывы</a></li>
                </ul>
            </li>
            <li class="a1"><a class="txt2" href="#">ЦЕНЫ</a></li>
        </ul>
        <div class="logo">
            <a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo2.png" alt=""></a>
        </div>
        <ul>
            <li class="a2"><a class="txt2" href="#">ОСТАВИТЬ <br> ЗАЯВКУ</a></li>
            <li class="a2"><a class="txt2" href="#">ОСТАВИТЬ <br> ВАКАНСИЮ</a></li>
            <li class="a1"><a class="txt2" href="#">КОНТАКТЫ</a></li>
        </ul>
    </div>

    <div class="cont">
        <div class="switch">
            <input type="radio" name="slider" id="1" checked>
            <input type="radio" name="slider" id="2">
            <input type="radio" name="slider" id="3">
            <input type="radio" name="slider" id="4">
            <input type="radio" name="slider" id="5">
            <input type="radio" name="slider" id="6">

            <div class="controls">
                <label for="1"></label>
                <label for="2"></label>
                <label for="3"></label>
                <label for="4"></label>
                <label for="5"></label>
                <label for="6"></label>
            </div>

            <div class="wrapper">
                <div class="box">

                </div>

                <div class="box">

                </div>

                <div class="box">

                </div>

                <div class="box">

                </div>

                <div class="box">

                </div>

                <div class="box">

                </div>
            </div>
        </div>
    </div>


    <div class="b2"></div>
    <div class="border5"></div>
</header>