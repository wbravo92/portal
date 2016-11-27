<html lang="es">
<meta charset="utf-8">
<?php session_start();
if(empty($_SESSION['correo'])){
    echo "Error, Pagina no localizada";
    var_dump(session_start());
     var_dump($_SESSION['correo']);
    exit;
}
require_once('inc/navbar.inc');
require_once('config.php');    
require_once('query.php');
?>



<body id="cuerpo-lista">
<h1>Listado de usuarios</h1>
<a href='add_user.php' class='users btn btn-success' role='button'>Agregar Usuario</a>
      
  
<?php    
$instancia=new query(DB_HOST,DB_USER,DB_PASS,DB_NAME,DB_CHARSET);
$resultado=$instancia->listarUsuarios();

echo"<center><table class='table-list table table-striped' width=100%>
    <tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Correo</th><th>Contraseña</th><th>Fecha</th>
    <th></th><th></th></tr>";    

if($resultado){
/*     echo "todo correcto";  */
     
while($row=$resultado->fetch_assoc()){
 
    
    
echo "<tr><td>".$row["id"]."</td><td>".$row["nombre"]."</td><td>".$row["apellido"]."</td><td>".$row["correo"]."</td><td>".$row["contrasena"]."</td><td>".$row["fecha"]."</td>
<td>
<button type='button' class='btn btn-primary mod'>Modificar</button>"
?>
<a class='btn btn-danger' href='delete_user.php?id=<?php echo $row['id']?>'>Eliminar</a>
<?php
    
echo " 
</td>

</tr>";
}
    
echo "</table></center>";       
   
}else{
   echo "error al instanciar";  
}


    

?>
  
</body>    
    
</html>

