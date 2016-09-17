<?php
require('inc/navbar.inc');
require_once ("cargador.php");
require_once("config.php");

?>

<div class="container-fluid">
    <div class="row">
       <div class="col-md-12 text-center"><h1 id="titulolistado">Listado</h1>
      </div>
    </div>
<div class="row">
             
    <div class="col-sm-12 caja col-centrar">
 <?php   
                                                       

                  
        
//$array=$db->getClientes();
        
$db=new query(DB_HOST,DB_USER,DB_PASS,DB_NAME,DB_CHARSET);

$db->preparar("select idUsuario,nombre,apellido,email,contrasena,cedula,verificador,telefono,dirección,edad,ciudad,departamento,codigoPostal from usuarios");

$db->ejecutar();
$db->prep()->bind_result($id,$nombre,$apellido,$correo,$contrasena,$estado,$fecha);

        
echo "<table class='table table-cell'
<thead>
    <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Email</td>
        <td>Contraseña</td>
        <td>Estado</td>
        <td>Fecha</td>
        </tr>
    <tbody>            
";

while($db->resultado()){
echo "<tr>
    
    <td>$id</td>
    <td>$nombre</td>
    <td>$apellido</td>
    <td>$email</td>
    <td>$contrasena</td>
    <td>$estado</td>
    <td>$fecha</td>
    </tr>";  
       
}

echo "</tbody>
      </table>";



?>
            
                                                  

   
    </div>  
   </div> <!--end div row-->
</div>
