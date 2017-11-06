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

                            <!-- Top nav left menu -->
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
                                    <?php echo "<a href='perfil.php?correo=$email'>$admin[nombre] $admin[apellidos]</a>";?>
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

                <div id="page-right-content">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="p-0 text-center">
                                    <div class="member-card">
                                        <div class="thumb-xl member-thumb m-b-10 center-block">
                                            <img src="assets/images/users/<?php echo "$admin[foto]";?>" class="img-circle img-thumbnail" alt="profile-image">
                                            <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                        </div>

                                        <div class="">
                                            <h4 class="m-b-5"><?php echo"$admin[nombre] $admin[apellidos]" ;?></h4>
                                            <p class="text-muted">Administrador</p>
                                        </div>

                                        <p class="text-muted m-t-10">
                                            Administrador Peras Burgers.
                                        </p>


                                        <button type="button" class="btn btn-primary m-t-10">Follow</button>
                                        <button type="button" class="btn btn-custom m-t-10">Message</button>

                                    </div>

                                </div> <!-- end card-box -->

                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <div class="m-t-30">
                            <ul class="nav nav-tabs tabs-bordered">
                                <li class="active">
                                    <a href="#home-b1" data-toggle="tab" aria-expanded="true">
                                        Profile
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#profile-b1" data-toggle="tab" aria-expanded="false">
                                        Settings
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home-b1">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- Personal-Information -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Personal Information</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="m-b-20">
                                                        <strong>Nombre</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo "$admin[nombre] $admin[apellidos]" ;?></p>
                                                    </div>
                                                    <div class="m-b-20">
                                                        <strong>Telefono</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo "$admin[telefono]";?></p>
                                                    </div>
                                                    <div class="m-b-20">
                                                        <strong>Correo Electronico</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo "$admin[correo]";?></p>
                                                    </div>
                                                    <div class="about-info-p m-b-0">
                                                        <strong>Ubicacion</strong>
                                                        <br>
                                                        <p class="text-muted">Ciudad Victoria, Tamaulipas.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Personal-Information -->

                                            <!-- Social -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Social</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <ul class="social-links list-inline m-b-0">
                                                        <li>
                                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Social -->
                                        </div>


                                        <div class="col-md-8">
                                            <!-- Personal-Information -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Biography</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <h5 class="header-title text-uppercase">About</h5>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged.</p>

                                                    <p><strong>But also the leap into electronic typesetting, remaining
                                                        essentially unchanged.</strong></p>

                                                    <p>It was popularised in the 1960s with the release of Letraset
                                                        sheets containing Lorem Ipsum passages, and more recently with
                                                        desktop publishing software like Aldus PageMaker including
                                                        versions of Lorem Ipsum.</p>

                                                    <div class="">

                                                        <h5 class="header-title text-uppercase m-t-30 m-b-20">Skills</h5>

                                                        <div class="m-b-15">
                                                            <h5>Angular Js <span
                                                                    class="pull-right">60%</span></h5>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary"
                                                                     role="progressbar" aria-valuenow="60"
                                                                     aria-valuemin="0" aria-valuemax="100"
                                                                     style="width: 60%">
                                                                    <span class="sr-only">60% Complete</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="m-b-15">
                                                            <h5>Javascript <span
                                                                    class="pull-right">90%</span></h5>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary"
                                                                     role="progressbar" aria-valuenow="90"
                                                                     aria-valuemin="0" aria-valuemax="100"
                                                                     style="width: 90%">
                                                                    <span class="sr-only">90% Complete</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="m-b-15">
                                                            <h5>Wordpress <span
                                                                    class="pull-right">80%</span></h5>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary"
                                                                     role="progressbar" aria-valuenow="80"
                                                                     aria-valuemin="0" aria-valuemax="100"
                                                                     style="width: 80%">
                                                                    <span class="sr-only">80% Complete</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="m-b-0">
                                                            <h5>HTML5 &amp; CSS3 <span class="pull-right">95%</span>
                                                            </h5>
                                                            <div class="progress m-b-0">
                                                                <div class="progress-bar progress-bar-primary"
                                                                     role="progressbar" aria-valuenow="95"
                                                                     aria-valuemin="0" aria-valuemax="100"
                                                                     style="width: 95%">
                                                                    <span class="sr-only">95% Complete</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Personal-Information -->

                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="profile-b1">
                                    <!-- Personal-Information -->
                                    <div class="panel panel-default panel-fill">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Edit Profile</h3>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label for="FullName">Full Name</label>
                                                    <input type="text" value="John Doe" id="FullName" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Email">Email</label>
                                                    <input type="email" value="first.last@example.com" id="Email" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Username">Username</label>
                                                    <input type="text" value="john" id="Username" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Password">Password</label>
                                                    <input type="password" placeholder="6 - 15 Characters" id="Password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="RePassword">Re-Password</label>
                                                    <input type="password" placeholder="6 - 15 Characters" id="RePassword" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="AboutMe">About Me</label>
                                                    <textarea style="height: 125px" id="AboutMe" class="form-control">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</textarea>
                                                </div>
                                                <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save</button>
                                            </form>

                                        </div>
                                    </div>
                                    <!-- Personal-Information -->
                                </div>
                            </div>
                        </div>
                    </div>

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