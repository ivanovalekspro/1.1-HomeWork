<?php
	    $name = "Александр Иванов";
	    $age = 30;
	    $email = "ivanovalekspro@gmail.com";
	    $city = "Санкт-Петербург";
	    $info = "Студент Нетологии";
	?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Страница пользователя Иванов</title>
	<style>
		body {
    font-family: sans-serif;
}

		dl {
    display: table-row;
}

		dt, dd {
    display: table-cell;
    padding: 10px 20px;
}
	</style>
</head>

<body>
	<h1> Страница Иванов Александр.</h1>

	<dl>
		<dt>Имя:</dt>
		<dd> <?= $name ?> </dd>
	</dl>

	<dl>
		<dt>Возраст:</dt>
		<dd> <?= $age ?> </dd>
	</dl>

	<dl>
		<dt>Адрес электронной почты:</dt>
		<dd> <a href="mailto:ivanovalekspro@gmail.com"> <?= $email ?> </a> </dd>
	</dl>

	<dl>
		<dt>Город:</dt>
		<dd> <?= $city ?> </dd>
	</dl>

	<dl>
		<dt>О себе</dt>
		<dd> <?= $info ?> </dd>
	</dl>

</body>
</html>