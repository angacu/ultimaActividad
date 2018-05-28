<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\usuarios;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
</head>
<body>
  <div align="center">
    <p>Elige Usuario: </p>
      <p>Usuarios Disponibles:
  <form action="juegoahorcado/index.php" method="post">
        <select name="nombre">
          <?php
          //nuevo objeto
          $acceder=new Usuarios();
          $mostrar=$acceder->listarUsuarios();
          // option
            foreach ($mostrar as $lista) {
              echo "<option value='".$lista["nombre"]."'>".$lista["nombre"]."</option>";
            }
          ?>
        </select>
        <input type="submit" name="entrar" value="Acceder">
  </form>
    <br>
      <form action="index.php">
        <input type="submit" value="Atras">
      </form>
    </p>
  </div>
</body>

</html>
