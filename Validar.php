<?php
                $servername = "localhost";
                $username = "root";
                $password = "12345678";
                $dbname = "bdunad03";
                $usuario = $_POST['txtUsuario'];
                $pass = md5($_POST['txtPass']);
                            // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                            // Check connection
                            if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                            }
                            $sql = "SELECT * FROM usuarios WHERE nombre_usuario = '$usuario' and contrasena_usuario = '$pass'";
                            $result = mysqli_query($conn, $sql);
                            $estado =0;
                            $nom_Usuario;
                            while($row = mysqli_fetch_assoc($result))
                            {  
                                $estado = $row['estado_usuario'];
                                $nom_Usuario = $row['nombre_usuario'];
                            }
                            
                            if ($nom_Usuario != NULL) {
                                if ($estado == 1) {
                                session_start();
                                $_SESSION["autentificado"] = "SI";
                                $_SESSION["nomusu"] = $nom_Usuario;
                                $_SESSION["tiempo"] = time();
                                echo "<script>
                                     window.location= 'administrador.php'
                                      </script>";
                                }
                                else
                                {
                                    echo "Usuario no activado debe solicitar activación al administrador";
                                }
                            }
                            else{
                                echo "Usuario o contraseña Invalido";
                            }                            
                            ?> 
