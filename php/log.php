<?php
require('../php/db.php');
if (!empty($_POST['login']) && !empty($_POST['psw'])) {
    $stmt = $conn->prepare("select * from user where login=? and password=?");
    $stmt->execute([$_POST['login'], $_POST['psw']]);
    $login = $_POST['login'];
}
$user = $stmt->fetch();
if ($user) {
    session_start();
    $_SESSION['login'] = $login;
    header("Location: ../index.php");
} else {
    echo "Введённые данные некорректны";
}
