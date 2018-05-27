<?php
        session_start();
        $tiempo = $_SESSION["tiempo"] + 600;
  
            if ($tiempo <= time()) {

                 
                 session_destroy();
                    echo "<script>
                               
                             window.location= 'Login.html'
                    </script>";
            }

            else
            {
                ?> 
        <!DOCTYPE html>
<html>
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet"/>
 
    <link href="css/style.css" rel="stylesheet"/>
    <link href="css/Estilo.css" rel="stylesheet" />
    <title>Gestion de Inventatio</title>
</head>
<body class="top-navigation">

    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom white-bg">
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <i class="fa fa-reorder"></i>
                </button>
                <a href="#" class="navbar-brand">Gestión de inventarios</a>
            </div>
            <div class="navbar-collapse collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="Home.html"> Administración</a>
                    </li>
                    
                    <li>
                        <a href="ingreso.html"> Ingreso</a>
                    </li>
                    <li class="active">
                        <a href="Consulta.html"> Consulta</a>
                    </li>
                    <li>
                       <a href="actualizacion.html">Actualización</a>
                    </li>
                    <li>
                       <a href="ReportesEspeciales.html">Reportes Especiales</a>
                    </li>
                    <li>
                       <a href="Operaciones.html"> Operaciones</a>
                    </li>
                    <li>
                       <a href="RegistroUsuarios.html"> R. Usuarios</a>
                    </li>
                </ul>
               

               <ul class="nav navbar-top-links navbar-right">
                    <li>
                   <a href="Salir.php">
                            <i class="fa fa-sign-out"></i> <?php echo "Bienvenido " .  $_SESSION["nomusu"] ?>
                        </a> 
                    </li>
                </ul> 
            </div>
        </nav>
        </div>

        <div class="wrapper wrapper-content">
             <form method="POST" action="usuario.php" class="form-horizontal">
                <div class="container">
                                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                <div class="row">
                                      <div class="col-sm-4 m-b-xs">
                                        <label class="control-label">Nombre de Usuario</label>
                                        <input type="text" class="input-sm form-control" name="txtNombreUsuario">
                                    </div>                  
                                    <div class="col-sm-4 m-b-xs">
                                        <label class="control-label">Contraseña</label>
                                        <input type="password" class="input-sm form-control" name="txtPassword">
                                    </div>
                                     
                                </div>
                                
                                
                                <div class="row">
                                   
                                     
                                    <div class="col-sm-3">
                                        <button class="btn btn-primary" type="submit">Guardar</button>                           
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                </div>

             </form>
            <div class="container">


            <form method="GET" action="EliminarUsuario.php" class="form-horizontal">
                <div class="row">
                     <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">  
                              <h3 class="font-bold no-margins">
                                 Usuarios Registrados
                                    </h3>

                            <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "12345678";
                            $dbname = "bdunad03";

                            // Create connection
                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                            // Check connection
                            if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                            }
                            $sql = "SELECT * FROM usuarios";
                            $result = mysqli_query($conn, $sql);
                            ?> 
                            <table class="table table-striped">
    
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>Estado</th>
                                <th>Eliminar</th>
                                <th>Actualizar</th>
                            </tr>
                            </thead>

                            <?php while($row = mysqli_fetch_assoc($result)){  
                             ?> 
                            <tr>
                                <td><?php echo $row['codigo_usuarios'] ?></td>
                                <td><?php echo $row['nombre_usuario'] ?></td>
                                <td><?php echo $row['estado_usuario'] ?></td>
                               
                                <?php echo "<td> <a href='EliminarUsuario.php?no=".$row['codigo_usuarios']."'> <button type='button' class='btn btn-danger' onclick='return confirm('Desea eliminar el Registro?')>Eliminar</button> </a> </td>" ?>
                                <?php echo "<td> <a href='UpdateUsuario.php?no=".$row['codigo_usuarios']."'> <button type='button' class='btn btn-primary'>Actualizar</button> </a> </td>" ?>
                             </tr>
                            <?php
                                }
                            ?>
                               </table>
                            </div>
                        </div>
                    </div>
                </div>

               </form> 

            </div>

        </div>



        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2015
            </div>
        </div>

        </div>
        </div>

   <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>



</body>

</html> 



                <?php
              
            }                          
?> 
