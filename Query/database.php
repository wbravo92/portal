<?php

class database{
public $db;
protected $resultado;
protected $prep;
protected $consultas;
    
    public function __construct($dbhost,$dbuser,$dbpass,$dbname,$dbcharset){
        $this->db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
          
    if($this->db->connect_errno){
        trigger_error("fallo la conexion con mysql, Tipo de error -> ({$this->db->connect_error})",E_USER_ERROR);
    }
    
    $this->db->set_charset($dbcharset);
 }
    public function getClientes(){
        
        $this->resultado=$this->db->query("SELECT * FROM usuarios");
        return $this->resultado->fetch_all();
    }
    
    
    public function preparar($consulta){
        
    $this->consultas=$consulta;
    $this->prep=$this->db->prepare($this->consultas);
        
        if(!$this->prep){
            trigger_error("Error al preparar la consulta",E_USER_ERROR);
        }
    }
    
    public function ejecutar(){
        $this->prep->execute();
    }
    
    public function prep(){
        return $this->prep;
        
    }
    
    public function resultado(){
        return $this->prep->fetch();
    }
    
    public function cambiarDatabase($db){
        $this->db->select_db($db);
    }

}


?>