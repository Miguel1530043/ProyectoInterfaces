<?php
    $host = "localhost";
    $username = "root";
    $pass = "";
    $BD="perasburgers";

    $conexion = mysqli_connect($host,$username,$pass,$BD);

    mysqli_set_charset($conexion,"UTF8");

    mysqli_select_db($conexion,$BD);

?>