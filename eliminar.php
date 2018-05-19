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



		$sql = "DELETE FROM  tabla03  WHERE codigo='".$no."' ";


		if (mysqli_query($conn, $sql)) {
		   echo "<script>
		                               alert('Registro Eliminado con Exito');
		                             window.location= 'Consulta.html'
		                    </script>";
		} else {
		   echo "<script>
		                               alert('Error al ingresar el producto');
		                             window.location= 'Consulta.html'
		                    </script>";
		}
		/*Cerramos la conexion de la base de datos*/
		mysqli_close($conn);
	}
?> 