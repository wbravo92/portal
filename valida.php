
<?php


spl_autoload_register(function($clase){
    require_once "$clase.php";
});


$correo=$_POST['email'];
$contrasena=$_POST['password'];

$variable=new query("mysql.hostinger.es","u669375631_root","53206w","u669375631_porta","utf8");


$variable->ingresar($correo,$contrasena);



?>  

  
  
  
      
        
