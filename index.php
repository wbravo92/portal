<?php require('inc/header.inc') ;?>
<h1>Prueba de GitHub</h1>

<div class="container-fluid">
    <div class="row">
       <div class="col-md-12 text-center"><h1 class="tituloPortal">Portal Web</h1>
      </div>
    </div>
<div class="row">
             
          <div class="col-sm-4 caja col-centrar">
              
<form action="administracion.php" method="POST" role="form">

	<legend>Logueate</legend>
	<div class="form-group"><input type="text" class="form-control" id="" placeholder="Su nombre de usuario"></div>
	<div class="form-group"><input name="password" type="text" class="form-control" id="" placeholder="Contraseña"></div>
	
	<button type="submit" class="btn btn-primary">Ingresar</button>
	<a class="pull-right" href="registrarse.php">Registrarse</a>
	
</form>
  

    </div>  
   </div> 
</div>
   
<?php require('inc/footer.inc') ;?>      
    
    
