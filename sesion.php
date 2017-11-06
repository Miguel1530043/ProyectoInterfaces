<?php
	require("conexion.php");
	if(isset($_POST['sesion'])){
		$email = $_POST['correo'];
		$pass=$_POST['password'];
	}
	if($email == "1530043@upv.edu.mx"){
	    $cons = "SELECT * FROM administrador WHERE correo = '$email'";
	    $cons2 = "SELECT * FROM administrador WHERE contrasena = '$pass'";
	    $res =  mysqli_query($conexion,$cons);
	    $p = mysqli_fetch_array($res);
	    $res2 =  mysqli_query($conexion,$cons2);
	    $cont1 = mysqli_num_rows($res);
	    $cont2 = mysqli_num_rows($res2);
	    if($cont1==1 && $cont2==1){
	        $_SESSION['inicio_sesion']="dog";
	        echo "<script>document.location.href='dashboard.php?correo=$email';</script>";
	    }
            
	}else{
     	$cons = "SELECT * FROM empleado WHERE correo = '$email'";
        $cons2 = "SELECT * FROM empleado WHERE contrasena = '$pass'";
        $res =  mysqli_query($conexion,$cons);
        $p = mysqli_fetch_array($res);
        $res2 =  mysqli_query($conexion,$cons2);
        $cont1 = mysqli_num_rows($res);
        $cont2 = mysqli_num_rows($res2);
        if($cont1==1 && $cont2==1){
            $_SESSION['inicio_sesion']="dog";
            echo "<script>document.location.href='dashboard.php?correo=$email';</script>";
	    }
	}
	

?>