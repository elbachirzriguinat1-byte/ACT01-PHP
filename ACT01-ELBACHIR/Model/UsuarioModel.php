<?php 

require_once("conexion.php") ;
class UsuarioModel {
  private $conexion; 
  public $q ; 
  public function __construct()
  {
   // conexion = new PDO('mysql:host=localhost;dbname=test','root',''); 
   $this->conexion = new PDO('mysql:host=localhost;dbname=test','root','') ;

  }
 public function Usuario()
{
    $query = $this->conexion
        ->query("SELECT * FROM usuario ")
        ->fetchAll(PDO::FETCH_ASSOC);

    return $query;
   
}
 function Registrarse(){
 
}
function Login(){

}
function dashboard(){
    
}

function AñadirUsuario(){

}
function editarUsuario(){

}
function borrarUsuario(){

}
}
?>