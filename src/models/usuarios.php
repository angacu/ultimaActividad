<?php
namespace Daw\models;

class Usuarios extends Db
{

  // insertar en base de datos:
  public function insertarUsuario($nombre, $apellidos, $edad, $curso, $puntuacion, $correo){
if (parent::getError()==false)
{
  $insertar="INSERT INTO usuario (nombre, apellidos, edad, curso, puntuacion, correo) VALUES ('$nombre', '$apellidos', $edad, $curso, $puntuacion, '$correo')";
  $resultado= parent::getConexion()->query($insertar);
  echo "<br>";
  echo "<br>";
  // var_dump($this->conexion);
  if (!$resultado) {
    echo "Falló la insercion: (" . parent::getConexion()->errno.")" . parent::getConexion()->error;
    return false;
    }else{
      return $resultado;
    }
    }else{
      return false;
  }
}

  // actualizar en la base de datos
  public function actualizarUsuario($id,$nombre, $apellidos, $edad, $curso, $puntuacion, $correo){
  if (parent::getError()==false)
  {
  $actualizar="UPDATE usuario SET id=$id,nombre='$nombre',apellidos='$apellidos',edad=$edad,curso=$curso,puntuacion=$puntuacion,correo='.$correo.' WHERE id=$id";
  $resultado= parent::getConexion()->query($actualizar);
  echo "<br>";
  if (!$resultado) {
    echo "Falló la insercion: (" . parent::getConexion()->errno.")" . parent::getConexion()->error;
    return false;
    }else{
      return $resultado;
    }
    }else{
      return false;
  }
}

  // borrar usuarios de la base de datos
  public function borrarUsuario($id){
    if (parent::getError()==false)
    {
      $borrar="DELETE FROM usuario WHERE id=$id";
      $resultado= parent::getConexion()->query($borrar);

  if (!$resultado) {
    echo "Falló la insercion: (" . parent::getConexion()->errno.")" . parent::getConexion()->error;
    return false;
    }else{
      return $resultado;
    }
    }else{
      return false;
  }
}

    // listar usuarios de la base de datos
      public function listarUsuarios(){
        if (parent::getError()==false)
        {
          $listar="SELECT * FROM usuario";
          $resultado= parent::getConexion()->query($listar);

      if (!$resultado) {
        echo "Falló la insercion: (" . parent::getConexion()->errno.")" . parent::getConexion()->error;
        return false;
        }else{
          return $resultado;
        }
        }else{
          return false;
      }
    }

}
 ?>
