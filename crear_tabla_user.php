<?php
$servername="localhost";
$username="root";
$password="12345678";
$dbname="bdunad03";

$conn=mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die(" Connection failed:" . mysqli_connect_error ());
}

$sql = "CREATE TABLE usuarios (
codigo_usuarios mediumint(9) PRIMARY KEY NOT NULL AUTO_INCREMENT,
nombre_usuario VARCHAR(30) NOT NULL,
contrasena_usuario VARCHAR(50) NOT NULL,
estado_usuario VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";
if (mysqli_query($conn, $sql)) {
	echo"La Tabla ha sido creada sactifactoriamente ";
}else{
	echo"error al crear tabla " . mysqli_error($conn);

}
mysqli_close($conn);
?>

 