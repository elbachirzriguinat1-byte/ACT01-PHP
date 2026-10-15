<?php
 
    //variables necessaries per la conexió
	define("HOST_DB", "localhost");
	define("USER_DB", "root");
	define("PASS_DB", "");
	define("NAME_DB", "test");
 
    //crear la conexió a la base de dades
	$conexion = new mysqli(
		constant("HOST_DB"),
		constant("USER_DB"),
		constant("PASS_DB"),
		constant("NAME_DB")
	);

    if(mysqli_connect('localhost','root','','test')){
    echo "conectado a la base de datoS ";
    }else{
        echo "No estas conectado a la base de datos";
    }
 
?>