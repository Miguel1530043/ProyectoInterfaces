<?php
	session_start();
	require("conexion.php");
	$email = $_GET['correo'];
	if(isset($_POST['baja'])){
        $nombre = $_POST['ep'];

        $Delete = mysqli_query($conexion, "DELETE FROM empleado WHERE '$nombre' like nombre");
        //echo $nombre;
        $exito = 1;
        echo "<script>document.location.href='baja_empleado.php?correo=$email&exito=$exito';</script>";
    }else if(isset($_POST['eliminar'])){
        $prod = $_POST['menu'];
        $Delete = mysqli_query($conexion, "DELETE  FROM productos WHERE '$prod' = nombre");
        $exito = 1;
        echo "<script>document.location.href='eliminar_producto.php?correo=$email&exito=$exito';</script>";
    }

?>