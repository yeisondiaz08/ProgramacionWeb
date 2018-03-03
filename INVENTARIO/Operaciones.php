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
                    <li class="active">
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
                            <form method="post" action="result.php" class="form-horizontal">
                                <div class="form-group"><label class="col-sm-2 control-label">Numero 1</label>

                                    <div class="col-sm-4"><input name="valor1" type="text" class="form-control"></div>
                                </div>
                               
                                <div class="form-group"><label class="col-sm-2 control-label">Numero 2</label>

                                    <div class="col-sm-4"><input type="text" name="valor2" class="form-control" ></div>
                                </div>

                                <div class="form-group">
                                	<label class="col-sm-2 control-label">Operación</label>

                                    <div class="col-sm-4">
                                    	<select class="form-control m-b" name="operador">
                                        <option value="suma">Suma</option>
                                        <option value="resta">Resta</option>
                                        <option value="multiplicacion">Multiplicación</option>
                                        <option value="division">División</option>
                                    </select>
                                    </div>
                                </div>
                              
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">Calcular</button>
                                    </div>
                                </div>
                            </form>
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
<?php 
    if ($_POST ["valor1"] !="" and $_POST ["valor2"]!=""){
        if ($_POST["operador"] == "suma") {
            print ($resultado = $_POST ["valor1"] + $_POST ["valor2"]);
            print ('<br /><a href="calculadora.php">Volver</a>');
        } elseif ($_POST["operador"] == "resta") {
            print ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);
            print ('<br /><a href="calculadora.php">Volver</a>');
        } elseif ($_POST["operador"] == "multiplicacion") {
            print ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);
            print ('<br /><a href="calculadora.php">Volver</a>');
        } elseif ($_POST["operador"] == "division") {
            print ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
            print ('<br /><a href="calculadora.php">Volver</a>');
        }
    } else {
        print("Ingresa alg&uacute;n valor");
        print ('<br /><a href="calculadora.php">Volver</a>');
    }
?>