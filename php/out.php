<?php
session_start(); // Включаем сессии

if (isset($_SESSION['login'])) {
    unset($_SESSION['login']); // Удаляем переменную из сессии
}

header('Location: ../index.php'); // Перенаправляем на страницу входа
exit();
?>