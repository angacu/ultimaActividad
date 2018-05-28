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
    $id=$_POST["id"];
    $nombre=$_POST["nombre"];


    $resultado=$t->borrarUsuario($id,$nombre);
    $listar=$t->listarUsuarios();
    echo "<br>";
    echo "Borrado con éxito";
    // foreach ($listar as $fila) {

      // echo "<b>Nombre: </b>".$fila['nombre']."<br>";
      // echo "<b>Apellidos: </b>".$fila['apellidos']."<br>";
      // echo "<b>Edad: </b>".$fila['edad']."<br>";
      // echo "<b>Curso: </b>".$fila['curso']."<br>";
      // echo "<b>Puntuacion: </b>".$fila['puntuacion']."<br>";
      // echo "<b>Correo: </b>".$fila['correo']."<br>";
      // echo "<br>";
      // echo "<hr
    ?>
    <br>
    <br>
    <form action="formularioInsertar.php">
      <input type="submit" value="Ir a Insertar">
    </form>
      <br>
    <form action="formularioActualizar.php">
      <input type="submit" value="Ir a Actualizar">
    </form>
    <br>
  </body>
</html>
