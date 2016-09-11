<?php

class query{
    
public $conexion;
public $resultado;    
    
public function __construct($dbhost,$dbuser,$dbpass,$dbname,$dbcharset){
$this->conexion=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
    
if($this->db->connect_errno){
trigger_error("fallo la conexion con mysql, Tipo de error -> ({$this->db->connect_error})",E_USER_ERROR);
}
    
$this->conexion->set_charset($dbcharset);
}    
    
public function ingresar($correo,$contrasena){ 
    
$query="SELECT correo FROM app_user WHERE correo = '$correo' and contrasena ='$contrasena'";

$this->resultado=$this->conexion->query($query);

if ($this->resultado->num_rows!=0) {
  //    echo "El usuario Existe";
     header('Location: main.html');
  

}else{

 echo "El usuario no existe";
 //--header('Location: valida.html');    
    return 2;
   $this->conexion->close();
}
}
}
?>
