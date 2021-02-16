<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title ?></title>
</head>
<body>
	<nav>
		<a href="/">Главная</a>
		<a href="/books">Книги</a>
		<a href="/books/show/1">Показать книгу с id</a>
		<a href="/book">Добавление книги</a>
	</nav>
	<div>
		<?php include_once $content ?>
	</div>
	<footer>Footer</footer>
</body>
</html>