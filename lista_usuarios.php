<html>
<body id="cuerpo-lista">

<?php

require('inc/navbar.inc');

echo "<h1>Titulo</h1>";


$conexion=new mysqli('mysql.hostinger.es','u669375631_root','53206w','u669375631_porta');


$resultado=$conexion->query("SELECT * FROM app_user");


    if($resultado=$conexion->query("SELECT * FROM app_user")){
    while ($array=$resultado->fetch_assoc()) {
      echo $array["id"]." ".$array["nombre"]." ".$array["apellido"]." ".$array["correo"]." ".$array["contrasena"]." ".$array["fecha"];
    }
      $resultado->free();   
    }
$conexion->close();

?>
  
</body>    
    
</html>

