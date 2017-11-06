<?php
	session_start();
	require("conexion.php");
	$email = $_GET['correo'];
	if(isset($_POST['modificar_e'])){
		$id = $_POST['id'];
        $salario = $_POST['salario'];
        $nombre = $_POST['nom'];
        $apellidos = $_POST['ap'];
        $sexo = $_POST['sexo'];
        $edad = $_POST['edad'];
        $correo = $_POST['email'];
        $telefono = $_POST['telefono'];
        $Update = mysqli_query($conexion, "UPDATE empleado SET nombre = '$nombre', apellidos = '$apellidos',sexo ='$sexo', edad = $edad, correo ='$correo',telefono='$telefono', salario = $salario WHERE id = $id");
        $exito = 1;
        echo "<script>document.location.href='modificar_empleado.php?correo=$email&exito=$exito';</script>";
    }else if(isset($_POST['modificar_p'])){
        $id = $_POST['id'];
        $nombre = $_POST['nom'];
        $tipo = $_POST['tipo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $Update = mysqli_query($conexion, "UPDATE productos SET nombre = '$nombre', tipo = '$tipo', precio = $precio, descripcion = '$descripcion' WHERE id = $id");
        $exito = 1;
        echo "<script>document.location.href='modificar_producto.php?correo=$email&exito=$exito';</script>";
    }

?>

