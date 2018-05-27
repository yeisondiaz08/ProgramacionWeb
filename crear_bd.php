
<?php
$servername="localhost";
$username="root";
$password="12345678";

$conn=mysqli_connect($servername, $username, $password);
if (!$conn) {
	die(" Connection failed:" . mysqli_connect_error ());
}

$sql="CREATE DATABASE bdunad03";
if (mysqli_query($conn, $sql)) {
	echo"La base de datos ha sido creada sactifactoriamente ";
}else{
	echo"error al crear la base de datos " . mysqli_error($conn);

}
mysqli_close($conn);
?>

