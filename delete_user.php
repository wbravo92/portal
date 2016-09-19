<?php
include_once('config.php');
include_once('query.php');

$id=$_GET['id'];
$instancia=new query('mysql.hostinger.es','u669375631_root','53206w','u669375631_porta','utf8');
$instancia->eliminarUser($id);


header("location:lista_usuarios.php");
die();    




?>