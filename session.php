<?php

session_start();
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : "";
$correo = isset($_GET['correo']) ? $_GET['correo'] : "";

$_SESSION['correo']=$correo;
$_SESSION['name']=$nombre;

header('location:main.php');
die();











?>