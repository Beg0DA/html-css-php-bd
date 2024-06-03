<?php
session_start();
require('db.php');
if (isset($_GET['id'])) {
	$stmt = $conn->prepare('select * from books where id=?');
	$stmt->execute([$_GET['id']]);
	$book = $stmt->fetch();
}
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Книга <?= $book['name'] ?></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="../css/styles.css" />
</head>
<header>
	<a href="../index.php" class="start" style="margin-left: 1%;">ЭБМУ</a>
	<div class="dropdown">
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
	} else echo "<a href='../php/login.php' class=log><img src='../img/2.png' class=logo>"; ?></a>
</header>
<!-- book -->
<article class="book">
	<div class="title">
		<h2 style="margin-top: 1%;">
			<?= $book['name'] ?>
		</h2>
		<p class="book" style="margin-left: 0%; padding-top:1%; padding-bottom:1%">
			<?= $book['author'] ?>
		</p>
		<img src="<?= $book['img_path'] ?>" class="img1">
	</div>
	<p class="book" style="margin-left: 0%; padding-top:0.5%; padding-bottom:0.5%;">
		<?= $book['for_whom'] ?>
	</p>
	<a href="<?= $book['link'] ?>">Скачать/прочитать электронную версию</a>
</article>
</div>
</body>

</html>