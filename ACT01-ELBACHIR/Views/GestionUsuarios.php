<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="8" cellspacing="0">
  <caption>Lista de usuarios registrados</caption>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo electrónico</th>
      <th scope="col">Rol</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Ana García</td>
      <td>ana@ejemplo.com</td>
      <td>Administrador</td>
      <td><a href="">borrar</a> <a href="">Editar</a> </td>
    </tr>
    <tr>
      <td>2</td>
      <td>Carlos López</td>
      <td>carlos@ejemplo.com</td>
      <td>Editor</td>
    <td><a href="">borrar</a> <a href="">Editar</a> </td>

    </tr>
    <tr>
      <td>3</td>
      <td>María Pérez</td>
      <td>maria@ejemplo.com</td>
      <td>Usuario</td>
            <td><a href="">borrar</a> <a href="">Editar</a> </td>

    </tr>
  </tbody>
</table>

</body>
</html>

<?php
require('../Controller/Controller.php');


?>