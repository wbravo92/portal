<?php

class query{
    
public $conexion;
public $resultado; 
public $resultado2; 
public $prep;
public $row;    
  
    
public function __construct($dbhost,$dbuser,$dbpass,$dbname,$dbcharset){
$this->conexion=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
    
if($this->conexion->connect_errno){
trigger_error("fallo la conexion con mysql, Tipo de error -> ({$this->conexion->connect_error})",E_USER_ERROR);
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
 $this->conexion->close();
die();
    
}else{

echo "El usuario no existe";
return false;

}
    $this->conexion->close();
}
    
    
public function listarUsuarios(){
        
$query="SELECT * FROM app_user order by id asc";
    
$this->resultado2=$this->conexion->query($query); 

return $this->resultado2;
    
    
$this->conexion->close();   
    
}
    
public function ingresarUsuario($nombre,$apellido,$correo,$contrasena,$estado,$fecha){
  
$query="INSERT INTO app_user(id,nombre,apellido,correo,contrasena,estado,fecha)
        values(null,'{$nombre}','{$apellido}','{$correo}','{$contrasena}','{$estado}','{$fecha}')";
  
  
if ($this->conexion->query($query) === TRUE) {
    $last_id = $this->conexion->insert_id;
    echo "Exito al crear. El ultimo ID insertado es: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $this->conexion->error;
}

$this->conexion->close();

}
    
public function emailRepetido($correo){

$query="SELECT correo FROM app_user WHERE correo = '$correo'";

$this->resultado=$this->conexion->query($query);


if ($this->resultado->num_rows==0) {

//echo "El usuario no existe";
return false;
$this->conexion->close();

}else{

//echo "El usuario ya exite ";
return true;

} 
     
     
 }   

    
public function eliminarUser($id){

$query="DELETE FROM app_user WHERE id = '$id'";



if($this->conexion->query($query)===true){
    
    $this->conexion->query($query);
    
}else{
    
    echo "Error al conectar en la bd".$this->conexion->error;
    $this->conexion->close();
}

}
    
public function ingresoUsuario($correo,$hora){

$query="INSERT INTO ingreso_usuarios(id,correo,hora)values(null,'{$correo}','{$hora}')";    


if ($this->conexion->query($query) === TRUE) {
} else {
echo "Error: " . $sql . "<br>" . $this->conexion->error;
$this->conexion->close();    
}



}
     
     
 }       
    
?>
