<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario actualizar</title>
    <!-- <link rel="stylesheet" href="insertarUsuario.php">
    <link rel="stylesheet" href="listadoUsuario.php"> -->
  </head>
  <body>

    <form action="actualizarUsuario.php" method="post">
        Id:<br>
        <input type="text" name="id">
        <br>
      	Nombre:<br>
      	<input type="text" name="nombre">
      	<br>
      	Apellidos:<br>
      	<input type="text" name="apellidos">
      	<br>
        Edad:<br>
        <input type="text" name="edad">
        <br>
        Curso:<br>
        <input type="text" name="curso">
        <br>
        Puntuacion:<br>
        <input type="text" name="puntuacion">
        <br>
        Correo:<br>
        <input type="text" name="correo">
        <br>
        <br>
      	<input type="submit" value="Actualizar">
    	</form>
      <br>

      <!-- botones -->
      <br>
      <form action="formularioBorrar.php">
        <input type="submit" value="Ir a Borrar">
      </form>
        <br>
      <form action="formularioInsertar.php">
        <input type="submit" value="Ir a Insertar">
      </form>

    </body>
  </html>
