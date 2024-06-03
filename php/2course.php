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
    <h4 align=center>Учебники для 2 курса</h4>
    <div class=flex>
        <div class=item>
            <div class=book-img>
                <img src="/img/uvlekat_nauka.jpeg" class="img">
            </div>
            <p class=name>Увлекательная наука математика</p>
            <p>Гусев И.Е.</p>
            <p>Для 2 курсов и дальше</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='/php/book.php?id=1'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
        <div class=item>
            <div class=book-img>
                <img src="/img/Linux_Ustanovka_nastroyka_administrirovanie.jpeg" class="img">
            </div>
            <p class=name>Linux. Установка, настройка, администрирование</p>
            <p>Кофлер М.</p>
            <p>Для 2 курсов и дальше</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='/php/book.php?id=24'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
        <div class=item>
            <div class=book-img>
                <img src="/img/Komandnaya_stroka_Linux_Polnoe_rukovodstvo.jpeg" class="img">
            </div>
            <p class=name>Командная строка Linux, полное руководство</p>
            <p>Шоттс У.</p>
            <p>Для 2 курсов и далее</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='/php/book.php?id=13'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
    </div>
    <h4 align=center>Наша рекомендация</h4>
    <div class=flex>
        <div class=item>
            <div class=book-img>
                <img src="/img/Pragmatichny_II_Mashinnoe_obuchenie_i_oblachnye_tekhnologii_2019_Gift.jpeg" class="img">
            </div>
            <p class=name>Прагматичный ИИ Машинное обучение и облачные технологии</p>
            <p>Ной Гифт</p>
            <p>Для любых групп</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='/php/book.php?id=19'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
        <div class=item>
            <div class=book-img>
                <img src="/img/Iskusstvenny_intellekt_s_primerami_na_Python_2019_Pratik_Dzhoshi.jpeg" class="img">
            </div>
            <p class=name>Искусственный интеллект с примерами на Python</p>
            <p>Пратик Джоши </p>
            <p>Для любых групп</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='/php/book.php?id=11'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
    </div>
    <footer>
    </footer>
</body>

</html>