<?php
require('inc/navbar.inc') ; ;
require_once "query/cargador.php";

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


$db->preparar("select id,nombre,apellido,email,contrasena,cedula,verificador,telefono,direccion,edad,ciudad,departamento,codigoPostal from usuarios");

$db->ejecutar();
$db->prep()->bind_result($id,$nombre,$apellido,$email,$contrasena,$cedula,
                         $verificador,$telefono,$direccion,$edad,$ciudad,$departamento,$codigoPostal);

        
echo "<table class='table table-cell'
<thead>
    <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Email</td>
        <td>Contraseña</td>
        <td>Cedula</td>
        <td>Verificador</td>
        <td>Telefono</td>
        <td>Direccion</td>
        <td>Edad</td>
        <td>Ciudad</td>
        <td>Departamento</td>
        <td>Codigo postal</td>
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
    <td>$cedula</td>
    <td>$verificador</td>
    <td>$telefono</td>
    <td>$direccion</td>
    <td>$edad</td>
    <td>$ciudad</td>
    <td>$departamento</td>
    <td>$codigoPostal</td>
    </tr>";  
       
}

echo "</tbody>
      </table>";



?>
            
                                                  

   
    </div>  
   </div> <!--end div row-->
</div>
