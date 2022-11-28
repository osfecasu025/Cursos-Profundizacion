<?php 
    session_start(); 
    error_reporting(E_PARSE);
    include ("../Modelo/Conexion/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cusor-Profundizacion</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index-Admin.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Cursos-Profundizacion </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index-Admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>INICIO</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="Aprovar-Estudiante.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Aprovar-Estudiantes</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Informacion-Estudiantes</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="Estudiantes-Matriculados.php">Estudiantes-Matriculados</a>
                        <a class="collapse-item" href="Escoger-curso.php">Tareas</a>
                        <a class="collapse-item" href="utilities-animation.html">Evaluaciones</a>
                        <a class="collapse-item" href="utilities-other.html">Exposiciones</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Resivos</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="login.html">Reporte-<br>Terminacion_Materias</a>
                        <a class="collapse-item" href="register.html">Pagos</a>

                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Dar-Certificado</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-credit-card-alt"></i>
                    <span>Dar-Evaluacion-Docente</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrador</span>
                                <img class="img-profile rounded-circle" src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">TAREAS-ASIGNADAS</h1>

                    </div>


                    <!-- End of Main Content -->
                    <div class="container-fluid">

                        <!-- Content Row -->
                        <div class="row">

                            <!-- Grow In Utility -->
                            <div class="col-lg-15">
                                <form action="../Controlador/Registro-Tarea.php" method="POST" enctype="multipart/form-data">
                                    <div class="card position-relative">
                                        <div class="card-header py-10">
                                        <h6 class="m-0 font-weight-bold text-primary">SubirTarea</h6>
                                        </div>
                                        <div class="mb-4">
                                        <label for="exampleFormControlInput1" class="form-label">Codigo-Tarea</label>
                                        <input type="text" name="codigo" class="form-control" id="exampleFormControlInput1">
                                        <label for="exampleFormControlInput1" class="form-label">Titulo de la
                                            tarea</label>
                                        <input type="text" name="titulo" class="form-control" id="exampleFormControlInput1">
                                        <label for="exampleFormControlInput1" class="form-label">Descripcion</label>
                                        <textarea type="text" name="descripcion" class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>

                                        </div>

                                        <div class="small mb-1">Subir Documento:</div>
                                     <nav class="navbar navbar-expand navbar-light bg-light mb-4">

                                        <input  type="file"name="tarea" id="form3Example4" class="form-control form-control-lg" />
                                        </nav>
                                     <p class="mb-0 small">Note: en esta seccion vas a poder subir todas las tareas
                                        para los estudiantes que se encuentren en este curso de Profundizacion.</p>
                                        <Button name="subir" type="submit" class="btn btn-primary btn-lg"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Subir</Button>
                                    </div>
                                    
                                </form>
                            </div>

                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">TAREAS SUBIDAS</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Tarea</th>
                                            <th>Accion</th>


                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php
  
                                    if(!$_SESSION['nombreAdmin']==""){
                                     $sqla = "SELECT * FROM tareas";
                                    $resultada = mysqli_query($conexion,$sqla);

                                        }

                                    while($mostrar=mysqli_fetch_array($resultada)){

                                    $rutaarchivo = "../img/Tareas".$nit."/".$mostrar['archivo'];
                                    $nombreArchivo = $mostrar['archivo'];
                                    
                                    ?>
                                    <tr>
                                        <td><?php echo $mostrar['id']; ?></td>
                                        <td><?php echo $mostrar['titulo']; ?>
                                        <a href="<?php echo $rutaarchivo; ?>"
                                                        download="<?php echo $nombreArchivo; ?>"
                                                        class="btn btn-success btn-sm ">
                                                        <span class="fas fa-download"></span></td></td>
                                        <td><a href="#" class="btn btn-success btn-circle">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            <a href="../Controlador/Eliminar-Tarea.php?id=<?php echo $mostrar['id'] ?>"
                                                        class="btn btn-danger btn-circle">
                                                        <i class="fas fa-trash"></i>
                                                        </a>
                                        </td>


                                        </tr>
                                        
                                        <?php
                                            }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">SOLUCION DE TAREAS</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Tarea</th>
                                            <th>Accion</th>


                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php
  
                                    if(!$_SESSION['nombreAdmin']==""){
                                     $sqla = "SELECT * FROM tareas";
                                    $resultada = mysqli_query($conexion,$sqla);

                                        }

                                    while($mostrar=mysqli_fetch_array($resultada)){

                                    $rutaarchivo = "../img/Tareas".$nit."/".$mostrar['archivo'];
                                    $nombreArchivo = $mostrar['archivo'];
                                    
                                    ?>
                                    <tr>
                                        <td><?php echo $mostrar['id']; ?></td>
                                        <td><?php echo $mostrar['titulo']; ?>
                                        <a href="<?php echo $rutaarchivo; ?>"
                                                        download="<?php echo $nombreArchivo; ?>"
                                                        class="btn btn-success btn-sm ">
                                                        <span class="fas fa-download"></span></td></td>
                                        <td><a href="#" class="btn btn-success btn-circle">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            <a href="../Controlador/Eliminar-Tarea.php?id=<?php echo $mostrar['id'] ?>"
                                                        class="btn btn-danger btn-circle">
                                                        <i class="fas fa-trash"></i>
                                                        </a>
                                        </td>


                                        </tr>
                                        
                                        <?php
                                            }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>


                    <!-- Fade In Utility -->


                </div>
                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Desea cerrar sesión?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Se cerrara la sesion actual.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="../Paginas/salir.php">Salir</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="../vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../js/demo/chart-area-demo.js"></script>
        <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>