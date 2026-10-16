<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        dashboard
    </h2>

    <nav>
        <a href="logout.php">Cerrar session</a>
    </nav>

    <div>
        <a href="GestionUsuarios.php">Gestionar Usuarios </a>
    </div>
</body>
</html>


<?php 
//require('Controller/Controller.php');
require('../Controller/Controller.php');

session_start() ;

if(!isset($_SESSION['email'])){
    header('location: login.php');
}
$email= $_SESSION['email']; 
echo "Email : ".$email;

?>