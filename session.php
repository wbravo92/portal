<?php
session_start();
include("config.php");
include("query.php");

$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : "";
$correo = isset($_GET['correo']) ? $_GET['correo'] : "";

$_SESSION['correo']=$correo;
$_SESSION['name']=$nombre;

$fecha=date("Y-m-d G:i:s"); 

$variable=new query(DB_HOST,DB_USER,DB_PASS,DB_NAME,DB_CHARSET);
$variable->ingresoUsuario($correo,$fecha);
header('location:main.php');
die();











?>