<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
</head>

<body>
    <header>
        <a href="index.php" class="start">ЭБМУ</a>
        <div class="dropdown"<?php if (isset($_SESSION['login'])) echo "style='margin-right:0%;'"; ?>>
            <button class="dropbtn">Выберите раздел</button>
            <div class="dropdown-content">
                <a href="php/exams.php">Подготовка к экзаменам</a>
                <a href="php/practice.php">Задачники</a>
                <a href="php/1course.php">1 курс</a>
                <a href="php/2course.php">2 курс</a>
                <a href="php/3course.php">3 курс</a>
                <a href="php/4course.php">4 курс</a>
            </div>
        </div>
        <?php if (isset($_SESSION['login'])) {
            $login = $_SESSION['login'];
            echo "<a href='php/out.php' class=user><h4 class=username>" . $login . "</h4>";
        } else echo "<a href='php/login.php' class=log><img src='/img/2.png' class=logo>"; ?></a>
    </header>
    <h4 align=center>Самые просматриваемые секции</h4>
    <h4 align=center>Учебники для подготовки к экзаменам</h4>
    <div class=flex>
        <div class=item>
            <div class=book-img>
                <img src="/img/Python_Luchshie_praktiki_i_instrumenty_3_izd_2021_Mikhal_Yavorski_Tarek_Ziade.jpeg" class="img">
            </div>
            <p class=name>Python лучшие практики и инструменты</p>
            <p>Михал Яворски и Тарек Зиаде</p>
            <p>Для 2 курса и далее</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='php/book.php?id=28'>Посмотреть подробнее";
                            } else echo "<a href='php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
        <div class=item>
            <div class=book-img>
                <img src="/img/Shablony_C_Spravochnik_razrabotchika_2.jpeg" class="img">
            </div>
            <p class=name>Шаблоны C++ справочник разработчика</p>
            <p>Дэвид Вандервуд, Николаи М. Джосаттис и Дуглас Грегор</p>
            <p>Для 3 курса</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='php/book.php?id=14'>Посмотреть подробнее";
                            } else echo "<a href='php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
        <div class=item>
            <div class=book-img>
                <img src="/img/ekzamen_09_02_06_KOD_1_1.png" class="img">
            </div>
            <p class=name>Сетевое и системное администрирование</p>
            <p>Уймин А.Г.</p>
            <p>Для последних курсов</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='php/book.php?id=21'>Посмотреть подробнее";
                            } else echo "<a href='php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
    </div>
    <h4 align=center>Учебники для выполнения практических заданий</h4>
    <div class=flex>
        <div class=item>
            <div class=book-img>
                <img src="/img/Kotlin_programmirovanie_na_primerakh_2020_Adelekan_Ianu.jpeg" class="img">
            </div>
            <p class=name>Kotlin программироание на примерах</p>
            <p>Аделекан И.</p>
            <p>Для 3 курс а и далее</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='php/book.php?id=3'>Посмотреть подробнее";
                            } else echo "<a href='php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
        <div class=item>
            <div class=book-img>
                <img src="/img/Java_Reshenie_prakticheskikh_zadach_2021_Leonard_Andzhel.jpeg" class="img">
            </div>
            <p class=name>Java решение практических задач</p>
            <p>Леонард А.</p>
            <p>Для 3 курса и далее</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='php/book.php?id=2'>Посмотреть подробнее";
                            } else echo "<a href='php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
        <div class=item>
            <div class=book-img>
                <img src="/img/S_na_primerakh.jpeg" class="img">
            </div>
            <p class=name>C# на примерах</p>
            <p>Евдокимов П. В.</p>
            <p>Для 2 курса и далее</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='php/book.php?id=16'>Посмотреть подробнее";
                            } else echo "<a href='php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
    </div>
    <footer>
    </footer>
</body>

</html>