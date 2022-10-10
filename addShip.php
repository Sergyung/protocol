<?php

	session_start();

	require 'connectBd.php';

	if (!empty($_POST['ship'])) {
		$ship = htmlspecialchars($_POST['ship']);
	} else {
		die('Вы забыли ввести название судна. <a href="pageAddShip.php">Вернуться на предыдущую страницу</a>');

	}

	if (!empty($_POST['project'])) {
		$project = htmlspecialchars($_POST['project']);
	} else {
		die('Вы забыли ввести название проекта судна. <a href="pageAddShip.php">Вернуться на предыдущую страницу</a>');

	}

	if (!empty($_POST['regNumber'])) {
		$regNumber = htmlspecialchars($_POST['regNumber']);
	} else {
		die('Вы забыли ввести название проекта судна. <a href="pageAddShip.php">Вернуться на предыдущую страницу</a>');

	}

	$officeId = $_POST['office'];


	$sql_office = "INSERT INTO ships (ship, officeId, project, regNumber)  VALUES ('$ship', '$officeId', '$project', '$regNumber')";

	$result = mysqli_query($link, $sql_office) or die( mysqli_error($link) );

	if (isset($result)) {
		echo '<h4>Запрос на добавление организации в базу данных прошел. <a href="pageAddShip.php">Вернуться на предыдущую страницу</a></h4>';
	}

?>