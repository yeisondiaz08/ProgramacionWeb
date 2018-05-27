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
                    <li >
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
                    <li class="active">
                       <a href="RegistroUsuarios.html"> R. Usuarios</a>
                    </li>
                </ul>
                 
            </div>
        </nav>
        </div>
       

 <?php
 /*Parametros de conexcion a la base de datos*/
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad03";

 /*Asignamos los datos de la vista a una variable local*/
$NombreUsuario = $_POST['txtNombreUsuario'];
$Password = md5($_POST['txtPassword']);
$estado = '0';
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 /*el siguiente Query realizamos la consulta para actualizar el registro segun el codigo*/
$sql = "INSERT INTO usuarios (nombre_usuario, contrasena_usuario, estado_usuario)
VALUES ('$NombreUsuario', '$Password', '$estado')";

if (mysqli_query($conn, $sql)) {
  echo "<script>
                               alert('Registro Guardado con Exito');
                             window.location= 'RegistroUsuarios.html'
                    </script>";
} else {
     echo "<script>
                               alert('Error al guardar');
                             window.location= 'RegistroUsuarios.html'
                    </script>";
}
mysqli_close($conn);
?> 

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
    <script src="js/plugins/flot/jquery.flot.js"></sc
    ript>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>



</body>

</html>
