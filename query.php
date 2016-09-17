<?php

class query{
    
public $conexion;
public $resultado; 
public $resultado2; 
public $prep;
public $row;    
  
    
public function __construct($dbhost,$dbuser,$dbpass,$dbname,$dbcharset){
$this->conexion=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
    
if($this->db->connect_errno){
trigger_error("fallo la conexion con mysql, Tipo de error -> ({$this->db->connect_error})",E_USER_ERROR);
}
    
$this->conexion->set_charset($dbcharset);
}    
    
public function ingresar($correo,$contrasena){ 
    
$query="SELECT nombre,apellido,correo FROM app_user WHERE correo = '$correo' and contrasena ='$contrasena'";

$this->resultado=$this->conexion->query($query);
 

if ($this->resultado->num_rows!=0) {
    
$this->row=$this->resultado->fetch_assoc();   
$nombre = $this->row['nombre']." ".$this->row['apellido'];
$mail = $this->row['correo'];    

    
header('Location: session.php?nombre='.$nombre.'&correo='.$mail.'');
die();
    
}else{

echo "El usuario no existe";
return false;

}
    $this->conexion->close();
}
    

    }
    
?>
