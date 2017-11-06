<?php
  session_start();
  require("conexion.php");
  $email = $_GET['correo'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Peras Burgers - Productos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/logoPeras.jpg">

        <!-- DataTables -->
        <link rel="stylesheet" href="assets/plugins/switchery/switchery.min.css">
        <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>

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
      $consulta = mysqli_query($conexion,"SELECT * FROM administrador WHERE correo = '$email'");
      $admin = mysqli_fetch_array($consulta);
    ?>

    <body>

        <div id="page-wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <?php echo "<a href='dashboard.php?correo=$email'>
                            <img src='assets/images/logoPeras.jpg' alt='logo' class='logo-lg' style='height: 60px;width: 130px'/>
                            <img src='assets/images/logoPeras.jpg' alt='logo' class='logo-sm hidden' />
                          </a>";
                        ?>
                </div>

                <!-- Top navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">

                            <!-- Mobile menu button -->
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile visible-xs visible-sm">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <ul class="nav navbar-nav hidden-sm hidden-xs top-navbar-items">
                                <li><a href="#">Acerca de</a></li>
                                <li><a href="#">Ayuda</a></li>
                                <li><a href="#">Contacto</a></li>
                            </ul>

                            <!-- Top nav Right menu -->
                            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/<?php echo "$admin[foto]"?>" alt="user-img" class="img-circle"><i class="mdi mdi-chevron-down"></i> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo "perfil.php?correo=$email";?>"><i class="ti-user m-r-10"></i> Perfil</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-settings m-r-10"></i> Configuracion</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-lock m-r-10"></i> Pantalla de Bloqueo</a></li>
                                        <li class="divider"></li>
                                        <li><a href="index.php"><i class="ti-power-off m-r-10"></i> Cerrar Sesion</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end container -->
                </div> <!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <aside class="sidebar-navigation">
                    <div class="scrollbar-wrapper">
                        <div>
                            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                                <i class="mdi mdi-close"></i>
                            </button>
                            <!-- User Detail box -->
                            <div class="user-details">
                                <div class="pull-left">
                                    <img src="assets/images/users/<?php echo "$admin[foto]";?>" alt="" class="thumb-md img-circle">
                                </div>
                                <div class="user-info">
                                    <?php echo "<a href='dashboard.php?correo=$email'>$admin[nombre] $admin[apellidos]</a>";?>
                                    <p class="text-muted m-0">Administrator</p>
                                </div>
                            </div>
                            <!--- End User Detail box -->

                            <!-- Left Menu Start -->
                            <ul class="metisMenu nav" id="side-menu">
                                <li><?php echo "<a href='dashboard.php?correo=$email'><i class='ti-home'></i> Dashboard </a>";?></li>

                                <li>
                                  <a href="javascript: void(0);" aria-expanded="true"><i class = 'mdi mdi-account'></i>Personal<span class="fa arrow"></a>
                                  <ul class="nav-second-level nav" aria-expanded ="true">
                                    <li><?php echo "<a href='personal.php?correo=$email'><span class='label label-custom pull-right'></span><i class='mdi mdi-account'></i> Ver Empleados </a>";?>
                                    </li>
                                    <li><?php echo "<a href='registro_empleado.php?correo=$email'><span class='label label-custom pull-right'></span><i class='mdi mdi-account-plus'></i> Registrar Empleado </a>";?>
                                    </li>
                                    <li>
                                      <?php echo "<a href='modificar_empleado.php?correo=$email'><span class='label label-custom pull-right'></span><i class='mdi mdi-account-plus'></i> Modificar Empleado </a>";?>
                                    </li>
                                    <li>
                                      <?php echo "<a href='baja_empleado.php?correo=$email'><span class='label label-custom pull-right'></span><i class='mdi mdi-account-plus'></i> Baja de Empleado </a>";?>
                                    </li>

                                  </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="mdi mdi-cart-plus"></i> Ventas <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="components-range-slider.html">Día</a></li>
                                        <li><a href="components-alerts.html">Semanal</a></li>
                                        <li><a href="components-icons.html">Mensual</a></li>
                                        <li><a href="components-widgets.html">Por Empleado</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="mdi mdi-store"></i> Productos <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><?php echo "<a href='productos.php?correo=$email'><i class='mdi mdi-food'></i> Ver Productos </a>"?></li>
                                        <li><?php echo "<a href='agregar_producto.php?correo=$email'><i class='mdi mdi-food'></i> Agregar Productos</a>"?></li>
                                        <li><?php echo "<a href='modificar_producto.php?correo=$email'><i class='mdi mdi-food'></i> Modificar Productos </a>"?></li>
                                        <li><?php echo "<a href='eliminar_producto.php?correo=$email'><i class='mdi mdi-food'></i> Eliminar Productos </a>"?></li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </div>
                    </div><!--Scrollbar wrapper-->
                </aside>
                 <!-- START PAGE CONTENT -->
                <div id="page-right-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="m-t-0 header-title">Personal</h4>
                                <div>
                                  <?php
                                    if(isset($_GET['exito'])){
                                      echo "<div class='alert alert-success alert-dismissible fade in' role='alert'>
                                                <button type='button' class='close' data-dismiss='alert'
                                                        aria-label='Close'>
                                                    <span aria-hidden='true'>&times;</span>
                                                </button>
                                                <strong>Modificacion Exitosa!</strong>
                                            </div>";
                                    }
                                  ?>
                                    <u style="font-size:25px"><b>Modificar Empleado</b></u><br><br>

                                     <?php echo "<form role='form' class='form-validation' action='modificar_empleado.php?correo=$email' method='post'>";?>
                                            <div class="form-group row">
                                                <label class="col-sm-2 form-control-label" style="font-size:18px">Nombre(s) de empleado<span class="text-danger">*</span></label>
                                                <div class="col-sm-6">
                                                    <input type="text" required ="" class="form-control" name ="nombre" placeholder="Ingresar Nombre(s)">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 form-control-label" style="font-size:18px">Apellido(s) de empleado<span class="text-danger">*</span></label>
                                                <div class="col-sm-6">
                                                    <input type="text" required ="" class="form-control" name ="apellidos" placeholder="Ingresar Apellido(s)">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4"></div>
                                                <div class="col-md-2">
                                                    <input type="submit" name="info" class="btn btn-primary btn-md" value="Ver Info"/>
                                                </div>
                                            </div>
                                        </form>
                                        <?php
                                          if(isset($_POST['info'])){
                                            $nombre = $_POST['nombre'];
                                            $apellidos = $_POST['apellidos'];

                                            $consultaInfo = "SELECT * FROM empleado WHERE nombre like '%$nombre%' and apellidos like '%$apellidos%'";
                                            $resultadoInfo = mysqli_query($conexion,$consultaInfo);

                                            $info = mysqli_fetch_array($resultadoInfo);
                                                echo "
                                                <form role='form' class='form-validation' action='modificar.php?correo=$email' method='post'>
                                                     <div class ='form-group row'>
                                                        <label class='col-sm-2 form-control-label' style='font-size:18px'>ID Empleado</label>
                                                        <div class='col-m-6'>
                                                            <input type='text' class='form-control' name='id' value = '$info[id]'/>
                                                        </div>
                                                    </div>
                                                    <div class ='form-group row'>
                                                        <label class='col-sm-2 form-control-label' style='font-size:18px'>Nombre(s)</label>
                                                        <div class='col-m-6'>
                                                            <input type='text' class='form-control' name='nom' value = '$info[nombre]'/>
                                                        </div>
                                                    </div>
                                                    <div class ='form-group row'>
                                                        <label class='col-sm-2 form-control-label' style='font-size:18px'>Apellido(s)</label>
                                                        <div class='col-m-6'>
                                                            <input type='text' class='form-control' name='ap' value = '$info[apellidos]'/>
                                                        </div>
                                                    </div>
                                                    <div class ='form-group row'>
                                                        <label class='col-sm-2 form-control-label' style='font-size:18px'>Sexo</label>
                                                        <div class='col-m-6'>
                                                            <input type='text' class='form-control' name = 'sexo' value = '$info[sexo]'/>
                                                        </div>
                                                    </div>
                                                    <div class ='form-group row'>
                                                        <label class='col-sm-2 form-control-label' style='font-size:18px'>Edad</label>
                                                        <div class='col-m-6'>
                                                            <input type='text' class='form-control' name= 'edad' value = '$info[edad]'/>
                                                        </div>
                                                    </div>
                                                    <div class ='form-group row'>
                                                        <label class='col-sm-2 form-control-label' style='font-size:18px'>Correo</label>
                                                        <div class='col-m-6'>
                                                            <input type='text' class='form-control' name ='email' value = '$info[correo]'/>
                                                        </div>
                                                    </div>
                                                    <div class ='form-group row'>
                                                        <label class='col-sm-2 form-control-label' style='font-size:18px'>Telefono</label>
                                                        <div class='col-m-6'>
                                                            <input type='text' class='form-control' name = 'telefono' value = '$info[telefono]'/>
                                                        </div>
                                                    </div>
                                                    <div class ='form-group row'>
                                                        <label class='col-sm-2 form-control-label' style='font-size:18px'>Salario</label>
                                                        <div class='col-m-6'>
                                                            <input type='text' class='form-control' name='salario' value = '$info[salario]'/>
                                                        </div>
                                                    </div>

                                                    <div class='form-group row'>
                                                        <div class='col-md-4'></div>
                                                        <div class='col-md-2'>
                                                            <input type='submit' name='modificar_e' class='btn btn-primary' value='Modificar'/>
                                                        </div>
                                                    </div>
                                                </form>

                                                ";
                                        }

                                                
                                        
                                            
                                            

                                          

                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script> 
        <script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>

        <!-- Datatable js -->

        <!-- init -->
        <script src="assets/pages/jquery.datatables.init.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>