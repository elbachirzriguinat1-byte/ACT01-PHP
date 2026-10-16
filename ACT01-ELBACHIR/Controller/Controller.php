<?php 
//require('Model/UsuarioModel');

class Controller{
    
public function index(){
    echo 'redirect pagina dashboard' ;
    require('Views/dashboard.php');
}
public function MostrarUsuarios(){
    //$UsuarioModel->dashboard() ; 

}

}
?>

