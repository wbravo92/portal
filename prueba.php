<?php

$conexion=mysqli_connect("mysql.hostinger.es","u669375631_root","53206w","u669375631_porta");

if(!$conexion){
echo "Error de conexion";


	exit;
}
	echo "conexion establecida";

echo "</br>";
$resultado = $conexion->query("SELECT * FROM app_user where correo='wbravoanoni@gmail.com'");

if ($resultado->num_rows!=0) {
   echo "El usuario Existe";
}else{

echo "El usuario no existe";
   $conexion->close();
}

?>