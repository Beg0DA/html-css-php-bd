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
    <h4 align=center>Учебники для 3 курса</h4>
    <div class=flex>
        <div class=item>
            <div class=book-img>
                <img src="/img/Python_i_mashinnoe_obuchenie_2020_Rashka_Mirdzhalili.jpeg" class="img">
            </div>
            <p class=name>Python и машинное обучение</p>
            <p>Себастьян Рашка и Вахид Мирджалили</p>
            <p>Для 3 курса и дальше</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='/php/book.php?id=9'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
        <div class=item>
            <div class=book-img>
                <img src="/img/dizayn_Kniga_idey_veb.jpeg" class="img">
            </div>
            <p class=name>Веб-дизайн. Книга идей веб-разработчика </p>
            <p>Макнейл П.</p>
            <p>Для 3 курса и далее</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='/php/book.php?id=6' id=2>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
        <div class=item>
            <div class=book-img>
                <img src="/img/Kernighan_Ritchie_The_C_programming_language_2e.jpeg" class="img">
            </div>
            <p class=name>Язык программирования C</p>
            <p>Керниган Брайан У. и Ритчи Деннис М.</p>
            <p>Для 3 курса и далее</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='/php/book.php?id=23'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
    </div>
    <h4 align=center>Наша рекомендация</h4>
    <div class=flex>
        <div class=item>
            <div class=book-img>
                <img src="/img/Sozdanie_prilozhenii_774_dlya_smartfonov_i_planshetov_pod_OS.jpeg" class="img">
            </div>
            <p class=name>Создание приложений для смартфонов и планшетов под OC Android</p>
            <p>Фрайман Зэев</p>
            <p>Для любых групп</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='/php/book.php?id=10'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
        <div class=item>
            <div class=book-img>
                <img src="/img/_Sovershenny_kod_2.jpeg" class="img">
            </div>
            <p class=name>Совершенный код</p>
            <p>Макконнелл С.</p>
            <p>Для любых групп</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='/php/book.php?id=32'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
        <div class=item>
            <div class=book-img>
                <img src="/img/pragmatik_Put_ot_podmasterya_k_ma.jpeg" class="img">
            </div>
            <p class=name>Программист-прагматик от подмастерья к мастеру</p>
            <p>Хант Э. и Томас Д.</p>
            <p>Для любых групп</p>
            <p class=link><?php if (isset($_SESSION['login'])) {
                                echo "<a href='/php/book.php?id=4'>Посмотреть подробнее";
                            } else echo "<a href='../php/login.php'>Посмотреть подробнее"; ?></a></p>
        </div>
    </div>
    <footer>
    </footer>
</body>

</html>