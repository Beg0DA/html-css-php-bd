<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
</head>

<body>
    <header>
        <a href="index.php" class="start">ЭБМУ</a>
        <div class="dropdown" <?php if (isset($_SESSION['login'])) echo "style='margin-right:0%;'"; ?>>
            <button class="dropbtn">Выберите раздел</button>
            <div class="dropdown-content">
                <a href="/php/exams.php">Подготовка к экзаменам</a>
                <a href="/php/practice.php">Задачники</a>
                <a href="/php/1course.php">1 курс</a>
                <a href="/php/2course.php">2 курс</a>
                <a href="/php/3course.php">3 курс</a>
                <a href="/php/4course.php">4 курс</a>
            </div>
        </div>
        <?php if (isset($_SESSION['login'])) {
            $login = $_SESSION['login'];
            echo "<a href='php/out.php' class=user><h4 class=username>" . $login . "</h4>";
        } else echo "<a href='php/login.php' class=log><img src='/img/2.png' class=logo>"; ?></a>
    </header>
    <p class=login-text-up>Для получения доступа к скачиванию и просмотру учебных материалов просим войти вас под логином и паролем выданым вам в учебном заведении</p>
    <div class="container">
        <form action="../php/log.php" method="post">
            <label for="login">Логин</label>
            <input type="text" name="login" id="login" required>

            <label for="psw">Пароль</label>
            <input type="password" name="psw" id="psw" required>
            <input class=registerbtn value="Войти" type="submit">
    </div>
</body>

</html>