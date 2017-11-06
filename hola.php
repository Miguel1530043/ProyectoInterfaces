<!DOCTYPE html>
<html>
<head>
	<title>Hola</title>
</head>
<body>
	<form method="post" action="hola.php">
		<input type="text" name="user" placeholder="Puesto...">
		<select name ="hola">
			<option><?php echo "$Var";?></option>
		
		</select>
		<input type="submit" name="cargar" value="cargar">
	</form>
	<?php
		if (isset($_POST['cargar'])){
			$Var = $_POST['user'];
			
		}
	?>
</body>
</html>