<?php
session_start();
session_destroy();
echo "<script>                               
 	window.location= 'Login.html'
     </script>";
?>