<?php session_start();
if(empty($_SESSION['correo'])){
    echo "Error, Pagina no localizada";
    exit;
}else{
    
}

?>
<!DOCTYPE html>
<html lang="es">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina Principal overroot">
    <meta name="author" content="Winston Bravo">

	<title>Menu Principal</title>
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>

  </head>

  <body>
  
<?php 
      
require('inc/navbar.inc'); ?>

  <img src="Imagenes/fondos/fondo1.jpg" width="100%" height="100%"/>
    <div class="container">

      <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
        <br><br>
        
        <p><?php 
            $nombre = $_SESSION['name']; 
            echo "Sesion de: ".$nombre;?>
        </p>
      
       
        <br><br>
      </div>

    </div> <!-- /.container -->


 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="bootstrap/js/"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>




