<!DOCTYPE html>
<html lang="ru" >
<head>
	<meta charset="UTF-8">
    <title>DniproMedical</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" href="css/bootstrap.min.css" media="all" />
	<link rel="stylesheet" href="css/slider-pro.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
	<div class="main-container">
		<header class="mdc-header mdc-style-01">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-lg-4 head_logo">
                            <img src="img/logo.jpg">
                        </div>
                        <div class="head_phone col-sm-3 col-lg-2 ">
                            <span class="head_phone_one">+38 (067) 105-39-78</span><br>
                            <span class="head_phone_two">+38 (067) 105-39-78</span>
                        </div>
                        <div class="col-sm-3 col-lg-2  head_time">
                            <span>с 10-00 до 19-00</span><br>
                            <span>Сб и Вс до 17-00</span>
                        </div>
                        <div class="col-sm-3 head_adress">
                            <span class="geo">г. Днепр</span><br>
                            <span class="geo">ул. Херсонская 10-а</span>
                        </div>
                    </div>
                </div>
                <div id="menu_mob" onclick="block();"><p>меню</p><img src="img/12.png" alt="menu"></div>
                <div id="menu">
                    <ul><li id="back" onclick="none();"><a href=""><</a></li>
                        <li><a href="index.php">Главная</a></li>
                        <li><a href="consult.php?id=с1">Консультации</a></li>
                        <li><a href="servise.php">Услуги</a></li>
                        <li><a href="index.php#about">О Нас</a></li>
                        <li><a href="blog.php">Блог</a></li>
                        <li><a href="">Магазин</a></li></li>
                    </ul>
                </div>
            </div>

            <div class="header-bottom">
                <div class="container">

                    <div class="row mdc-custom-row-02">
                        <div class="col-md-11 col-sm-12 col-xs-12 mdc-col-left" style="margin-left: -20px;
">
                            <nav class="mdc-main-menu">
                                <ul>
                                    <li><a href="index.php">Главная</a></li>
                                    <li><a href="consult.php?id=с1">Консультации</a>
                                        <ul>
                                            <li><a href="consult.php?id=c1"><i class="ti-angle-right"></i>Онколог</a></li>
                                            <li><a href="consult.php?id=c2"><i class="ti-angle-right"></i>Дерматолог</a></li>
                                            <li><a href="consult.php?id=c3"><i class="ti-angle-right"></i>Онкодерматолог</a></li>
                                            <li><a href="consult.php?id=c4"><i class="ti-angle-right"></i>Уролог</a></li>
                                            <li><a href="consult.php?id=c5"><i class="ti-angle-right"></i>Гинеколог</a></li>
                                            <li><a href="consult.php?id=c6"><i class="ti-angle-right"></i>Мамолог</a></li>
                                            <li><a href="consult.php?id=c7"><i class="ti-angle-right"></i>Венеролог</a></li>
                                            <li><a href="consult.php?id=c8"><i class="ti-angle-right"></i>Косметолог</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="servise.php">Услуги</a>
                                        <ul style="width: 370px;">
                                            <li><a href="servise.php#ud1"><i class="ti-angle-right"></i>Дерматология</a>
                                                <ul>
                                                    <li><a href="servise.php#ud1"><i class="ti-angle-right"></i>Радиоволновая хирургия</a>
                                                    <li><a href="servise.php#ud2"><i class="ti-angle-right"></i>Гистологическое исследование</a></li>
                                                    <li><a href="servise.php#ud3"><i class="ti-angle-right"></i>Дерматоскопия эксперт уровня</a></li>
                                                    <li><a href="servise.php#ud4"><i class="ti-angle-right"></i>Диспансерная дерматоскопия</a></li>
                                                    <li><a href="servise.php#ud5"><i class="ti-angle-right"></i>Составление карты "родинок"</a></li>
                                               </ul>
                                            </li>

                                            <li><a href="servise.php#um1"><i class="ti-angle-right"></i>Маммология</a>
                                                <ul>
                                                    <li><a href="servise.php#um1"><i class="ti-angle-right"></i>УЗД молочной железы</a></li>
                                                    <li><a href="servise.php#um2"><i class="ti-angle-right"></i> Биопсия молочной железы</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="servise.php#ug1"><i class="ti-angle-right"></i>Геникология</a>
                                                <ul>
                                                    <li><a href="servise.php#ug1"><i class="ti-angle-right"></i>Гинекологический осмотр</a></li>
                                                    <li><a href="servise.php#ug1"><i class="ti-angle-right"></i>Обследование ЗППП</a></li>
                                                    <li><a href="servise.php#uu1"><i class="ti-angle-right"></i>Лечение ЗППП</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="servise.php#uu1"><i class="ti-angle-right"></i>Урология</a>
                                                <ul>
                                                    <li><a href="servise.php#uu2"><i class="ti-angle-right"></i>Урологиический осмотр</a></li>
                                                    <li><a href="servise.php#uu1"><i class="ti-angle-right"></i>Обследование ЗППП</a></li>
                                                    <li><a href="servise.php#uu1"><i class="ti-angle-right"></i>Лечение ЗППП</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="servise.php#ue1"><i class="ti-angle-right"></i>Эстетическая медицина</a>
                                                <ul>
                                                    <li><a href="servise.php#ue1"><i class="ti-angle-right"></i>Плазмолифтинг</a></li>
                                                    <li><a href="servise.php#ue2"><i class="ti-angle-right"></i>Контурная пластика</a></li>
                                                    <li><a href="servise.php#ue3"><i class="ti-angle-right"></i>Ботулотоксины</a></li>
                                                    <li><a href="servise.php#ue4"><i class="ti-angle-right"></i>Биоревитализация</a></li>
                                                    <li><a href="servise.php#ue5"><i class="ti-angle-right"></i>Пилинги</a></li>
                                                    <li><a href="servise.php#ue6"><i class="ti-angle-right"></i>Уходы</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="servise.php#uk1"><i class="ti-angle-right"></i>Косметология</a>
                                                <ul>
                                                    <li><a href="servise.php#uk1"><i class="ti-angle-right"></i>Лазерная косметология</a></li>
                                                    <li><a href="servise.php#uk2"><i class="ti-angle-right"></i>Радиоволновая косметология</a></li>
                                                </ul>
                                            </li>


                                        </ul>
                                    </li>
                                    <li><a href="index.php#about">О Нас</a> </li>
                                    <li><a href="blog.php">Блог</a>
                                        <ul>
                                            <li><a href="blog.php"><i class="ti-angle-right"></i>Галлерея</a></li>
                                            <li><a href="blog.php"><i class="ti-angle-right"></i>Видео</a></li>
                                            <li><a href="blog.php"><i class="ti-angle-right"></i>Новости</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Магазин</a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
