<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\usuarios;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Maquinon</title>
  </head>
  <body>
    <form action="formularioActualizar.php">
      <input type="submit" value="Vamos a actualizar">
    </form>
    <br>
    <form action="formularioBorrar.php">
      <input type="submit" value=" Vamos a borrar">
    </form>
    <br>
    <br>
     <a href="logout.php">Log Out</a>
  </body>
</html>
