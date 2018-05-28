<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Usuarios;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pagina home del proyecto</title>
  </head>
  <body>
    <?php
    //Ejemplo de uso de modelos
    $t=new Usuarios();

    // pillamos los valores del cuestionario
    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $edad=$_POST["edad"];
    $curso=$_POST["curso"];
    $puntuacion=$_POST["puntuacion"];
    $correo=$_POST["correo"];

    $resultado=$t->insertarUsuario($nombre,$apellidos,$edad,$curso,$puntuacion,$correo);
    $listar=$t->listarUsuarios();
    foreach ($listar as $fila) {

      echo "<b>Nombre: </b>".$fila['nombre']."<br>";
      echo "<b>Apellidos: </b>".$fila['apellidos']."<br>";
      echo "<b>Edad: </b>".$fila['edad']."<br>";
      echo "<b>Curso: </b>".$fila['curso']."<br>";
      echo "<b>Puntuacion: </b>".$fila['puntuacion']."<br>";
      echo "<b>Correo: </b>".$fila['correo']."<br>";
      echo "<br>";
      echo "<hr>";
  }
    ?>
    <br>
    <form action="formularioBorrar.php">
      <input type="submit" value="Ir a Borrar">
    </form>
      <br>
    <form action="formularioActualizar.php">
      <input type="submit" value="Ir a Actualizar">
    </form>
  </body>
</html>
