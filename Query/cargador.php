<?php
require_once "config.php"; 


spl_autoload_register(function($clase){
    require_once "$clase.php";
});


$db=new database(DB_HOST,DB_USER,DB_PASS,DB_NAME,DB_CHARSET);  


?>