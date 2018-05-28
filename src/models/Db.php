<?php
namespace Daw\models;
use mysqli;

class Db
{
  private $host="localhost";
  private $user="root";
  private $pass="root";
  private $db_name="juegosdb";
  // creamos el objeto de conexion
  public $conexion;
  // control de errores
  public $error=false;

  function __construct()
  {
    $mysqli =  new mysqli("localhost", "root", "root", "juegosdb");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: " .
        $mysqli->connect_error;
    }else {
        echo "Conexion realizada";
        $this->conexion=$mysqli;
        echo "<br>";
    }
  }

    public function getHost()
    {
        return $this->host;
    }

    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }


    public function getPass()
    {
        return $this->pass;
    }


    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }


    public function getDbName()
    {
        return $this->db_name;
    }


    public function setDbName($db_name)
    {
        $this->db_name = $db_name;

        return $this;
    }

    public function getConexion()
    {
        return $this->conexion;
    }

    public function setConexion($conexion)
    {
        $this->conexion = $conexion;

        return $this;
    }

    public function getError()
    {
        return $this->error;
    }

    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }
  }
 ?>
