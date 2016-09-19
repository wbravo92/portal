<?php 
include_once("config.php");
include_once("query.php");
?>
<html lang="es">
<meta charset="utf-8">
 <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">

<body id="new_user">

    <h1 id="new_user_title">Registro de usuarios</h1>

<form class="form-horizontal add_user" method="post">

<legend>Panel de ingreso de usuarios</legend>   
<div class="form-group">
    <label class="control-label" for="nombre">Nombre:</label>
    <input id="nombre" name="nombre" class="form-control" type="text" placeholder="Nombre" maxlength="20">
 
</div>
  
<div class="form-group">               
       <label class="control-label" for="apellido">Apellido:</label>
       <input id="apellido" name="apellido" class="form-control" type="text" placeholder="Apellido" maxlength="20">
</div>
         
<div class="form-group">
    <label class="control-label" for="email">Correo:</label>
    <input id="email" name="email" type="email" class="form-control" placeholder="Email" maxlength="35">
</div>
       
<div class="form-group">           
       <label class="control-label" for="contrasena">Contraseña:</label>
       <input id="contrasena" name="contrasena" class="form-control" type="password" placeholder="Contraseña" maxlength="20">
</div>
          
<div class="form-group">            
       <label class="control-label" for="contrasena2">Repita su contraseña:</label>
       <input id="contrasena2" name="contrasena2" class="form-control col-sm-4" type="password" placeholder="Repita su contraseña" maxlength="20">
</div> 
<div class="form-group" style="margin-left: 80px">       
    <a class="btn btn-info regresar" href=lista_usuarios.php>Regresar</a>   
    <button class="btn btn-success" type="submit">Agregar Usuario</button><br> 
</div>    
    
</form>
       
<?php
    
if($_POST){
    
  
    $contrasena=$_POST['contrasena'];
    $contrasena2=$_POST['contrasena2'];
    $correo=$_POST['email'];
    
    
if($contrasena=$contrasena2){
  
    $instancia=new query('mysql.hostinger.es','u669375631_root','53206w','u669375631_porta','utf8');
      
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    
    if($instancia->emailRepetido($correo)===false){
        if($correo!="" && $nombre!="" && $apellido!=""){
        
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
 
    $estado="1";
    $fecha=date("Y-m-d G:i:s");;        
       


$instancia->ingresarUsuario($nombre,$apellido,$correo,$contrasena,$estado,$fecha);
    
        }else{
            echo "Rellene los campos vacios";
        }
            
}else{
    echo "ERROR, El correo ya se encuentra registrado";
        
}

}else{
      echo "Error las contraseñas no coinciden";  
    }
}else{
    //echo "faltan registros por enviar";
}

    
?>             
        
    
</body>            
    
    
    
</html>