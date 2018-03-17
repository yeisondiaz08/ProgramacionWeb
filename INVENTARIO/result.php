<!DOCTYPE html>
<html>
<head>
		 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet"/>
 
    <link href="css/style.css" rel="stylesheet"/>
    <link href="css/Estilo.css" rel="stylesheet" />
	<title>Operaciones</title>
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
                        <a href="layouts.html"> Administración</a>
                    </li>
                    
                    <li>
                        <a href="layouts.html"> Ingreso</a>
                    </li>
                    <li >
                        <a href="layouts.html"> Consulta</a>
                    </li>
                    <li>
                       <a href="layouts.html"> Actualización</a>
                    </li>
                    <li>
                       <a href="layouts.html"> Reportes</a>
                    </li>
                    <li>
                       <a href="Operaciones.html"> Operaciones</a>
                    </li>
                </ul>
                
            </div>
        </nav>
        </div>

         <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>All form elements <small>With custom checbox and radion elements.</small></h5>
                            
                        </div>
                        <div class="ibox-content">
                            <?php 

                            $n1= $_POST["valor1"];
                    $n2= $_POST["valor2"];
                  $i= $_POST["operador"];


	if ($_POST ["valor1"] !="" and $_POST ["valor2"]!=""){
		
switch ($i) {
    case '1':
        $suma=$n1+$n2;
                    echo "la suma de ".$n1." y ".$n2." es: ".$suma."";
        break;
    case '2':
        $suma=$n1-$n2;
                    echo "la resta de ".$n1." y ".$n2." es: ".$suma."";
        break;
    case '3':
        $suma=$n1*$n2;
                    echo "la multiplicacion de ".$n1." y ".$n2." es: ".$suma."";
        break;
    case '4':
        $suma=$n1/$n2;
                    echo "la division de ".$n1." y ".$n2." es: ".$suma."";
        break;

    
    default:
        echo "debe ingresar un valor valido";
        break;
            }

		}

                   

	 else {
		print("Ingresa los valores");
		print ('<br /><a class="btn btn-primary" href="Operaciones.html">Volver</a>');
	}

     echo "<br> ";

                    if ($n1==$n2) {
                        echo "los numeros ".$n1." y ".$n2." son iguales";
                                    }
                    elseif ($n1>$n2) {
                        echo "el numero ".$n1." es mayor a ".$n2." ";
                    }

                    else{
                        echo "el numero ".$n1." es menor a ".$n2." ";

                    }
                     echo "<br> ";
                     echo "la secuencia de 1 hasta el numero de grupo que es el 3 es la siguiente: ";
                    for ($i=1; $i <= 3; $i++) { 
                        echo "".$i."";
                    }

?>
                        </div>
                    </div>
                </div>
            </div>
       
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

    <!-- Peity demo -->
    <script src="js/demo/peity-demo.js"></script>

</body>
</html>
