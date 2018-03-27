<?php 
	if ($_POST ["txtcodigo"] !="" and $_POST ["txtPeso"]!="" and $_POST ["txtMarca"]!=""
		and $_POST ["txtFabricante"]!="" and $_POST ["txtFabricante"]!="txtCaracteristica"){
		
			 $codigo= $_POST["txtcodigo"];
             $peso= $_POST["txtPeso"];
             $marca= $_POST["txtMarca"];
             $fabricante= $_POST["txtFabricante"];
             $caracteristica= $_POST["txtCaracteristica"];
            
			$file = fopen("archivo.txt", "a");

			fwrite($file, $codigo . PHP_EOL);

			fwrite($file, $peso . PHP_EOL);

			fwrite($file, $marca . PHP_EOL);

			fwrite($file, $fabricante . PHP_EOL);

			fwrite($file, $caracteristica . PHP_EOL);

			fclose($file);
                   
				echo "<script>
				                alert('Registro Guardados con Exito');
				                window.location= 'Ingreso.html'
				    </script>";
	 
		
	}
	else {
		

		echo "<script>
				                alert('Por favor ingrese los Valores !');
				                window.location= 'Ingreso.html'
				    </script>";

 }

                  


?>