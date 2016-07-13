<?php
function validarFoto($nombre){
    
global $dirSubida;
global $rutaSubida;

$dirSubida="fotos/$nombre/";
$foto=$_FILES['foto'];

$nombreFoto=$foto['name'];
$nombreTmp=$foto['tmp_name'];
$rutaSubida="{$dirSubida}profile.jpg";
$extArchivo=preg_replace('/image\//','',$foto['type']);
    
    
if($extArchivo=='jpeg' || $extArchivo=='png'){
    
    if(!file_exists($dirSubida)){
        mkdir($dirSubida,0777);
    }
    
  if(move_uploaded_file($nombreTmp,$rutaSubida)){
      return true;
  }else{
      return false;
  }
}else{
    trigger_error("No es un archivo de imagen valido",E_USER_WARNING);
    exit;
}      
}



?>