<?php 
//require('Controller/Controller.php');
require('../Controller/Controller.php');


session_start() ;

if(!isset($_SESSION['email'])){
    header('location: login.php');
}

$email= $_SESSION['email']; 
$pass = $_SESSION['pass']; 

echo "Email : ".$email."<br>".$pass;


?>


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
    
    <div>
       <ul>

<?php if (!empty($usuarios)): ?>
    <?php foreach ($usuarios as $usuario): ?>
        <p>
            <?= htmlspecialchars($usuario['Nombre'] ?? '') ?>
        </p>
    <?php endforeach; ?>
<?php else: ?>
    <p>No hay usuarios registrados.</p>
<?php endif; ?>

   
</ul>
    </div>
</body>
</html>


