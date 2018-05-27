
<?php
$servername="localhost";
$username="root";
$password="12345678";
$dbname="bdunad03";

$conn=mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die(" Connection failed:" . mysqli_connect_error ());
}

$sql="CREATE TABLE tabla03(
id INT(30) primary key ,
nombre VARCHAR(30)NOT NULL ,
peso VARCHAR(30)NOT NULL ,
marca VARCHAR(30),
fabricante VARCHAR(30),
caracteristica VARCHAR(50),
reg_date TIMESTAMP
	)";
if (mysqli_query($conn, $sql)) {
	echo"La Tabla ha sido creada sactifactoriamente ";
}else{
	echo"error al crear tabla " . mysqli_error($conn);

}
mysqli_close($conn);
?>

