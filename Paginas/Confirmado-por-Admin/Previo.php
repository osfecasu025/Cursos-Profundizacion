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
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Cursos-Profundizacion </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../../index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>INICIO</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="Cursos-confirmado.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Cursos</span></a>
            </li>


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Informacion-Cursos</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="utilities-color.html">Calificaciones</a>
                        <a class="collapse-item" href="utilities-border.html">Tareas</a>
                        <a class="collapse-item" href="Evaluacion-Curso.php">Evaluaciones</a>
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
                    <span>Certificado</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-credit-card-alt"></i>
                    <span>Evaluacion-Docente</span></a>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Usuario</span>
                                <img class="img-profile rounded-circle" src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="IniciarSesion.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Login
                                </a>

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
<!--titulo-->
<div class="container">
        <div class="row">
            <div class="col">
                <h1 style="text-align: center;">Primera Evaluacion</h1>
            </div>
        </div>
    </div>

    <!--Preguntas-->
    <div class="container">
        <div class="row">
            <div class="col">
                <form>
                    <p><strong>1. Cuando empezo la primera guerra mundial  </strong></p>
                    <ol type="A">
                        <li><input type="radio" name="pregunta1" id="p11"> 1914 </li>
                        <li><input type="radio" name="pregunta1" id="p12"> 1924</li>
                        <li><input type="radio" name="pregunta1" id="p13"> 1929</li>
                        <li><input type="radio" name="pregunta1" id="p14"> 1939</li>
                    </ol>
                    <p><strong>2.Cuando fue la segunda guerra mundial </strong></p>
                    <ol type="A">
                        <li><input type="radio" name="pregunta2" id="p21"> 1914</li>
                        <li><input type="radio" name="pregunta2" id="p23"> 1924</li>
                        <li><input type="radio" name="pregunta2" id="p22"> 1929</li>
                        <li><input type="radio" name="pregunta2" id="p24"> 1939</li>
                    </ol>
                    <p><strong>3. Cuando fue la masacre en Munich</strong></p>
                    <ol type="A">
                        <li><input type="radio" name="pregunta3" id="p31"> 1986</li>
                        <li><input type="radio" name="pregunta3" id="p33"> 1972</li>
                        <li><input type="radio" name="pregunta3" id="p32"> 1956</li>
                        <li><input type="radio" name="pregunta3" id="p34"> 1999</li>
                    </ol>
                    <p><strong>4. Cuando fue el terromoto y tsunami en Japon</strong></p>
                    <ol type="A">
                        <li><input type="radio" name="pregunta4" id="p41"> 2011</li>
                        <li><input type="radio" name="pregunta4" id="p42"> 2006</li>
                        <li><input type="radio" name="pregunta4" id="p43"> 2003</li>
                        <li><input type="radio" name="pregunta4" id="p44"> 2016</li>
                    </ol>
                    <p><strong>5. En que año fue el asesinato de John f. Kennedy</strong></p>
                    <ol type="A">
                        <li><input type="radio" name="pregunta5" id="p55"> 1985</li>
                        <li><input type="radio" name="pregunta5" id="p51"> 1973</li>
                        <li><input type="radio" name="pregunta5" id="p52"> 1963</li>
                        <li><input type="radio" name="pregunta5" id="p53"> 1978 </li>
                    </ol>
                    <p><strong>6. Que año fue la caida del muro de Berlin </strong></p>
                    <ol type="A">
                        <li><input type="radio" name="pregunta6" id="p61"> 1989</li>
                        <li><input type="radio" name="pregunta6" id="p62"> 2001</li>
                        <li><input type="radio" name="pregunta6" id="p66"> 1999</li>
                        <li><input type="radio" name="pregunta6" id="p64"> 1979</li>
                    </ol>
                    <p><strong>7. En que año fue el atentado a las torres gemelas</strong></p>
                    <ol type="A">
                        <li><input type="radio" name="pregunta7" id="p71"> 1999 </li>
                        <li><input type="radio" name="pregunta7" id="p77"> 2003</li>
                        <li><input type="radio" name="pregunta7" id="p73"> 2001</li>
                        <li><input type="radio" name="pregunta7" id="p74"> 2002</li>
                    </ol>
                    <p><strong>8. En que año alunizo el apolo 11</strong></p>
                    <ol type="A">
                        <li><input type="radio" name="pregunta8" id="p88"> 1969</li>
                        <li><input type="radio" name="pregunta8" id="p82"> 1989</li>
                        <li><input type="radio" name="pregunta8" id="p83"> 1985</li>
                        <li><input type="radio" name="pregunta8" id="p84"> 1970</li>
                    </ol>
                    <p><strong>9. En que año fue el bombardeo a Hiroshima y Nagasaki</strong></p>
                    <ol type="A">
                        <li><input type="radio" name="pregunta9" id="p91"> 1945</li>
                        <li><input type="radio" name="pregunta9" id="p92"> 1965</li>
                        <li><input type="radio" name="pregunta9" id="p93"> 1937</li>
                        <li><input type="radio" name="pregunta9" id="p99"> 2020</li>
                    </ol>
                    <p><strong>10. En que año inicio el Holocausto en Alemania</strong></p>
                    <ol type="A">
                        <li><input type="radio" name="pregunta10" id="p01"> 1941</li>
                        <li><input type="radio" name="pregunta10" id="p02"> 1942</li>
                        <li><input type="radio" name="pregunta10" id="p03"> 1943</li>
                        <li><input type="radio" name="pregunta10" id="p04"> 1940</li>
                    </ol>
                    <hr />
                    <button type="button" class="btn btn-primary" onclick="resultado()">RESULTADO</button>
                    <hr />
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!--Llamada al script de respuestas-->
    <script src="../../js/respuestas.js"></script>




                <!-- End of Main Content -->

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
                        <a class="btn btn-primary" href="login.html">Salir</a>
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