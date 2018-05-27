<?php


EliminarProducto($_GET['no']);


function EliminarProducto($no)
	{
		$servername = 'localhost';
		$username = 'root'; 
		$password = '12345678';
		$dbname = "bdunad03";
		$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
		echo $sql = "DELETE FROM usuarios WHERE codigo_usuarios=".$no."";
		if (mysqli_query($conn, $sql)) {
		   echo "<script>
		                               alert('Registro Eliminado con Exito');
		                             window.location= 'administrador.php'
		                    </script>";
		} else {
		   echo "<script>
		                               
		                         alert('Error al eliminar el Registro');
		                             window.location= 'administrador.php
		                    </script>";
		}
		/*Cerramos la conexion de la base de datos*/
		mysqli_close($conn);
	}
?> 