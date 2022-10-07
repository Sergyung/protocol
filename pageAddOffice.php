<?php
	session_start();

	require 'connectBd.php';
			
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Добавление организации</title>
</head>

<body>
	<form action="addOffice.php" method="post">
		<table>
			<tr>
				<td><label>Полное название организации</label></td>
				<td><input type="text" name="office"></td>
			</tr>
			<tr>
				<td><label>Сокращенное название организации</label></td>
				<td><input type="text" name="abbreviated"></td>
			</tr>
			<tr>
				<td><label>Должность начальника</label></td>
				<td><input type="text" name="middleName" disabled></td>
			</tr>
			<tr>
				<td><label>Фамилия начальника</label></td>
				<td><input type="text" name="dateBirth" disabled></td>
			</tr>
			<tr>
				<td><label>Адрес организации</label></td>
				<td><input type="text" name="dateJob" disabled></td>
			</tr>
				<td><label>Подразделение</label></td>
				<td></td>
			
			<tr>
				<td><label>Должность</label></td>
	            <td></td>
			</tr>
			<tr>
				<td><label>Дата назначения</label></td>
				<td><input type="text" name="datePost" disabled></td>
			</tr>	
			<tr>
				<td><input type="submit" name="enter_ship" value="Записать"></td>
			</tr>
	</table>
	</form>
	<p><a href="index.php">Возврат назад</a></p>

	<br>
		
</body>
</html>