
<?php

require_once('config.php');
require_once('query.php');


$correo=$_POST['email'];
$contrasena=$_POST['password'];

$variable=new query(DB_HOST,DB_USER,DB_PASS,DB_NAME,DB_CHARSET);
$variable->ingresar($correo,$contrasena);




?>  

  
  
  
      
        
