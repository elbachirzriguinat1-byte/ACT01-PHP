<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Formulario Login</h2><br>
    <form action="login.php" method="POST">
    <label for="">Usuario email</label>
    <br><input type="text" name="email">
    <br>
    <label for="">Password</label><br>
    <input type="password" name="pass"><br>
    <input type="submit" name="Login">
    </form>

</body>
</html>
<?php
require_once  __DIR__.'Controller/Controller.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
if(isset($_POST['Login']) && isset($_POST['email'])){

  $email = $_POST['email'] ; 
  $pass =$_POST['pass'] ;

  $pass_encryptado = password_hash($pass,PASSWORD_DEFAULT); 

  echo "  passwordCrytp : ".$pass_encryptado; 
   
  if(!empty($email) && !empty($pass)){
  session_start() ; 
  
  echo 'LOGIN OK';
  header('location: dashboard.php');
  
  }else{

   echo "Ingresa los campos para registarrse" ;  

  }

}

}




?>