<?php
		$servername = 'localhost';
		$username = 'root'; 
		$password = '12345678';
		$dbname = "bdunad03";
		echo $NombreUsuario = $_POST['txtNombreUsuario'];
		echo $pwd = $_POST['txtPassword'];

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}



		$sql = ("SELECT COUNT(*) as c FROM usuarios  WHERE nombre_usuario= '$NombreUsuario' and contrasena_usuario= '$pwd'");
		$result = mysqli_query($conn, $sql)

		if($result)
		 {
		    while($row=mysqli_fetch_assoc($result))
		  {
		        echo $row['c'];
		  }     
		 }
		

		/*
		if (!$result > 0) {
		   echo "<script>
		           window.location= 'Consulta.html'
		                    </script>";
		} else {
		   echo "<script>
		     alert('Error al ingresar el producto');
		     window.location= 'login.html'
		                    </script>";
		}
		/*
		Cerramos la conexion de la base de datos*/
		mysqli_close($conn);
		?> 