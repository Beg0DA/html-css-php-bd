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
    <h4 align=center>Учебники для 4 курса</h4>
    <div class=flex>
        <div class=item>
            <div class=book-img>
                <img src="/img/Python_i_analiz_dannykh_Vtoroe_izdanie_2020_Ues_Makkinni.jpeg" class="img">
            </div>
            <p class=name>Python и анализ данных</p>
            <p>Уэс Маккини</p>
            <p>Для 4 курса</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='/php/book.php?id=30'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
        <div class=item>
            <div class=book-img>
            <img src="/img/Python_Iskusstvenny_intellekt_bolshie_dannye_i_oblachnye_vychislenia_2020_Pol_Deytel_Kharvi_Deytel.jpeg" class="img">
            </div>
            <p class=name>Python: Искусственный интеллект, большие данные и облачные вычисления</p>
            <p>Дейтел Пол и Дейтел Харви</p>
            <p>Для 4 курса</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='/php/book.php?id=25'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
    </div>
    <h4 align=center>Наша рекомендация</h4> 
    <div class=flex>
        <div class=item>
            <div class=book-img>
            <img src="/img/Python_dlya_programmirovania_kriptovalyut_2020_Dzhimmi_Song.jpeg" class="img">
            </div>
            <p class=name>Python для программирования криптовалют</p>
            <p>Сонг Джимми</p>
            <p>Для любых групп</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='/php/book.php?id=5'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
        <div class=item>
            <div class=book-img>
            <img src="/img/Osvoy_samostoyatelno_C_po_odnomu_chasu_v_den_8.jpeg" class="img">
            </div>
            <p class=name>Освой самостоятельно C++ по одному часу в день</p>
            <p>Сиддхартха Рао</p>
            <p>Для любых групп</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='/php/book.php?id=15'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
        <div class=item>
            <div class=book-img>
            <img src="/img/Yazyk_programmirovania_S_Polnoe_rukovodstvo_2019_Lippman.jpeg" class="img">
            </div>
            <p class=name>Язык программирования C++. Полное руководство</p>
            <p>Липпман С. и Лажойе Ж.</p>
            <p>Для любых групп</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='/php/book.php?id=8'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
    </div>
    <div class=flex>
        <div class=item>
            <div class=book-img>
            <img src="/img/_Chisty_kod_Sozdanie_analiz_i_refaktoring.jpeg" class="img">
            </div>
            <p class=name>Чистый код: создание, анализ и рефакторинг. Библиотека программиста</p>
            <p>Мартин Р.</p>
            <p>Для любых групп</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='/php/book.php?id=18'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
        <div class=item>
            <div class=book-img>
            <img src="/img/M_Tamer_E_776_cy_Patrik_Valduries_Printsipy_organizatsii_raspredelennykh.jpeg" class="img">
            </div>
            <p class=name>Принципы организации распределенных баз данных</p>
            <p>Ёcy М. Т. и Вальдуриес П.</p>
            <p>Для любых групп</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='/php/book.php?id=27'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
        <div class=item>
            <div class=book-img>
            <img src="/img/Udalenny_server_svoimi_rukami_Ot_azov_sozdania_do_prakticheskoy_raboty_2021_Levitskiy.jpeg" class="img">
            </div>
            <p class=name>Удалённый сервер своими руками. От азов создания до практической работы</p>
            <p>Левицкий Н. Д. </p>
            <p>Для любых групп</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='/php/book.php?id=17'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
    </div>
    <footer>
    </footer>
</body>

</html>