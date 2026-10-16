<?php 
require_once __DIR__ . '/../Model/UsuarioModel.php';

class Controller{
    
public function index(){
    echo 'redirect pagina dashboard' ;
    require('Views/dashboard.php');
}

public function MostrarUsuarios(){

 $modelo = new UsuarioModel();

    $usuarios = $modelo->Usuario();
    
    require __DIR__ . '/../Views/dashboard.php';

}
public function Login(){

}
public function register(){

}

}
?>

