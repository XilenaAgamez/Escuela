
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Escuela</title>

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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Escuela <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../../index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">           

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Gestionar Estudiante</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../../CRUD/estudiante/Agregar.php">Agregar Estudiante</a>
                        <a class="collapse-item" href="../../CRUD/estudiante/Mostrar.php">Mostrar Estudiante</a>
                        <a class="collapse-item" href="../../CRUD/estudiante/Modificar.php">Modificar Estudiante</a>
                        <a class="collapse-item" href="../../CRUD/estudiante/Eliminar.php">Eliminar Estudiante</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Gestionar Docente</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../../CRUD/Docente/Agrega.php">Agregar Docente</a>
                        <a class="collapse-item" href="../../CRUD/Docente/Muestra.php">Mostrar Docente</a>
                        <a class="collapse-item" href="../../CRUD/Docente/Modifica.php">Modificar Docente</a>
                        <a class="collapse-item" href="../../CRUD/Docente/Elimina.php">Eliminar Docente</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Gestionar Curso</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../../CRUD/Curso/Agrega.php">Agregar Curso</a>
                        <a class="collapse-item" href="../../CRUD/Curso/Listar.php">Mostrar Curso</a>
                        <a class="collapse-item" href="../../CRUD/Curso/Editar.php">Modificar Curso</a>
                        <a class="collapse-item" href="../../CRUD/Curso/Elimina.php">Eliminar Curso</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle"
                                    src="../../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../../login.php" >
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
                                        <!-- Topbar Search -->
                    <form action="Modifica.php" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" name="palabra" placeholder="Palabra"
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <input class="btn btn-primary" type="submit" name="buscador" value="Buscar">
                            </div>
                        </div>
                    </form><br><br> 
                    <?php
                      include ('../conexion.php');
            
                      if (isset($_POST['buscador'])){
                        // Tomamos el valor ingresado
                        $buscar = mysqli_real_escape_string($conn, $_POST['palabra']);
                    
                        // Si está vacío, lo informamos, sino realizamos la búsqueda
                        if (empty($buscar)){
                            echo "No se ha ingresado una cadena a buscar";
                        }else{
                            $sql = "SELECT * FROM docente WHERE id like '%$buscar%' ORDER BY id DESC";
                            $result = mysqli_query($conn, $sql);
                            if ($result === false){
                                echo mysqli_error($conexion);
                            }else{
                                $total = mysqli_num_rows($result);
                                // Imprimimos los resultados
                                if ($row = mysqli_fetch_array($result)){
                                    do {
                                    ?>
                                    <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
                                        <tr>
                                            <!--creamos los títulos de nuestras dos columnas de nuestra tabla -->
                                            <td width="100" align="center"><strong>id</strong></td>
                                            <td width="100" align="center"><strong>nombre</strong></td>
                                            <td width="100" align="center"><strong>apellido</strong></td>
                                            <td width="100" align="center"><strong>genero</strong></td>
                                            <td width="100" align="center"><strong>editar</strong></td>
                                
                                        </tr>                                                                     
                                        <tr>
                                            <td class="estilo-tabla" align="center"><?=$row['id']?></td>
                                            <td class=”estilo-tabla” align="center"><?=$row['nombre']?></td>
                                            <td class="estilo-tabla" align="center"><?=$row['apellido']?></td>
                                            <td class=”estilo-tabla” align="center"><?=$row['genero']?></td>
                                            <td class=”estilo-tabla” align="center"><input type="submit" action="" name="name" value="Editar"/></td>
                                        </tr> 
                                    </table>
                                    <?php
                                    }while ($row = mysqli_fetch_array($result));
                                    echo "<p>Resultados: $total</p>";
                                }else{
                                    // En caso de no encontrar resultados
                                    echo "No se encontraron resultados para: $buscar";
                                }
                            }
                        }
                    }             ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../js/demo/chart-area-demo.js"></script>
    <script src="../../js/demo/chart-pie-demo.js"></script>

</body>

</html>