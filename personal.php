<?php
  session_start();
  require("conexion.php");
  $email = $_GET['correo'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Peras Burgers - Personal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/logoPeras.jpg">

        <!-- DataTables -->
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
                                        <li><a href="components-range-slider.html">Dia</a></li>
                                        <li><a href="components-alerts.html">Semanal</a></li>
                                        <li><a href="components-icons.html">Mensual</a></li>
                                        <li><a href="components-widgets.html">Por empleado</a></li>
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
                                <!--
                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-pencil-alt"></i> Forms <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="forms-general.html">General Elements</a></li>
                                        <li><a href="forms-advanced.html">Advanced Form</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-menu-alt"></i> Tables <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="tables-basic.html">Basic tables</a></li>
                                        <li><a href="tables-advanced.html">Advanced tables</a></li>
                                    </ul>
                                </li>

                                <li><a href="charts.html"><span class="label label-custom pull-right">5</span> <i class="ti-pie-chart"></i> Charts </a></li>

                                <li><a href="maps.html"><i class="ti-location-pin"></i> Maps </a></li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-files"></i> Pages <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="pages-login.html">Login</a></li>
                                        <li><a href="pages-register.html">Register</a></li>
                                        <li><a href="pages-forget-password.html">Forget Password</a></li>
                                        <li><a href="pages-lock-screen.html">Lock-screen</a></li>
                                        <li><a href="pages-blank.html">Blank page</a></li>
                                        <li><a href="pages-404.html">Error 404</a></li>
                                        <li><a href="pages-confirm-mail.html">Confirm Mail</a></li>
                                        <li><a href="pages-session-expired.html">Session Expired</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-widget"></i> Extra Pages <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="extras-timeline.html">Timeline</a></li>
                                        <li><a href="extras-invoice.html">Invoice</a></li>
                                        <li><a href="extras-profile.html">Profile</a></li>
                                        <li><a href="extras-calendar.html">Calendar</a></li>
                                        <li><a href="extras-faqs.html">FAQs</a></li>
                                        <li><a href="extras-pricing.html">Pricing</a></li>
                                        <li><a href="extras-contacts.html">Contacts</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-share"></i> Multi Level <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="javascript: void(0);">Level 1.1</a></li>
                                        <li><a href="javascript: void(0);" aria-expanded="true">Level 1.2 <span class="fa arrow"></span></a>
                                            <ul class="nav-third-level nav" aria-expanded="true">
                                                <li><a href="javascript: void(0);">Level 2.1</a></li>
                                                <li><a href="javascript: void(0);">Level 2.2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                              -->
                            </ul>
                        </div>
                    </div><!--Scrollbar wrapper-->
                </aside>
                <!--left navigation end-->

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="m-t-0 header-title">Personal</h4>

                                <div class="table-responsive m-b-20">
                                    <h5><b>Empleados</b></h5>
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>Sexo</th>
                                            <th>Edad</th>
                                            <th>Correo</th>
                                            <th>Telefono</th>
                                            <th>Salario</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                                          $consulta = mysqli_query($conexion,"SELECT * FROM empleado");
                                          while($emp = mysqli_fetch_array($consulta)){

                                        ?>
                                        <tr>
                                            <td><?php echo "$emp[id]"?></td>
                                            <td><?php echo "$emp[nombre]"?></td>
                                            <td><?php echo "$emp[apellidos]"?></td>
                                            <td><?php echo "$emp[sexo]"?></td>
                                            <td><?php echo "$emp[edad]"?></td>
                                            <td><?php echo "$emp[correo]"?></td>
                                            <td><?php echo "$emp[telefono]"?></td>
                                            <td><?php echo "$$emp[salario].00"?></td>
                                        </tr>
                                        <?php
                                          }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->

                    <div class="footer">
                        
                    </div> <!-- end footer -->

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- Datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.colVis.js"></script>
        <script src="assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

        <!-- init -->
        <script src="assets/pages/jquery.datatables.init.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>