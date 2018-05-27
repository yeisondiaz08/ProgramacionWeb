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
                             window.location= 'administrador.php'
                    </script>";
} else {
     echo "<script>
                               alert('Error al guardar');
                               window.location= 'administrador.php'
                    </script>";
}
mysqli_close($conn);

?>