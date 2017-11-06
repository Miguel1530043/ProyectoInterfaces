<?php
    session_start();
    require("conexion.php");
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Olvidaste tu contraseña</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/logoPeras.jpg">

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">

    </head>
    <?php
      if(isset($_POST['reset'])){
        $email=$_POST['correo'];
      }
      if($email != "1530043@upv.edu.mx"){
        $cons = "SELECT * FROM empleado WHERE correo ='$email'";
        $res = mysqli_query($conexion,$cons);
        $resultado = mysqli_fetch_array($res);
      }else{
        $cons = "SELECT * FROM administrador WHERE correo ='$email'";
        $res = mysqli_query($conexion,$cons);
        $resultado = mysqli_fetch_array($res);
      }
    ?>

    <body>

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 card-box">
                                <div class="text-center">
                                    <h2 class="text-uppercase m-t-0 m-b-30">
                                        <a href="index.html" class="text-success">
                                            <span><img src="assets/images/logoPeras.jpg" alt="" height="30" style="height:170px; width:250;"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <div class="text-center m-b-20">
                                        <p class="text-muted m-b-0 line-h-24">Recuperación de Contraseña</p>
                                    </div>

                                    <form class="form-horizontal" action="#">

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="emailaddress" style="font-size:20px">Contraseña:</label>
                                                <label style="color:red; font-size:20px"><?php echo "$resultado[contrasena]";?></label>
                                            </div>
                                        </div>

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <a href="index.php"><button class="btn btn-lg btn-primary btn-block" type="button">Regresar al Login</button></a>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->
                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>
    </body>
</html>
