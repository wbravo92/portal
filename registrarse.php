<?php 
    require('inc/header.inc') ;
    require('validarFoto.php')
?>

<div class="container-fluid">
    <div class="row">
       <div class="col-md-12 text-center"><h1>Portal Web</h1>
      </div>
    </div>
<div class="row">
             
    <div class="col-sm-5 caja col-centrar">
    
                                                       
    <?php
   
        spl_autoload_register(function($clase){
            require_once "$clase.php";
        });
            

 if($_POST){

     extract($_POST,EXTR_OVERWRITE);
     
     if(!file_exists("fotos")){
         mkdir("fotos",0777);
     }
     $nombre=strtolower($nombre);
     

     
if($nombre && $correo && $password && $password2){
    $expresion="/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/";
        if(preg_match($expresion,$correo)){
            if(strlen($password>6)){
                if($password=$password2){
                    
                    $validaEmail=$db->validarUsuarios('email','usuarios',$correo);
                    if($validaEmail==0){
                        
                          if(validarFoto($nombre)){
      echo "<img class='img-responsive' src='$rutaSubida' alt=''>";
        echo "Todo correcto...";
                            }
                        
                      
                        else{
                              echo "ERROR, Foto no valida";
                          }
                        
                    }else{
                        echo "Ese email ya existe";
                    }
                    
                }else{
                    echo "las contraseñas no coinciden";
                }
                
            }else{
                echo "la contraseña debe tener mas de 6 caracteres";
            }
            
        }else{
            echo "ERROR, por favor ingresa un email valido";
        }
}     
     
 }else{

 }
        
?>                                                              
                                                                            
                                                        
                                                                              
                                                         
<form method="post" action="" enctype="multipart/form-data"  role="form" >
<legend>Registrate</legend>
<fieldset class="fieldset">
	
	
    <div class="form-group">	
	<label for="nombre">Nombre</label>
	<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba su nombre">
	</div>	
	
	
	<div class="form-group">
	<label for="apellido">Apellido</label>
	<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Escriba su apellido">
	</div>	
	
	<div class="form-group">
	<label for="correo">Correo</label>
	<input type="text" class="form-control" id="correo" name="correo" placeholder="Escriba su correo">
	</div>
	
	<div class="form-group">
	<label for="password">Contraseña</label>
	<input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña">
	</div>
	
	<div class="form-group">
	<label for="password2">Repetir contraseña</label>
	<input type="password2" class="form-control" id="password2" name="password2" placeholder="repita su contraseña">
	</div>

	
	<div class="form-group" style='height: 59px'>
	
	<label for="cedula">Cedula</label><br>
	
   <div class="form-group agrupar">
   <input type="number" class="form-control" id="cedula" name="cedula" placeholder="Escriba su cedula">
	
	<select class="form-group select">
	    <option value=0>0</option>
	    <option value=1>1</option>
	    <option value=2>2</option>
	    <option value=3>3</option>
	    <option value=4>4</option>
	    <option value=5>5</option>
	    <option value=6>6</option>
	    <option value=7>7</option>
	    <option value=8>8</option>
	    <option value=9>9</option>
	    <option value=K>K</option>    
   </select>
        </div>
    </div>

	<div class="form-group">
	<label for="Telefono">Telefono</label>
	<input type="text" class="form-control" id="telefono" name="Telefono" placeholder="Ingrese su telefono">
	</div>	
	
	<div class="form-group">
	<label for="direccion">Direccion</label>
	<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese su direccion">
	</div>
	
	<div class="form-group">
	<label for="edad">Edad</label>
	<input type="number" class="form-control" id="edad" name="edad" placeholder="Ingrese su edad">
	</div>	
	
	<div class="form-group">
	<label for="departamento">Departamento</label>
	<input type="text" class="form-control" id="departamento" name="departamento" placeholder="Ingrese su departamento">
	</div>	
	
	<div class="form-group">
	<label for="Codigo Postal">Codigo Postal</label>
	<input type="text" class="form-control" id="Codigo Postal" name="Codigo Postal" placeholder="Ingrese su codigo postal">
	</div>
	
	
	<div class="form-group">
	<label for="">Elija una foto de perfil:</label>
	<input name="foto" type="file" class="form-control">
	</div>
	
	<button type="submit" class="btn btn-primary">Ingresar</button>
	<a class="pull-right" href="index.php">Click aqui si tienes una cuenta</a>
	</fieldset>

</form>
 

   
    </div>  
   </div> <!--end div row-->
</div>
  
  
   
<?php require('inc/footer.inc') ;?>      

