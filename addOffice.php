<?php

	session_start();

	require 'connectBd.php';

	if (!empty($_POST['office'])) {
		$office = htmlspecialchars($_POST['office']);
	} else {
		die('Вы забыли ввести полное название организации. <a href="pagePost.php">Вернуться на предыдущую страницу</a>');

	}

	if (!empty($_POST['abbreviated'])) {
		$abbreviated = htmlspecialchars($_POST['abbreviated']);
	} else {
		die('Вы забыли ввести сокращенное название организации. <a href="pagePost.php">Вернуться на предыдущую страницу</a>');

	}

	$sql_office = "INSERT INTO offices (office, abbreviated)  VALUES ('$office','$abbreviated')";

	$result = mysqli_query($link, $sql_office) or die( mysqli_error($link) );

	if (isset($result)) {
		echo '<h4>Запрос на добавление организации в базу данных прошел. <a href="pageAddOffice.php">Вернуться на предыдущую страницу</a></h4>';
	}

?>