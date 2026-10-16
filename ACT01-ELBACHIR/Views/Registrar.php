<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Formulario Registrar</h2><br>

    <form action="login.php" method="POST">
    <label for="">Nombre</label>
    <br><input type="text" name="nom">
    <br>
    <label for="">Apellido</label>
    <br><input type="text" name="cognom">
    <br>
    
    <label for="">Usuario email</label>
    <br><input type="text" name="email">
    <br>
    <label for="">Password</label><br>
    <input type="password" name="pass"><br>
    <input type="submit" name="register">
    </form>

</body>
</html>
<?php

require('../Controller/Controller.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
if(isset($_POST['nom']) && isset($_POST['cognom']) && isset($_POST['email']) && isset($_POST['pass'])){
  $nom = $_POST['nom']; 
  $cognom = $_POST['cognom']; 
  $email = $_POST['email'] ; 
  $pass =$_POST['pass'] ;

  $pass_encryptado = password_hash($pass,PASSWORD_DEFAULT); 

  echo $nom ."  passwordCrytp : ".$pass_encryptado; 

  if(!empty($nom) && !empty($cognom) && !empty($email) && !empty($pass)){
  //session_start() ; 

  echo 'Ingresar';
  header('location: login.php');
  }else{
   echo "Ingresa los campos para registarrse" ;  
  }
}

}




?>