<?php
	session_start();

	require 'connectBd.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Редактирование кораблей</title>
</head>

<body>
	<form action="addShip.php" method="post">
		<table>
			<tr>
				<td><label>Название судна</label></td>
				<td><input type="text" name="ship"></td>
			</tr>
			<tr>
				<td><label>Проект</label></td>
				<td><input type="text" name="project"></td>
			</tr>
			<tr>
				<td><label>Регистровый №</label></td>
				<td><input type="text" name="regNumber"></td>
			</tr>
			<tr>
				<td><label>Судовладелец</label></td>
				<td><select name="office">
	                <option value disabled selected>Выбери организацию</option>
	                <?php
	                	$query = "SELECT * FROM offices"; 
						$result = mysqli_query($link, $query);
						 
						while($row = $result->fetch_assoc())
						{
						    echo '<option value ='.$row['idOffice'].'>'.$row['abbreviated'].'</option>';
						}
					?>
				</select></td>
			</tr>
			<tr>
				<td><input type="submit" name="enterShip" value="Записать"></td>
			</tr>
		</table>
	</form>
	<p><a href="index.php">Возврат назад</a></p>

	<br>
		
</body>
</html>