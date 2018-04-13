<?php 
	if ($_POST ["txtcodigo"] !="" and $_POST ["txtPeso"]!="" and $_POST ["txtMarca"]!=""
		and $_POST ["txtFabricante"]!="" and $_POST ["txtFabricante"]){
		
			 $codigo= $_POST["txtcodigo"];
             $peso= $_POST["txtPeso"];
             $marca= $_POST["txtMarca"];
             $fabricante= $_POST["txtFabricante"];
        


           
 
			    	$file = fopen("$codigo.txt", 'w');

					fwrite($file, "Codigo " . $codigo . PHP_EOL);

					fwrite($file, "Peso " . $peso . PHP_EOL);

					fwrite($file, "Marca " . $marca . PHP_EOL);

					fwrite($file, "Fabricante " . $fabricante . PHP_EOL);

			

					fclose($file);

            
			
                   
				echo "<script>
				               alert('Registro Guardados con Exito');
				             window.location= 'ReportesEspeciales.html'
				    </script>";
	 
		
	}
	else {
		

		echo "<script>
				                alert('Por favor ingrese los Valores !');
				                window.location= 'ReportesEspeciales.html'
				    </script>";

 }

                  


?>