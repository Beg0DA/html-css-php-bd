<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
</head>

<body>
    <header>
        <a href="../index.php" class="start">ЭБМУ</a>
        <div class="dropdown"<?php if (isset($_SESSION['login'])) echo "style='margin-right:0%;'"; ?>>
            <button class="dropbtn">Выберите раздел</button>
            <div class="dropdown-content">
                <a href="../php/exams.php">Подготовка к экзаменам</a>
                <a href="../php/practice.php">Задачники</a>
                <a href="../php/1course.php">1 курс</a>
                <a href="../php/2course.php">2 курс</a>
                <a href="../php/3course.php">3 курс</a>
                <a href="../php/4course.php">4 курс</a>
            </div>
        </div>
        <?php if (isset($_SESSION['login'])) {
            $login = $_SESSION['login'];
            echo "<a href='../php/out.php' class=user><h4 class=username>" . $login . "</h4>";
        } else echo "<a href='../php/login.php' class=log><img src='/img/2.png' class=logo>"; ?></a>
    </header>
    <h4 align=center>Учебники для 1 курса</h4>
    <div class=flex>
        <div class=item>
            <div class=book-img>
                <img src="/img/Elektronika_logicheskie_mikroskhemy_usiliteli_i_datchiki_dlya_nachinayuschikh_2015_Platt_Charlz.jpeg" class="img">
            </div>
            <p class=name>Злектроника логические микросхемы, усилители и датчики для начинающих</p>
            <p>Чарльз Платт</p>
            <p>Для 1 курса и дальше</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='../php/book.php?id=7' id=1>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
        <div class=item>
            <div class=book-img>
                <img src="/img/Dizayna_Rukovodstvo.jpeg" class="img">
            </div>
            <p class=name>Основы Web-Дизайна Руководство</p>
            <p>Рафал Томал</p>
            <p>Для 1 курса и дальше</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='../php/book.php?id=22'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
        <div class=item>
            <div class=book-img>
                <img src="/img/bazi_dannix.jpeg" class="img">
            </div>
            <p class=name>Базы данных</p>
            <p>Кузнецов Сергей Дмитриевич</p>
            <p>Для 1 курса и дальше</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='../php/book.php?id=29'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
    </div>
    <div class=flex>
        <div class=item>
            <div class=book-img>
                <img src="/img/Zaschita_setey_Podkhod_na_osnove_analiza_dannykh_2020_Maykl_Kollinz.jpeg" class="img">
            </div>
            <p class=name>Защита сетей. Подход на основе анализа данных</p>
            <p>Майкл Коллинз</p>
            <p>Для 1 курса и дальше</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='../php/book.php?id=35'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
        <div class=item>
            <div class=book-img>
                <img src="/img/Programmirovanie_na_JavaScript_v_primerah_i_zadachah.jpeg" class="img">
            </div>
            <p class=name>JavaScript в примерах и задачах </p>
            <p>Васильев Алексей Николаевич</p>
            <p>Для 1 курса и дальше</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='../php/book.php?id=26'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
    </div>
    <h4 align=center>Наша рекомендация</h4>
    <div class=flex>
        <div class=item>
            <div class=book-img>
                <img src="/img/Zhar_kholodnykh_chisl_i_pafos_besstrastnoy_logiki_1977_Biryukov_Boris.jpeg" class="img">
            </div>
            <p class=name>Жар холодных числ и пафос бесстрастной логики</p>
            <p>Б.В. Бирюков и В.Н. Тростников</p>
            <p>Для любых групп</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='../php/book.php?id=20'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
        <div class=item>
            <div class=book-img>
                <img src="/img/Lateralnaya_logika_Golovolomnyi_774_put_k_nestandartnomu_myshleniyu.jpeg" class="img">
            </div>
            <p class=name>Латеральная логика. Головоломный путь к нестандартному мышлению</p>
            <p>Гарет Мур</p>
            <p>Для любых групп</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='../php/book.php?id=34'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
        <div class=item>
            <div class=book-img>
                <img src="/img/osnovi_ai.jpeg" class="img">
            </div>
            <p class=name>Основы искусственного интеллекта нетехническое введение</p>
            <p>Том Таули</p>
            <p>Для любых групп</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='../php/book.php?id=12'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
    </div>
    <footer>
    </footer>
</body>

</html>