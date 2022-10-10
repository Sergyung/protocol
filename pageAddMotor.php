<?php
	session_start();

	require 'connectBd.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Редактирование моторов</title>
</head>

<body>
	<form action="addMotor.php" method="post">
		<table>
			<tr>
				<td><label>Название мотора</label></td>
				<td><input type="text" name="ship"></td>
			</tr>
			<tr>
				<td><label>Номер двигателя</label></td>
				<td><input type="text" name="numMotor"></td>
			</tr>
			<!-- <tr>
				<td><label>Регистровый №</label></td>
				<td><input type="text" name="regNumber"></td>
			</tr> -->
			<tr>
				<td><label>Судно</label></td>
				<td><select name="ship">
	                <option value disabled selected>Выбери теплоход</option>
	                <?php
	                	$query = "SELECT * FROM ships"; 
						$result = mysqli_query($link, $query);
						 
						while($row = $result->fetch_assoc())
						{
						    echo '<option value ='.$row['idShip'].'>'.$row['ship'].'</option>';
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